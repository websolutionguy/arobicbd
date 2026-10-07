@extends('front.layout.app')

@section('title')
    Our People
@endsection

@section('content')

<section id="team" class="team-area">

    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>Our People</h6>
                        <h2 class="fw-bold">Our Creative Team</h2>
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
            @forelse ($peoples as $people)
                <div class="col-xs-12 col-lg-3 col-sm-3">
                    <div class="team-style-six text-center">
                        <div class="team-image">
                            <img src="{{ asset('/images/people/'.$people->image_path) }}" alt="Team" />
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <ul class="social">
                                    <li>
                                        <a href="{{ $people->facebook }}" target="_blank"> 
                                            <i class="lni lni-facebook-filled"></i> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $people->twitter }}" target="_blank">
                                            <i class="lni lni-twitter-original"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $people->linkedin }}" target="_blank">
                                            <i class="lni lni-linkedin-original"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $people->printerest }}" target="_blank"> 
                                            <i class="lni lni-pinterest"></i> 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="team-name">{{ $people->name }}</h4>
                            <span class="sub-title">{{ $people->designation }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <p>There are not any people found</p>
            @endforelse
        </div>
    </div>
</section>

@endsection