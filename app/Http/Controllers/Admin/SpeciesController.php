<?php

namespace App\Http\Controllers\Admin;
use App\Species;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpeciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $species = Species::all();
        return view('admin.species.index', compact('species'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.species.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function doadd(Request $request)
    {   
        $this->validate($request, [
            'species_name' => 'required|string|max:255',
        ]);
        $lang =  \App::getLocale();
        $info = Species::create($request->all());
        return redirect()->back()->with('message', 'Species added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, $id)
    {
        $species =  Species::where('id', '=' , $id)->get()->first();
        $species->translate($lang);
        return view('admin.species.edit', compact('species'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function doDelete($lang, $id)
    {
        $species = Species::where('id', '=' , $id)->get()->first();
        $species->translate($lang);
        Species::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Species deleted successfully!');
    }
}
