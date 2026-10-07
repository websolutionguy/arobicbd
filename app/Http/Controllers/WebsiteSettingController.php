<?php

namespace App\Http\Controllers;

use App\Models\WebsiteSetting;
use Illuminate\Http\Request;

class WebsiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = WebsiteSetting::firstOrCreate(['id' => 1]);
        return view('back.website.index', compact('settings'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WebsiteSetting  $websiteSetting
     * @return \Illuminate\Http\Response
     */
    public function show(WebsiteSetting $websiteSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebsiteSetting  $websiteSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(WebsiteSetting $websiteSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WebsiteSetting  $websiteSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = [
            'about_description' => $request->input('about_detail'),
            'copyright' => $request->input('copyright'),
            'play_store_link' => $request->input('play_store'),
            'app_store_link' => $request->input('app_store'),
            'facebook' => $request->input('facebook'),
            'twitter' => $request->input('twitter'),
            'youtube' => $request->input('youtube'),
            'instagrame' => $request->input('instagrame'),
            'linkedin' => $request->input('linkedin'),
            'user_id' => auth()->user()->id
        ];

        if($request->hasFile('header_logo')) {
            $header_logo = uniqid() . '-' . '.' . $request->header_logo->extension();
            $data['header_logo_image_path'] = $header_logo;
            $request->header_logo->move(public_path('images/website'), $header_logo);
        }

        if($request->hasFile('footer_logo')) {
            $footer_logo = uniqid() . '-' . '.' . $request->footer_logo->extension();
            $data['footer_logo_image_path'] = $footer_logo;
            $request->footer_logo->move(public_path('images/website'), $footer_logo);
        }

        WebsiteSetting::where('id', $id)->update($data);

        return redirect()->back()->with('message', 'Website settings has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebsiteSetting  $websiteSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebsiteSetting $websiteSetting)
    {
        //
    }
}
