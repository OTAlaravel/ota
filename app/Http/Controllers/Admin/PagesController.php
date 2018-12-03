<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Admin;
use App\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class PagesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $pages = Pages::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.add');
    }

    public function doCreate(Request $request){
         $pageInfo = Pages::create($request->all());
         $pageInfo = json_encode($pageInfo);
    	 
    }
    
   public function PageComposer($id){
        $lang= \App::getLocale();
        $page =  Pages::where('id', '=' , $id)->get()->first();
        $page->translate($lang);
        
         return view('admin.pages.builder', compact('page'));
     }

    public function edit($id)
    {  
        $page =  Pages::where('id', '=' , $id)->get()->first();
        return view('admin.pages.builder', compact('page'));
    }

   public function doDpdate(Request $request){
       $lang = \App::getLocale();
       $page = Pages::where('id', Input::get('id'))->first();
       $page->translate($lang)->page_description = Input::get('page_content');
       $page->save();
       echo 1;
    exit;
   } 

}
