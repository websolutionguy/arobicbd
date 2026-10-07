<?php

namespace App\Http\Controllers;

use App\Models\MailContact;
use Illuminate\Http\Request;

class MailContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
            'name' => 'required', 
            'email' => 'required|email', 
            'phone' => 'required|digits:11|numeric', 
            'subject' => 'required', 
            'message' => 'required', 
        ]);

        MailContact::create($request->all());
  
        return redirect()->back()->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MailContact  $mailContact
     * @return \Illuminate\Http\Response
     */
    public function show(MailContact $mailContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MailContact  $mailContact
     * @return \Illuminate\Http\Response
     */
    public function edit(MailContact $mailContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MailContact  $mailContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MailContact $mailContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MailContact  $mailContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(MailContact $mailContact)
    {
        //
    }
}
