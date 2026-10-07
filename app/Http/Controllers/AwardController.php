<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $awards = Award::all();
        return view('back.award.index', compact('awards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.award.create');
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
            'award_image' => 'required|mimes:jpg,png,jpeg,pdf|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->award_image->extension();

        $request->award_image->move(public_path('images/award'), $newImageName);

        Award::create([
            'title' => $request->input('title'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('message', 'Award has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\award  $award
     * @return \Illuminate\Http\Response
     */
    public function show(award $award)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\award  $award
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('back.award.edit')->with('award', Award::where('id', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\award  $award
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'award_image' => 'image|mimes:jpg,png,jpeg,pdf|max:5048'
        ]);

        $data = [
            'title' => $request->input('title'),
            'user_id' => auth()->user()->id
        ];

        if($request->hasFile('award_image')) {
            $newImageName = uniqid() . '-' . $request->title . '.' . $request->award_image->extension();
            $data['image_path'] = $newImageName;
            $request->award_image->move(public_path('images/award'), $newImageName);
        }

        Award::where('id', $id)->update($data);

        return redirect()->back()->with('message', 'Award has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\award  $award
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $award_img = Award::find($id);
        $award = Award::where('id', $id);
        unlink("images/awrd/".$award_img->image_path);
        $award->delete();

        return redirect()->back()->with('message', 'Award has been deleted!');

    }
}
