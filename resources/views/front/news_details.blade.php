@extends('front.layout.app')

@section('content')

<section id="services" class="services-area services-eight">
    <div class="detail-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h3 class="fw-bold">{{ $news->title }}</h3>
                        <br />
                        <div class="image">
                            <img src="{{ asset('images/news/' . $news->image_path) }}" />
                        </div>
                        <br />
                        <p>{!! $news->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection