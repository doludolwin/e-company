<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;

class AdminHomeController extends Controller
{
    use AuthenticatesUsers;
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
    	$user=$request->user();
    	$admin=DB::table('admins')->where('user_id', $user->id)->first();
        return view('partials.admin-home',compact('user','admin'));
    }
}
