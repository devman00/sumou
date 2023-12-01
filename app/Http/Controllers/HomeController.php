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

        if (!empty($request->input('monocular-check'))) {
            $ads_q->orWhere(function ($query) {
                $query->whereNull('second_number')->whereNull('third_number')->whereNull('fourth_number');
            });
        }
        if (!empty($request->input('bilateral-check'))) {
            $ads_q->orWhere(function ($query) {
                $query->whereNotNull('second_number')->whereNull('third_number')->whereNull('fourth_number');
            });
        }
        if (!empty($request->input('tripartite-check'))) {
            $ads_q->orWhere(function ($query) {
                $query->whereNotNull('second_number')->whereNotNull('third_number')->whereNull('fourth_number');
            });
        }
        if (!empty($request->input('quadrant-check'))) {
            $ads_q->orWhere(function ($query) {
                $query->whereNotNull('second_number')->whereNotNull('third_number')->whereNotNull('fourth_number');
            });
        }

        //$ads = $ads_q->latest()->get();
        $ads = $ads_q->latest()->paginate(9);

        if ($request->ajax()) {
            $view = view('front.parts.data', compact('ads'))->render();
            return response()->json(['html' => $view]);
        }

        

        return view('front.home', compact('ads'));
    }
}
