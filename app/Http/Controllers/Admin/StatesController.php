<?php

namespace App\Http\Controllers\admin;
use App\States;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = States::all();
        return view('admin.states.index', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.states.add');
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
            'states_name' => 'required|string|max:255',
            'countries_id' => 'required|integer',
        ]);
        $lang =  \App::getLocale();
        $stateInfo = States::create($request->all());
        return redirect()->back()->with('message', 'State added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, $id)
    {   
        $state =  States::where('id', '=' , $id)->get()->first();
        $state->translate($lang);
        return view('admin.states.edit', compact('state'));
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
            'states_name' => 'required|string|max:255',
            'countries_id' => 'required|integer',
        ]);
        $state = States::where('id', '=' , $id)->get()->first();
        $state->locale = $lang;
        $state->states_name = $request->states_name;
        $state->countries_id = $request->countries_id;
        $state->status = $request->status;
        $state->save();
        return redirect()->back()->with('message', 'State updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function doDelete($lang, $id)
    {
        $state = States::where('id', '=' , $id)->get()->first();
        $state->translate($lang);
        States::where('id', $id)->delete();
        return redirect()->back()->with('message', 'State deleted successfully!');
    }
}
