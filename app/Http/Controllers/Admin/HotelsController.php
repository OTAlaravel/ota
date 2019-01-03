<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.hotels.index');
    }

    public function uploadcsv(Request $request){
        $this->validate($request,[
            'upload_csv' => 'required|mimes:csv,txt',

        ]);
        if($request->file('upload_csv')){
            $path = $request->file('upload_csv')->getRealPath();
            $file = fopen($path, "r");
            $getData = fgetcsv($file, 0, ",");
            $row = 0;
            do { 
                if($row > 1){
                    echo '<pre>';
                    print_r($getData);
                    echo '</pre>';
                }
                $row++;
            } while (($getData = fgetcsv($file, 0, ","))!== FALSE);
        }
        
        exit();

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
