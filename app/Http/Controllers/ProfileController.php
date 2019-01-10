<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth('web')->user();
        
        if($user->role=1){
          return view('frontend.Hotelier.dashboard');
        }else{
          return view('frontend.customer.dashboard');
        }
        
    }
    public function profile()
    {
       $user = auth('web')->user();
       if($user->role=1){
          return view('frontend.Hotelier.profile');
        }else{
          return view('frontend.customer.profile');
        }
    }
}
