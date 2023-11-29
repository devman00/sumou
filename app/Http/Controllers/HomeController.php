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
        // $ads = Ad::latest()->get();
        $ads = Ad::paginate(9);
        // $ads = Ad::simplePaginate(3);
        // $ads = Ad::cursorPaginate(3);

        // $ads = Ad::where('status', '!=', 'منشور')->paginate(
        //     $perPage = 3, $columns = ['*'], $pageName = 'page'
        // );


        if ($request->ajax()) {
            $view = view('front.parts.data', compact('ads'))->render();
  
            return response()->json(['html' => $view]);
        }



        return view('front.home', compact('ads'));
        
    }
}
