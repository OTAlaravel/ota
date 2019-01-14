<?php

namespace App\Http\Controllers;
use App\User;
use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    public function DoUpdateProfile(Request $request)
    {
        $user = auth('web')->user();  

        var_dump($request->all());
        
    }

    public function DoChangePassword(Request $request)
    {
        $user = auth('web')->user();  
        
    }
    
}
