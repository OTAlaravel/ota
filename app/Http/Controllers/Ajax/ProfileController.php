<?php

namespace App\Http\Controllers\Ajax;
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
        $U = auth('web')->user();  
         // Fill user model
        $user = User::find($U->id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->mobile_number = $request->mobile_number;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->gender = $request->gender;
        
         if($user->save()){
            echo '<div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong>Your profile successfully update </div>';
         }else{
            echo '<div class="alert alert-danger alert-dismissible">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <strong>Error!</strong> Your profile not updated! please try again </div>';
         }
        exit;
    }

    public function DoChangePassword(Request $request)
    {
        $U = auth('web')->user();  
         // Fill user model
        $user = User::find($U->id);
        $user->password = bcrypt($request->password);
        if($user->save()){
            echo '<div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong>Your Password successfully Changed </div>';
         }else{
            echo '<div class="alert alert-danger alert-dismissible">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <strong>Error!</strong> Your Password not Changed! please try again </div>';
         }
        exit;
       
        
    }
    
}
