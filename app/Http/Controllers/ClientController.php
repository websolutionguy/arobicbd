<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('id', 'desc')->paginate(9);
        return view('back.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.client.create');
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
            'link_path' => 'required',
            'client_image' => 'required|mimes:jpg,png,jpeg,svg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->client_image->extension();

        $request->client_image->move(public_path('images/client'), $newImageName);

        Client::create([
            'name' => $request->input('name'),
            'link_path' => $request->input('link_path'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('message', 'Client has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::where('id', $id)->first();
        return view('back.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'link_path' => 'required',
            'client_image' => 'image|mimes:jpg,png,jpeg|max:5048'
        ]);

        $data = [
            'name' => $request->input('name'),
            'link_path' => $request->input('link_path'),
            'user_id' => auth()->user()->id
        ];

        if($request->hasFile('client_image')) {
            $newImageName = uniqid() . '-' . $request->name . '.' . $request->client_image->extension();
            $data['image_path'] = $newImageName;
            $request->client_image->move(public_path('images/client'), $newImageName);
        }

        Client::where('id', $id)->update($data);

        return redirect()->back()->with('message', 'Clint data has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client_img = Client::find($id);
        $client = Client::where('id', $id);
        unlink("images/client/".$client_img->image_path);
        $client->delete();

        return redirect()->back()->with('message', 'Your client has been deleted!');

    }
}
