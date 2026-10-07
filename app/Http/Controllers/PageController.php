<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Career;
use App\Models\Contact;
use App\Models\Licence;
use App\Models\News;
use App\Models\People;
use App\Models\Profile;
use App\Models\Services;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function servicePage(){
        $services = Services::all();
        return view('front.services', compact('services'));
    }

    public function newsPage(){
        $news = News::orderBy('id', 'desc')->paginate(9);
        return view('front.news_event', compact('news'));
    }
    public function newsDetailPage($slug){
        $news = News::where('slug', $slug)->first();
        return view('front.news_details', compact('news'));
    }

    public function careerPage(){
        $careers = Career::orderBy('id', 'desc')->paginate(9);
        return view('front.career', compact('careers'));
    }
    public function careerDetailPage($slug){
        $career = Career::where('slug', $slug)->first();
        return view('front.career_details', compact('career'));
    }

    public function peoplePage(){
        $peoples = People::orderBy('id', 'desc')->paginate(9);
        return view('front.our_people', compact('peoples'));
    }
    public function contactPage(){
        $contact = Contact::all();
        return view('front.contact', compact('contact'));
    }
    public function licencePage(){
        $licences = Licence::all();
        return view('front.licence', compact('licences'));
    }
    public function awardPage(){
        $awards = Award::all();
        return view('front.award', compact('awards'));
    }
    public function profilePage(){
        $profile = Profile::all();
        return view('front.profile', compact('profile'));
    }
    
    
}
