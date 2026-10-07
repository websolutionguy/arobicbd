<?php

namespace App\Http\Controllers;

use App\Models\HeroBanner;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class HeroBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $herobanners = HeroBanner::all();
        return view('back.hero.index', compact('herobanners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.hero.create');
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
            'video_url' => 'required',
            'hero_image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->hero_image->extension();

        $request->hero_image->move(public_path('images/hero'), $newImageName);

        HeroBanner::create([
            'slug' => SlugService::createSlug(HeroBanner::class, 'slug', $request->title),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'video_url' => $request->input('video_url'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('message', 'Hero post has been created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeroBanner  $heroBanner
     * @return \Illuminate\Http\Response
     */
    public function show(HeroBanner $heroBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeroBanner  $heroBanner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('back.hero.edit')
            ->with('hero', HeroBanner::where('id', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HeroBanner  $heroBanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'video_url' => 'required',
            'hero_image' => 'image|mimes:jpg,png,jpeg|max:5048'
        ]);

        $data = [
            'slug' => SlugService::createSlug(HeroBanner::class, 'slug', $request->title),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'video_url' => $request->input('video_url'),
            'user_id' => auth()->user()->id
        ];
        
        if($request->hasFile('hero_image')) {
            $newImageName = uniqid() . '-' . $request->title . '.' . $request->hero_image->extension();
            $data['image_path'] = $newImageName;
            $request->hero_image->move(public_path('images/hero'), $newImageName);
        }

        HeroBanner::where('id', $id)->update($data);

        return redirect()->back()->with('message', 'Hero post has been Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeroBanner  $heroBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hero_img = HeroBanner::find($id);
        $hero = HeroBanner::where('id', $id);
        unlink("images/hero/".$hero_img->image_path);
        $hero->delete();

        return redirect()->back()->with('message', 'Your hero banner has been deleted!');

    }
}
