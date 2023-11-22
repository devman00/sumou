<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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
        // return view('front.phoneverify.show');
    }

    public function verify(Request $request)
    {
        // dd($request->verification_code);

        if ($request->user()->verification_code !== $request->verification_code) 
        {
            return back()->withErrors(['msg', 'رقم التحقق  غير صحيح المرجو المحاولة من جديد']);
        }

        if ($request->user()->userPhoneVerified()) 
        {
            return redirect()->route('home');
        }

        $request->user()->phoneVerifiedAt();

        return redirect()->route('home')->with('status', 'تم التحقق من رقم جوالك بنجاح!');
    }
}
