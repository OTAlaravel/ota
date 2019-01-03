<?php

namespace App\Http\Controllers\admin;
use App\Experiences;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperiencesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $experiences = Experiences::all();
        return view('admin.experiences.index', compact('experiences'));
    }

    public function create()
    {
        return view('admin.experiences.add');
    }

    public function doadd(Request $request)
    {
        $this->validate($request, [
            'experiences_name' => 'required|string|max:255',
        ]);
        $lang =  \App::getLocale();
        $info = Experiences::create($request->all());
        return redirect()->back()->with('message', 'Experiences added successfully!');
    }

    public function edit($lang, $id)
    {
        $experience =  Experiences::where('id', '=' , $id)->get()->first();
        $experience->translate($lang);
        return view('admin.experiences.edit', compact('experience'));
    }

    public function update(Request $request, $lang, $id)
    {
        $this->validate($request, [
            'experiences_name' => 'required|string|max:255',
        ]);
        $experience = Experiences::where('id', '=' , $id)->get()->first();
        $experience->locale = $lang;
        $experience->experiences_name = $request->experiences_name;
        $experience->status = $request->status;
        $experience->save();
        return redirect()->back()->with('message', 'Experiences updated successfully!');
    }

    public function doDelete($lang, $id)
    {
        $experience = Experiences::where('id', '=' , $id)->get()->first();
        $experience->translate($lang);
        Experiences::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Experiences deleted successfully!');
    }
}
