@extends('front.layout.app')

@section('title')
Award
@endsection

@section('content')

<section id="team" class="team-area">

    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>Our Awards</h6>
                        <h2 class="fw-bold">Our Awards</h2>
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
            @forelse ($awards as $award)
                <div class="col-lg-4 col-sm-6 branding-3 planning-3" data-filter="branding">
                    <div class="portfolio-style-three">
                        <div class="portfolio-image">
                            <img src="{{ asset('images/award/' . $award->image_path) }}" alt="{{ $award->title }}" />
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup-three glightbox3" href="{{ asset('images/award/' . $award->image_path) }}">
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
                                <a href="javascript:void(0)">{{ $award->title }}</a>
                            </h4>
                            {{-- <p class="text">
                                Short description for the ones who look for something new.
                                Awesome!
                            </p> --}}
                        </div>
                    </div>
                </div>
            @empty
                <p>There are no award found</p>
            @endforelse
        </div>
    </div>
</section>

@endsection