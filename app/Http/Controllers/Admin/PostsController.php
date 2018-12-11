<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Admin;
use App\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class PostsController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $posts = Posts::all();
        
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.add');
    }

    public function doCreate(Request $request){
         $postsInfo = Posts::create($request->all());
         $postsInfo = json_encode($postsInfo);
    	 
    }
    


    public function postEdit($lang,$id)
    {  
        $post =  Posts::where('id', '=' , $id)->get()->first();
        $post->translate($lang);
        return view('admin.posts.edit', compact('post'));
    }

   public function doUpdate(Request $request){
       $lang = \App::getLocale();
       $post = Posts::where('id', Input::get('id'))->first();
       $post->translate($lang)->post_description = Input::get('post_content');
       $post->save();
       echo 1;
    exit;
   } 
}
