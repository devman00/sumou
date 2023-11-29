<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $ads_q = Ad::query();

        //$ads = Ad::latest()->get();
        //dd($request);

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

        $ads = $ads_q->latest()->get();

        return view('front.home', compact('ads'));
    }
}
