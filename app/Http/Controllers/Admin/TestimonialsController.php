<?php

namespace App\Http\Controllers\admin;
use App\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonials::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.add');
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
            'testimonials_name' => 'required|string|max:255',
            'testimonials_content' => 'required',
            'testimonials_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $lang =  \App::getLocale(); 
        $Info = Testimonials::create($request->all());
        $testimonial = Testimonials::find($Info->id);
        $file = $request->file('testimonials_image');
        if($file){
            $testimonials_image = $file->getClientOriginalName();
            $path = $request->testimonials_image->store('public/uploads');
            $testimonial->testimonials_image = $path;
        }
        $testimonial->save();
        return redirect()->back()->with('message', 'Testimonial added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, $id)
    {   $testimonial =  Testimonials::where('id', '=' , $id)->get()->first();
        $testimonial->translate($lang);
        return view('admin.testimonials.edit', compact('testimonial'));
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
        $lang =  \App::getLocale(); 
        $testimonial = Testimonials::find($id);
        $file = $request->file('testimonials_image');
        if($file){
            $testi = Testimonials::where('id', '=' , $id)->get()->first();
            if($testi->testimonials_image){
                Storage::delete($testi->testimonials_image);
            }
            $testimonials_image = $file->getClientOriginalName();
            $path = $request->testimonials_image->store('public/uploads');
            $testimonial->testimonials_image = $path;
        }
        $testimonial->locale = $lang;
        $testimonial->testimonials_name = $request->testimonials_name;
        $testimonial->testimonials_content = $request->testimonials_content;
        $testimonial->status = $request->status;
        $testimonial->save();
        return redirect()->back()->with('message', 'Testimonial updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function doDelete($lang, $id)
    {
        $testimonial = Testimonials::where('id', '=' , $id)->get()->first();
        $testimonial->translate($lang);
        if($testimonial->testimonials_image){
            Storage::delete($testimonial->testimonials_image);
        }
        Testimonials::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Testimonial deleted successfully!');
    }
}
