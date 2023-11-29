<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Ad\StoreAdRequest;
use App\Http\Requests\Front\Ad\UpdateAdRequest;
use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{

    // ----- LISTING ADS
    public function index(){

        $ads = auth()->user()->ads()->get();
        // $ads = Ad::latest()->get();
        return view('front.account.ads', compact('ads'));
    }


    // --- CREATE AD ---  
    public function create(){
        return view('front.ads.create');
    }

    public function store(StoreAdRequest $request){
    
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

        Ad::create($data + [
            'user_id' => auth()->id(),
            'status' => config('app')['ad_status']['pending'],
        ]);

        return redirect()->route('ads.index')->with('success', 'تم إضافة اللوحة بنجاح');
    }

    // ----- SHOW AD ---- 
    public function show(Ad $ad) {
        
        return view('front.ads.show', compact('ad'));
    }

    // ---- EDIT AD -----
    public function edit(Ad $ad){

        return view('front.ads.edit', compact('ad'));
    }

    public function update(Ad $ad, UpdateAdRequest $request){
        $data = $request->all();

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
        if (empty($request->input('in_auction')) || $request->input('in_auction')!='نعم') {
            $data['in_auction'] = 'لا';
        }

        //dd($data);
        $ad->update($data + ['user_id' => auth()->id()] );

        return redirect()->route('ads.index')->with('success', 'تم تحديث اللوحة بنجاح');
    }

    // ---- DELETE AD -----
    public function destroy(Ad $ad)
    {
        $ad->delete();
        return redirect()->route('ads.index')->with('success', 'تم الحذف بنجاح');
    }

    // ----- LIST AD ---- 
    public function lists(Request $request) {
        $ads_q = Ad::query();

        if ($request->filled('board_type')) {
            $ads_q->where('plate_type', $request->input('board_type'));
        }
        if ($request->filled('first_letter')) {
            $ads_q->where('first_letter', $request->input('first_letter'));
        }
        if ($request->filled('second_letter')) {
            $ads_q->where('second_letter', $request->input('second_letter'));
        }
        if ($request->filled('third_letter')) {
            $ads_q->where('third_letter', $request->input('third_letter'));
        }
        if ($request->filled('first_number')) {
            $ads_q->where('first_number', $request->input('first_number'));
        }
        if ($request->filled('second_number')) {
            $ads_q->where('second_number', $request->input('second_number'));
        }
        if ($request->filled('third_number')) {
            $ads_q->where('third_number', $request->input('third_number'));
        }
        if ($request->filled('fourth_number')) {
            $ads_q->where('fourth_number', $request->input('fourth_number'));
        }
        if (!empty($request->input('numbers_type')) && $request->input('numbers_type')==1) {
            $ads_q->whereNull('second_number')->whereNull('third_number')->whereNull('fourth_number');
        }
        if (!empty($request->input('numbers_type')) && $request->input('numbers_type')==2) {
            $ads_q->whereNotNull('second_number')->whereNull('third_number')->whereNull('fourth_number');
        }
        if (!empty($request->input('numbers_type')) && $request->input('numbers_type')==3) {
            $ads_q->whereNotNull('second_number')->whereNotNull('third_number')->whereNull('fourth_number');
        }
        if (!empty($request->input('numbers_type')) && $request->input('numbers_type')==4) {
            $ads_q->whereNotNull('second_number')->whereNotNull('third_number')->whereNotNull('fourth_number');
        }

        if (!empty($request->input('numbers_type-check')) && $request->input('numbers_type-check')==1) {
            $ads_q->whereNull('second_number')->whereNull('third_number')->whereNull('fourth_number');
        }
        if (!empty($request->input('numbers_type-check')) && $request->input('numbers_type-check')==2) {
            $ads_q->whereNotNull('second_number')->whereNull('third_number')->whereNull('fourth_number');
        }
        if (!empty($request->input('numbers_type-check')) && $request->input('numbers_type-check')==3) {
            $ads_q->whereNotNull('second_number')->whereNotNull('third_number')->whereNull('fourth_number');
        }
        if (!empty($request->input('numbers_type-check')) && $request->input('numbers_type-check')==4) {
            $ads_q->whereNotNull('second_number')->whereNotNull('third_number')->whereNotNull('fourth_number');
        }

        //$ads = $ads_q->get();
        $ads = $ads_q->paginate(9);

        if ($request->ajax()) {
            $view = view('front.parts.data', compact('ads'))->render();
            return response()->json(['html' => $view]);
        }

        return view('front.ads.lists', compact('ads'));
    }


}
