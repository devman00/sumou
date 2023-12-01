<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

use Illuminate\Validation\Validator; 


class UserController extends Controller
{
    // Profile
    public function profile()
    {

        $user = auth()->user();
        // return view('front.account.profile', compact('user'));
        return view('front.account.settings', compact('user'));
    }
    
    // --------------- Update Profile --------------
    public function updateProfile(Request $request, User $user)
    {
        $data = [
            // 'name' => ['required', 'string', 'max:255'],
            //'whatsapp' => ['required', 'min:9', 'max:9', 'numeric'],
            //'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user)],
        ];

        // $request->validate($data ,$request->all());
        //$validatedData = $request->validate($data, $request->all());

        // dd($validatedData);
        //$user->update($validatedData);
        $user->update($request->all());

        return redirect()->back()->with('success', 'تم تحديث البيانات بنجاح');
    }




    // --------------- Password --------------
    public function editPassword()
    {
        return view('front.account.change-password');
    }

    public function updatePassword(Request $request, User $user)
    {
        $data = [
                'password' => ['required', 'confirmed', 'min:12', Password::defaults()]
                ];
        $request->validate($data , $request->all());
        // dd('test');
        $user->update(['password' => Hash::make($request->password)]);

        return redirect()->back()->with('success', 'تم تحديث كلمة المرور بنجاح');
    }

    // public function dashboard(){
    //     return view('front.account.index');
    // }

}
