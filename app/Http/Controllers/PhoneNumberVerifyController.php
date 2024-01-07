<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\SMS\SMSProvider;
use Illuminate\Support\Facades\Auth;

class PhoneNumberVerifyController extends Controller
{
    //
    public function show(Request $request)
    {
        if ($request->user()->userPhoneVerified())
        {
            return redirect()->route('home');
        }
        else
        {
            return view('front.phoneverify.show');
        }
    }

    public function verify(Request $request)
    {
        // dd($request->verification_code);

        if ($request->user()->verification_code !== $request->verification_code)
        {
            return back()->withErrors(['msg' => 'رقم التحقق  غير صحيح المرجو المحاولة من جديد']);
        }

        if ($request->user()->userPhoneVerified())
        {
            return redirect()->route('home');
        }

        $request->user()->phoneVerifiedAt();

        return redirect()->route('home')->with('status', 'تم التحقق من رقم جوالك بنجاح!');
    }

    public function verification(Request $request)
    {
        if (Auth::check() && !empty(Auth::user()->id) && Auth::user()->id){

            /*$request->validate([
                'phone' => ['required', 'string', 'unique:users,phone,'.Auth::user()->id],
            ]);*/

            $req = User::where('phone', $request->phone)->where('id', '<>', Auth::user()->id)->get();
            if ($req->count() > 0){
                return ['status' => 'false', 'class' => 'error', 'title' => 'خطأ!', 'message' => 'رقم الهاتف مُستخدم من قبل'];
            } else {
                $code = random_int(100,9999);
                Auth::user()->verification_code = $code;
                Auth::user()->save();
                $phone = '966+'.$request->phone;
                $sms = "رمز التحقق لسمو الخاص بك: ".$code;
                (new SMSProvider($phone, $sms))->send();
                return ['status' => 'true', 'class' => 'success', 'title' => 'شكرًا', 'message' => 'تم التحقق من رقم جوالك بنجاح!'];
            }
        }
        return 'error';
    }

    public function check(Request $request)
    {
        if (Auth::check() && !empty(Auth::user()->id) && Auth::user()->id){
            if ($request->user()->verification_code !== $request->verification_code) {
                return ['status' => 'false', 'class' => 'error', 'title' => 'خطأ!', 'message' => 'رقم التحقق  غير صحيح المرجو المحاولة من جديد'];
            }
            if ($request->user()->userPhoneVerified()) {
                return ['status' => 'true', 'class' => 'warning', 'title' => 'خطأ!', 'message' => 'تم التحقق من رقم جوالك من قبل!'];
            }
            Auth::user()->phone = $request->phone;
            Auth::user()->save();
            $request->user()->phoneVerifiedAt();
            return ['status' => 'true', 'class' => 'success', 'title' => 'شكرًا', 'message' => 'تم التحقق من رقم جوالك بنجاح!'];
        }
        return 'error';
    }


}
