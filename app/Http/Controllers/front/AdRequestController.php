<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\AdRequests\StoreAdRqstRequest;
use App\Models\AdRequest;
use App\Services\SMS\SMSProvider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function requestType(AdRequest $adRequest)
    {
        // dd(auth()->user()->national_id);
        // $requests = AdRequest::latest()->get();
        $requests = AdRequest::where('vendor_national_id', auth()->user()->national_id)
                            ->where('request_type', 'sell')
                            ->where('status','pending')
                            ->orWhere('status','accepted')
                            ->with('user')
                            ->get();
                            // ->first();

        return view('front.requests.request_type', compact('requests'));
    }

    
     /**
     * Show the form for Confirming Request 
     */
    public function confirm(Request $request)
    {
        $segment_id = $request->segment(3);
        // $r = DB::table('ad_requests')
        //     ->where('id', $segment_id)
        //     ->join('users','ad_requests.user_id','=','users.id')
        //     // ->select('ad_requests.*', 'users.national_id')

        //     // ->join('users', 'ad_requests.users_id', '=', 'users.id')

        //     ->first();

        $r = AdRequest::where('id',$segment_id)
                ->with('user')
                ->first();
                // dd($r);
        // dd(auth()->user()->national_id);
        $user = auth()->user();

        
        // if($user->id == $r->user_id && $user->national_id == $r->vendor_national_id && $r->status != 'pending'):
        if($user->national_id == $r->vendor_national_id && $r->status != 'pending' && $r->request_type == 'sell'):
            return view('front.requests.confirm', compact('r'));
        else :
             return redirect()->route('requests.type');
        endif;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $requests = auth()->user()->requests()->get();
        // $created_requests = DB::table('ad_requests')
        //             ->where('user_id', auth()->user()->id)
        //             ->get();
        $created_requests = AdRequest::with('user')
                    ->where('vendor_national_id','<>', auth()->user()->national_id)    // ( Request Owner != current sender user )
                    ->get();

        // $incoming_requests = DB::table('ad_requests')
        //             ->where('vendor_national_id', auth()->user()->national_id)
        //             ->where('status','pending')
        //             // ->where('vendor_id','<>', auth()->user()->id)
        //             ->get();
        
        $incoming_requests = AdRequest::with('user')
                    ->where('vendor_national_id', auth()->user()->national_id)
                    ->where('user_id','<>', auth()->user()->id)    // ( Request Owner != current reciever user )
                    // ->where('status','pending')
                    ->get();


        return view('front.account.requests', compact('incoming_requests','created_requests'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.requests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdRqstRequest $request)
    {
        //  if($request_owner_national_id != $request_vendor_national_id )
        // {

        // }
            
        $data = $request->all();
        // dd($data);

        if (!empty($request->input('numbers_type')) && $request->input('numbers_type')==1) {
            $data['second_number'] = '';
            $data['third_number'] = '';
            $data['fourth_number'] = '';
        }
        if (!empty($request->input('numbers_type')) && $request->input('numbers_type')==2) {
            $data['third_number'] = '';
            $data['fourth_number'] = '';
        }
        if (!empty($request->input('numbers_type')) && $request->input('numbers_type')==3) {
            $data['fourth_number'] = '';
        }

        AdRequest::create($data + [
            'user_id' => auth()->id(),
            'status' => 'pending',
            'request_type' => 'sell',
            'status_updated_at' => Carbon::parse($request->status_updated_at),
        ]);


        // ---------- Start  SMS ---------- 
        $plate = $request->first_letter.' '.$request->second_letter.' '.$request->third_letter.' _ '.$request->first_number.' '.$request->second_number.' '.$request->third_number.' '.$request->fourth_number;
        
        $seller_phone = auth()->user()->phone;
        $seller_national_id = auth()->user()->national_id;
        
        $vendor_phone = $request->vendor_phone;
        
        $msgs = [
            'seller' => [
                'seller_create_request' => ' عميلنا العزيز، تم إصدار طلب مبايعة للوحة ['.$plate.'] بنجاح. على المشتري قبول أو رفض الطلب عبر حسابه في منصة سمو ',
            ],
            'vendor' =>  [   
                'request_sent_by_seller' => 'عميلنا العزيز، قام صاحب الهوية '.$seller_national_id.' بإصدار طلب مبايعة للوحة ['.$plate.']. الرجاء قبول أو رفض الطلب عبر حسابك في منصة سمو. www.sumou.sa'
            ]
        ];



        // To Seller -------- 
        $sms_to_seller =  $msgs['seller']['seller_create_request'];
        (new SMSProvider($sms_to_seller, $seller_phone))->send();

        // To Vendor -------- 
        $sms_to_vendor =  $msgs['vendor']['request_sent_by_seller'];
        (new SMSProvider($sms_to_vendor, $vendor_phone))->send();

        return redirect()->route('requests.index')->with('success', 'تمت إضافة طلبك بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $adRequest = AdRequest::findOrFail($id);

        // dd($adRequest);
        return view('front.requests.show', compact('adRequest'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdRequest $adRequest)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdRequest $adRequest, $id)
    {

        $current_rqst = AdRequest::find($id);
        
        // Accept/Reject Request
        if($request->has('confirm_request'))    
        {
            // $adRequest->update($data + ['vendor_id' => auth()->id()] );
            // $action_status = $request->accept_request ?? $request->refuse_request;     // accept / refuse
            
            $rid = $request->request_id;            
            $data = [
                'status' => $request->confirm_request,
                'vendor_id' => auth()->user()->id,
                'created_at' => Carbon::parse($request->created_at),
                'updated_at' => Carbon::parse($request->updated_at),
                'status_updated_at' => Carbon::parse($request->status_updated_at),
            ];
            DB::table('ad_requests')->where('id', $rid)->update($data);

            
            // ---------- Start  SMS ---------- 
            $plate = $current_rqst->first_letter.' '.$current_rqst->second_letter.' '.$current_rqst->third_letter.' _ '.$current_rqst->first_number.' '.$current_rqst->second_number.' '.$current_rqst->third_number.' '.$current_rqst->fourth_number;
            $plate_price = $current_rqst->plate_price;

            $seller_phone = auth()->user()->phone;     

            $msgs = [
                'seller' => [
                    'accepted_by_vendor' => ' عميلنا العزيز، تم إصدار طلب مبايعة للوحة ['.$plate.'] بنجاح. على المشتري قبول أو رفض الطلب عبر حسابه في منصة سمو ',
                ]
            ];



            // To Seller -------- 
            $sms_to_seller =  $msgs['seller']['accepted_by_vendor'];
            (new SMSProvider($sms_to_seller, $seller_phone))->send();

            return redirect()->route('requests.confirm',['id' => $rid])->with('success', 'تمت الموافقة على مبايعة اللوحة بنجاح');
        }


        // CONFIRM request
        if($request->has('confirmation_status'))    
        {           
            $rid = $request->request_id;    
            $data = [
                'request_type' => 'confirm',
                'vendor_id' => auth()->user()->id,
                'vendor_phone' => auth()->user()->phone,
                'vendor_national_id' => $request->vendor_national_id,
                'vendor_bank_name' => $request->vendor_bank_name,
                'vendor_bank_iban' => $request->vendor_bank_iban,
                'vendor_city' => $request->vendor_city,
                'vendor_address' => $request->vendor_address,
                'vendor_authorization_number' => $request->vendor_authorization_number,
                'vendor_plate_number' => $request->vendor_plate_number,
                'vendor_serial_number' => $request->vendor_serial_number,

                'updated_at' => Carbon::parse($request->updated_at),
                'status_updated_at' => Carbon::parse($request->status_updated_at),
            ];
            $validateData = [
                // 'vendor_phone' => ['required'],
                'vendor_national_id' => ['required'],
                'vendor_bank_name' => ['required'],
                'vendor_bank_iban' => ['required','min:11','max:11'],
                'vendor_city' => ['required'],
                'vendor_address' => ['required'],
                'vendor_authorization_number' => ['required','min:9','max:9'],
                'vendor_plate_number' => ['required','max:7'],
                'vendor_serial_number' => ['required'],
            ];

            $request->validate($validateData, $request->all());
            // $adRequest->update($request->all());

            DB::table('ad_requests')->where('id', $rid)->update($data);


            // ---------- Start  SMS ---------- 
            $plate = $current_rqst->first_letter.' '.$current_rqst->second_letter.' '.$current_rqst->third_letter.' _ '.$current_rqst->first_number.' '.$current_rqst->second_number.' '.$current_rqst->third_number.' '.$current_rqst->fourth_number;
            $plate_price = $current_rqst->plate_price;

            // $seller_phone = auth()->user()->phone;
            // $seller_national_id = auth()->user()->national_id;

            $vendor_phone = $current_rqst->vendor_phone;
            $msgs = [
                // 'seller' => [
                //     'confirm_recieving_payment' => 'عملينا العزيز تم استلام كامل المبلغ الإجمالي مقابل ثمن اللوحة ['.$plate.'] والمقدر ب '.$plate_price.'   ريال سيتم إعلامك حين الأنتهاء من عملية النقل .',
                //     'after_creating_contract' => 'عميلنا العزيز، نهنئكم بإكتمال عملية المبايعة بنجاح. مع العلم بأنه تم نقل ملكية اللوحة إلى المشتري في أنظمة الإدارة العامة للمرور. قم بتسليم اللوحات الى للمشتري.
                //     استعراض العقد : <a href="https://sumou.sa"> من هنا </a>
                //     ',
                // ],
                'vendor' =>  [   
                    
                    'after_accepting_request_before_paying' => '
                    عميلنا العزيز، لإكمال عقد المبايعة نأمل منكم تحويل مبلغ اللوحة مع أجور الخدمة '.$plate_price.' ريال سعودي ( سعراللوحة + أجور الخدمة ) الى الحساب  الموضح  ادناه:  
                    الاسم الاول : حساب <br> \r\n
                    الاسم الاخير :ضامن  <br> \r\n
                    رقم الحساب:545991025017  <br> \r\n
                    اسم البنك:RAJHI \r\n
                    الايبان:SA4980900359545991025017 \r\n
                    علماً بأن المبلغ الاجمالي يشمل رسوم نقل اللوحات 800 ريال الخاصة بالمرور.',
                    
                    // 'confirm_recieving_payment' => 'عملينا العزيز تم استلام كامل المبلغ الإجمالي مقابل ثمن اللوحة ['.$plate.'] والمقدر ب '.$plate_price.'   ريال سيتم إعلامك حين الأنتهاء من عملية النقل .',
                    // 'after_creating_contract' => 'عميلنا العزيز، تم نقل ملكية اللوحة ['.$plate.'] و تسجيلها بإسمك في أنظمة الإدارة العامة للمرور. يرجى إرسال اللوحات الخاصة بك الى البائع عبر وسائل الشحن .',
                ]
            ];



            // To Vendor -------- 
            $sms_to_vendor =  $msgs['vendor']['after_accepting_request_before_paying'];
            (new SMSProvider($sms_to_vendor, $vendor_phone))->send();


            return redirect()->route('requests.show',['request' => $rid])->with('success', 'تم تأكيد المبايعة بنجاح');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdRequest $adRequest)
    {
        //
    }
}
