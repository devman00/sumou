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

        Ad::create($data + [
            'user_id' => auth()->id(),
            'status' => 'pending',
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
        // dd($data);
        $ad->update($data + ['user_id' => auth()->id()] );

        return redirect()->back()->with('success', 'تم تحديث اللوحة بنجاح');
    }

    // ---- DELETE AD -----
    public function destroy(Ad $ad)
    {
        $ad->delete();
        return redirect()->route('ads.index')->with('success', 'تم الحذف بنجاح');
    }


}
