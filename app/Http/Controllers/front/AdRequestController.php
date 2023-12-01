<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\AdRequest;
use Illuminate\Http\Request;

class AdRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function requestType()
    {

        return view('front.requests.request_type');
    }


        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AdRequest $adRequest)
    {
        //
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
    public function update(Request $request, AdRequest $adRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdRequest $adRequest)
    {
        //
    }
}
