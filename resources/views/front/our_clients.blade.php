@extends('front.layout.app')

@section('title')
    Our Clients
@endsection

@section('content')

<section id="team" class="team-area">

    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>Our Clients</h6>
                        <h2 class="fw-bold">Our Valuable Clients</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @forelse ($clients as $client)
                
                <div class="col-lg-3 col-sm-6" style="margin-bottom: 20px;">
                    <div class="team-style-six text-center">
                        <div class="client-image">
                            <img src="{{ asset('/images/client/'.$client->image_path) }}" alt="{{ $client->name }}" />
                            
                            <h4>{{$client->name}}</h4>
                        </div>
                        {{-- <div class="team-content">
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
                        </div> --}}
                    </div>
                </div>
            @empty
                <p>There are not any clients found</p>
            @endforelse
        </div>
    </div>
</section>

@endsection