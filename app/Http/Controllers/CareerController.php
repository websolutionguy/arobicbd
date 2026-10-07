<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::all();
        return view('back.career.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.career.create');
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
            'vacancy' => 'required',
            'status' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'description' => 'required',
        ]);

        Career::create([
            'slug' => SlugService::createSlug(Career::class, 'slug', $request->title),
            'title' => $request->input('title'),
            'vacancy' => $request->input('vacancy'),
            'status' => $request->input('status'),
            'location' => $request->input('location'),
            'salary' => $request->input('salary'),
            'description' => $request->input('description'),
            'apply_email' => $request->input('apply_email'),
            'apply_link' => $request->input('apply_link'),
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('message', 'Career post has been created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $career = Career::where('id', $id)->first();
        return view('back.career.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'vacancy' => 'required',
            'status' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'description' => 'required',
        ]);

        Career::where('id', $id)
            ->update([
                'slug' => SlugService::createSlug(Career::class, 'slug', $request->title),
                'title' => $request->input('title'),
                'vacancy' => $request->input('vacancy'),
                'status' => $request->input('status'),
                'location' => $request->input('location'),
                'salary' => $request->input('salary'),
                'description' => $request->input('description'),
                'apply_email' => $request->input('apply_email'),
                'apply_link' => $request->input('apply_link'),
                'user_id' => auth()->user()->id
            ]);

        return redirect()->back()->with('message', 'Career data has been Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $career = Career::where('id', $id);
        $career->delete();

        return redirect()->back()->with('message', 'Your career has been deleted!');

    }
}
