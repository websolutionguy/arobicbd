@extends('front.layout.app')

@section('title')
Licence
@endsection

@section('content')

<section id="team" class="team-area">

    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>Our Licence</h6>
                        <h2 class="fw-bold">Our Licence</h2>
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
        <div class="row grid">
            @forelse ($licences as $licence)
                <div class="col-lg-4 col-sm-6 branding-3 planning-3" data-filter="branding">
                    <div class="portfolio-style-three">
                        <div class="portfolio-image">
                            <img src="{{ asset('images/licence/' . $licence->image_path) }}" alt="{{ $licence->title }}" />
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup-three glightbox3" href="{{ asset('images/licence/' . $licence->image_path) }}">
                                            <i class="lni lni-zoom-in"> </i>
                                        </a>
                                    </div>
                                    {{-- <div class="portfolio-icon">
                                        <a href="javascript:void(0)"> <i class="lni lni-link"> </i> </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title">
                                <a href="javascript:void(0)">{{ $licence->title }}</a>
                            </h4>
                            {{-- <p class="text">
                                Short description for the ones who look for something new.
                                Awesome!
                            </p> --}}
                        </div>
                    </div>
                </div>
            @empty
                <p>There are no licence found</p>
            @endforelse
            

        </div>
    </div>
</section>

@endsection