<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use App\Models\HeroBanner;
use App\Models\OurStory;
use App\Models\Services;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $hero = HeroBanner::all();
        $story = OurStory::all();
        $services = Services::orderBy('id', 'desc')->paginate(6);
        $clients = Client::orderBy('id', 'desc')->get();
        $contact = Contact::all();
        return view('front.home', compact('hero', 'story','services', 'clients', 'contact'));
    }

    public function serviceDetails($slug){
        $service = Services::where('slug', $slug)->first();
        //dd($service);
        return view('front.service_detail', compact('service'));
    }
}
