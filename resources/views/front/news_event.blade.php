@extends('front.layout.app')

@section('title')
    News & Event
@endsection

@section('content')

<div id="blog" class="latest-news-area section">
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>latest news</h6>
                        <h2 class="fw-bold">Latest News & Blog</h2>
                        <p>
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @forelse ($news as $new)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-news">
                        <div class="image">
                            <a href="{{ route('news.details', $new->slug) }}"><img class="thumb" src="{{ asset('/images/news/'.$new->image_path) }}" alt="{{ $new->title }}" /></a>
                            {{-- <div class="meta-details">
                                <img class="thumb" src="{{ asset('/front/images/b6.jpeg') }}" alt="Author" />
                                <span>BY TIM NORTON</span>
                            </div> --}}
                        </div>
                        <div class="content-body">
                            <h4 class="title">
                                <a href="{{ route('news.details', $new->slug) }}"> {{ $new->title }}</a>
                            </h4>
                            <p>
                            {!! $new->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <p>There have no any news and event found</p>
            @endforelse
            
        </div>
    </div>
</div>

@endsection