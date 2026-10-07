@extends('front.layout.app')

@section('title')
    Our Profile
@endsection

@section('content')

<section id="team" class="team-area">

    <div class="section-title-five" style="max-width: 900px; !importent">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>Profile</h6>
                        <h2 class="fw-bold">{{ $profile[0]->title }}</h2>
                        <p>{!! $profile[0]->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="video-content text-center">
                    <iframe src="{{ asset('images/profile/' . $profile[0]->image_path) }}" width="100%" height="800px"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection