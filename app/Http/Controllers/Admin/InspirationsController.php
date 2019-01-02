<?php

namespace App\Http\Controllers\admin;
use App\Inspirations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InspirationsController extends Controller
{

    public function index()
    {
        $inspirations = Inspirations::all();
        return view('admin.inspirations.index', compact('inspirations'));
    }

    public function create()
    {
        return view('admin.inspirations.add');
    }

    public function doadd(Request $request)
    {
        $this->validate($request, [
            'inspirations_name' => 'required|string|max:255',
        ]);
        $lang =  \App::getLocale();
        $info = Inspirations::create($request->all());
        return redirect()->back()->with('message', 'Inspirations added successfully!');
    }

    public function edit($lang, $id)
    {
        $inspiration =  Inspirations::where('id', '=' , $id)->get()->first();
        $inspiration->translate($lang);
        return view('admin.inspirations.edit', compact('inspiration'));
    }

    public function update(Request $request, $lang, $id)
    {
        $this->validate($request, [
            'inspirations_name' => 'required|string|max:255',
        ]);
        $inspiration = Inspirations::where('id', '=' , $id)->get()->first();
        $inspiration->locale = $lang;
        $inspiration->inspirations_name = $request->inspirations_name;
        $inspiration->status = $request->status;
        $inspiration->save();
        return redirect()->back()->with('message', 'Inspirations updated successfully!');
    }

    public function doDelete($lang, $id)
    {
        $inspiration = Inspirations::where('id', '=' , $id)->get()->first();
        $inspiration->translate($lang);
        Inspirations::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Inspirations deleted successfully!');
    }
}
