<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin'); 
    }

    public function general_settings(){

    	return view('admin.settings.general');
    }

    public function save_general_settings(Request $request, $lang){
    	print_r($request->all());
    	exit();
    }
}
