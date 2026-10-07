<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::all();
        return view('back.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.services.create');
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
            'short_desc' => 'required',
            'description' => 'required',
            'service_image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->service_image->extension();

        $request->service_image->move(public_path('images/services'), $newImageName);

        Services::create([
            'slug' => SlugService::createSlug(Services::class, 'slug', $request->title),
            'title' => $request->input('title'),
            'short_desc' => $request->input('short_desc'),
            'description' => $request->input('description'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('message', 'Services has been created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $services, $id)
    {
        return view('back.services.edit')->with('service', Services::where('id', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
            'service_image' => 'image|mimes:jpg,png,jpeg|max:5048'
        ]);

        $data = [
            'slug' => SlugService::createSlug(Services::class, 'slug', $request->title),
            'title' => $request->input('title'),
            'short_desc' => $request->input('short_desc'),
            'description' => $request->input('description'),
            'user_id' => auth()->user()->id
        ];

        if($request->hasFile('service_image')) {
            $newImageName = uniqid() . '-' . $request->title . '.' . $request->service_image->extension();
            $data['image_path'] = $newImageName;
            $request->service_image->move(public_path('images/services'), $newImageName);
        }

        Services::where('id', $id)->update($data);

        return redirect()->back()->with('message', 'Services post has been Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service_img = Services::find($id);
        $services = Services::where('id', $id);
        unlink("images/services/".$service_img->image_path);
        $services->delete();

        return redirect()->back()->with('message', 'Your services has been deleted!');

    }
}
