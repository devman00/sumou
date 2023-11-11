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

    // ----- LIST AD ---- 
    public function lists(Request $request) {
        $ads_q = Ad::query();

        if ($request->filled('board_type')) {
            echo "board_type: ". $request->input('board_type') . "<br>";
            $ads_q->where('plate_type', $request->input('board_type'));
        }
        if ($request->filled('first_letter')) {
            echo "first_letter: ". $request->input('first_letter') . "<br>";
            $ads_q->where('first_letter', $request->input('first_letter'));
        }
        if ($request->filled('second_letter')) {
            echo "second_letter: ". $request->input('second_letter') . "<br>";
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

        $ads = $ads_q->get();

        return view('front.ads.lists', compact('ads'));
    }


}
