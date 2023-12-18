<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\AdRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = AdRequest::latest()->get();
        // $requests = AdRequest::with('vendor')->get();
        // dd($requests);
        return view('admin.request.index', compact('requests'));
    }

     /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $adRequest = AdRequest::findOrFail($id);

        // dd($adRequest);
        return view('admin.request.show', compact('adRequest'));
    }

    public function destroy(AdRequest $ad)
    {
        $ad->delete();
        return redirect()->route('admin.requests.index')->with('success', 'تم الحذف بنجاح');
    }
}
