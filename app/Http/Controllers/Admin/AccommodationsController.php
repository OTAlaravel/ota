<?php

namespace App\Http\Controllers\admin;
use App\Accommodations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccommodationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $accommodations =  Accommodations::all();
        return view('admin.accommodations.index', compact('accommodations'));
    }

    public function create()
    {
        return view('admin.accommodations.add');
    }

   
    public function doadd(Request $request)
    {
        $this->validate($request, [
            'accommodations_name' => 'required|string|max:255',
        ]);
        $lang =  \App::getLocale(); 
        $info =  Accommodations::create($request->all());
        return redirect()->back()->with('message', 'Accommodation added successfully!');
    }

    public function edit($lang, $id)
    {   
        $accommodation =  Accommodations::where('id', '=' , $id)->get()->first();
        $accommodation->translate($lang);
        return view('admin.accommodations.edit', compact('accommodation'));
    }

    public function update(Request $request, $lang, $id)
    {
        $this->validate($request, [
            'accommodations_name' => 'required|string|max:255',
        ]);
        $accommodation = Accommodations::where('id', '=' , $id)->get()->first();
        $accommodation->locale = $lang;
        $accommodation->accommodations_name = $request->accommodations_name;
        $accommodation->accommodations_slug = $request->accommodations_slug;
        $accommodation->status = $request->status;
        $accommodation->save();
        return redirect()->back()->with('message', 'Accommodation updated successfully!');
    }

    public function doDelete($lang, $id)
    {
        $accommodation = Accommodations::where('id', '=' , $id)->get()->first();
        $accommodation->translate($lang);
        Accommodations::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Accommodation deleted successfully!');
    }
}
