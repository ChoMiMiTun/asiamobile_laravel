<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::all();
        return view('backend.slide.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        // Validation
        $request->validate([
            "description" => "sometimes|required|min:4",
            "photo" => "required|mimes:jpeg,bmp,png"
        ]);

        // if include file, upload
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // slideimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('slideimg', $fileName, 'public');

            $path = '/storage/'.$filePath;
        }

        // store
        $slide = new Slide();
        $slide->description = $request->description;
        $slide->photo = $path;
        $slide->save();

        // redirect
        return redirect()->route('slide.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        return view('backend.slide.show', compact('slide'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        return view('backend.slide.edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
        // dd($request);

        // Validation
        $request->validate([
            "description" => "sometimes|required|min:4",
            "photo" => "sometimes|required|mimes:jpeg,bmp,png", // a.jpg
            "oldphoto" => "required"
        ]);

        // if include file, upload
        if($request->file()) {
            // delete olo photo

            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // slideimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('slideimg', $fileName, 'public');

            $path = '/storage/'.$filePath;
        }else{
            $path = $request->oldphoto;
        }

        // update
        $slider->name = $request->name;
        $slider->photo = $path;
        $slider->save();

        // redirect
        return redirect()->route('slide.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        $slide->delete();
        return redirect()->route('slide.index');
    }
}
