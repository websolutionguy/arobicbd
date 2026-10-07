<?php

namespace App\Http\Controllers;

use App\Models\Licence;
use Illuminate\Http\Request;

class LicenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licences = Licence::all();
        return view('back.licence.index', compact('licences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.licence.create');
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
            'licence_image' => 'required|mimes:jpg,png,jpeg,pdf|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->licence_image->extension();

        $request->licence_image->move(public_path('images/licence'), $newImageName);

        Licence::create([
            'title' => $request->input('title'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('message', 'Licence has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Licence  $licence
     * @return \Illuminate\Http\Response
     */
    public function show(Licence $licence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Licence  $licence
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('back.licence.edit')->with('licence', Licence::where('id', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Licence  $licence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'licence_image' => 'image|mimes:jpg,png,jpeg,pdf|max:5048'
        ]);

        $data = [
            'title' => $request->input('title'),
            'user_id' => auth()->user()->id
        ];

        if($request->hasFile('licence_image')) {
            $newImageName = uniqid() . '-' . $request->title . '.' . $request->licence_image->extension();
            $data['image_path'] = $newImageName;
            $request->licence_image->move(public_path('images/licence'), $newImageName);
        }

        Licence::where('id', $id)->update($data);

        return redirect()->back()->with('message', 'Licence has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Licence  $licence
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $licence_img = Licence::find($id);
        $licence = Licence::where('id', $id);
        unlink("images/licence/".$licence_img->image_path);
        $licence->delete();

        return redirect()->back()->with('message', 'Licence has been deleted!');

    }
}
