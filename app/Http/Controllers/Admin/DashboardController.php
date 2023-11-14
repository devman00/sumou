<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index(){
        // $registeredUsers = User::latest()->get();
        $registeredUsers = DB::table('users')
        ->orderBy('created_at', 'desc')
        ->limit(4)
        ->get();

        $ads = Ad::latest()->get();
        return view('admin.dashboard', compact('registeredUsers','ads'));
    }
}
