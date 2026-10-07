<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peoples = People::all();
        return view('back.people.index', compact('peoples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.people.create');
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
            'name' => 'required',
            'designation' => 'required',
            'people_image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->name . '.' . $request->people_image->extension();

        $request->people_image->move(public_path('images/people'), $newImageName);

        People::create([
            'slug' => SlugService::createSlug(People::class, 'slug', $request->name),
            'name' => $request->input('name'),
            'designation' => $request->input('designation'),
            'image_path' => $newImageName,
            'facebook' => $request->input('facebook'),
            'twitter' => $request->input('twitter'),
            'linkedin' => $request->input('linkedin'),
            'printerest' => $request->input('printerest'),
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('message', 'People has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('back.people.edit')->with('people', People::where('id', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'people_image' => 'image|mimes:jpg,png,jpeg|max:5048'
        ]);

        $data = [
            'slug' => SlugService::createSlug(People::class, 'slug', $request->name),
            'name' => $request->input('name'),
            'designation' => $request->input('designation'),
            'facebook' => $request->input('facebook'),
            'twitter' => $request->input('twitter'),
            'linkedin' => $request->input('linkedin'),
            'printerest' => $request->input('printerest'),
            'user_id' => auth()->user()->id
        ];

        if($request->hasFile('people_image')) {
            $newImageName = uniqid() . '-' . $request->name . '.' . $request->people_image->extension();
            $data['image_path'] = $newImageName;
            $request->people_image->move(public_path('images/people'), $newImageName);
        }

        People::where('id', $id)->update($data);

        return redirect()->back()->with('message', 'People has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $people_img = People::find($id);
        $people = People::where('id', $id);
        unlink("images/people/".$people_img->image_path);
        $people->delete();

        return redirect()->back()->with('message', 'People has been deleted!');

    }
}
