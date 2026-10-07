<?php

namespace App\Http\Controllers;

use App\Models\OurStory;
use Illuminate\Http\Request;

class OurStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourstory = OurStory::firstOrCreate(['id' => 1]);
        return view('back.whowe.index', compact('ourstory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'who_we_are' => 'required',
            'our_mission' => 'required',
            'our_vision' => 'required',
            'our_story_image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->our_story_image->extension();

        $request->our_story_image->move(public_path('images/whoweare'), $newImageName);

        OurStory::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'who_we_are' => $request->input('who_we_are'),
            'our_mission' => $request->input('our_mission'),
            'our_vision' => $request->input('our_vision'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('message', 'Our Story data has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OurStory  $ourStory
     * @return \Illuminate\Http\Response
     */
    public function show(OurStory $ourStory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurStory  $ourStory
     * @return \Illuminate\Http\Response
     */
    public function edit(OurStory $ourStory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurStory  $ourStory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'who_we_are' => 'required',
            'our_mission' => 'required',
            'our_vision' => 'required',
            'our_story_image' => 'image|mimes:jpg,png,jpeg|max:5048'
        ]);

        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'who_we_are' => $request->input('who_we_are'),
            'our_mission' => $request->input('our_mission'),
            'our_vision' => $request->input('our_vision'),
            'user_id' => auth()->user()->id
        ];

        if($request->hasFile('our_story_image')) {
            $newImageName = uniqid() . '-' . $request->title . '.' . $request->our_story_image->extension();
            $data['image_path'] = $newImageName;
            $request->our_story_image->move(public_path('images/hero'), $newImageName);
        }

        OurStory::where('id', $id)->update($data);

        return redirect()->back()->with('message', 'Our Story data has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OurStory  $ourStory
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurStory $ourStory)
    {
        //
    }
}
