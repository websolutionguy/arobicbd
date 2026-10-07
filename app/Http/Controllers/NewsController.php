<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('back.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.news.create');
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
            'news_image' => 'required|mimes:jpg,png,jpeg|max:5048',
            'description' => 'required',
            
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->news_image->extension();

        $request->news_image->move(public_path('images/news'), $newImageName);

        News::create([
            'slug' => SlugService::createSlug(News::class, 'slug', $request->title),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('message', 'News has been created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('back.news.edit')->with('news', News::where('id', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'news_image' => 'image|mimes:jpg,png,jpeg|max:5048',
            'description' => 'required',
        ]);

        $data = [
            'slug' => SlugService::createSlug(News::class, 'slug', $request->title),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'user_id' => auth()->user()->id
        ];

        if($request->hasFile('news_image')) {
            $newImageName = uniqid() . '-' . $request->title . '.' . $request->news_image->extension();
            $data['image_path'] = $newImageName;
            $request->news_image->move(public_path('images/news'), $newImageName);
        }

        News::where('id', $id)->update($data);

        return redirect()->back()->with('message', 'News has been Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news_img = News::find($id);
        $news = News::where('id', $id);
        unlink("images/news/".$news_img->image_path);
        $news->delete();

        return redirect()->back()->with('message', 'Your news has been deleted!');

    }
}
