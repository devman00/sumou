<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Ad\StoreAdRequest;
use App\Http\Requests\Admin\Ad\UpdateAdRequest;
use App\Models\Ad;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = Ad::latest()->get();
        return view('admin.ad.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $categories = Category::latest()->where('status', '=', 1)->get();
        return view('admin.ad.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdRequest $request)
    {
        $data = $request->all();
        
        // if($file = $request->file('thumbnail'))
        // {
        //     $destinationPath = ('storage/images/ads');
        //     $imgP = date('YmdHis') . "." . $file->getClientOriginalExtension();
        //     $file->move($destinationPath, $imgP); 
        //     $data['thumbnail'] = $imgP;
        // } else {
        //     $data['thumbnail'] = '';
        // }

        Ad::create($data);    

        return redirect()->route('admin.ad.index')->with('success', 'Ad Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ad $ad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ad $ad)
    {
        // $categories = Category::latest()->where('status', '=', 1)->get();
        return view('admin.ad.edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdRequest $request, Ad $ad)
    {
        $data = $request->all();
        // dd('hello');
        // if($file = $request->file('thumbnail'))
        // {
        //     $destinationPath = ('storage/images/ads');
        //     $imgP = date('YmdHis') . "." . $file->getClientOriginalExtension();
        //     $file->move($destinationPath, $imgP); 
        //     $data['thumbnail'] = $imgP;
        // }         

        $ad->update($data);
        return redirect()->back()->with('success', 'تم التحديث بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ad $ad)
    {
        $ad->delete();
        return redirect()->route('admin.ads.index')->with('success', 'Deleted sussussfully');
    }
}
