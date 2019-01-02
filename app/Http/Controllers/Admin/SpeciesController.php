<?php

namespace App\Http\Controllers\Admin;
use App\Species;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpeciesController extends Controller
{
    
    public function index()
    {   
        $species = Species::all();
        return view('admin.species.index', compact('species'));
    }

    public function create()
    {
        return view('admin.species.add');
    }

    public function doadd(Request $request)
    {   
        $this->validate($request, [
            'species_name' => 'required|string|max:255',
        ]);
        $lang =  \App::getLocale();
        $info = Species::create($request->all());
        return redirect()->back()->with('message', 'Species added successfully!');
    }

    public function edit($lang, $id)
    {
        $species =  Species::where('id', '=' , $id)->get()->first();
        $species->translate($lang);
        return view('admin.species.edit', compact('species'));
    }

    public function update(Request $request, $lang, $id)
    {
        $this->validate($request, [
            'species_name' => 'required|string|max:255',
        ]);
        $species = Species::where('id', '=' , $id)->get()->first();
        $species->locale = $lang;
        $species->species_name = $request->species_name;
        $species->status = $request->status;
        $species->save();
        return redirect()->back()->with('message', 'Species updated successfully!');
    }

    public function doDelete($lang, $id)
    {
        $species = Species::where('id', '=' , $id)->get()->first();
        $species->translate($lang);
        Species::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Species deleted successfully!');
    }
}
