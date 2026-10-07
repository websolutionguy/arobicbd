@extends('front.layout.app')

@section('title')
    Services
@endsection

@section('content')

<section id="services" class="services-area services-eight">
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>Services</h6>
                        <h2 class="fw-bold">Our Best Services</h2>
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
            @forelse ($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <img src="{{ asset('images/services/' . $service->image_path) }}" />
                        </div>
                        <br/> 
                        <div class="service-content">
                            <h4>{{ $service->title }}</h4>
                            <p>{{ strlen($service->short_desc) > 100 ? substr($service->short_desc, 0, 100).'...' : $service->short_desc }}</p>
                        </div>
                        <br/> 
                        <div class="light-rounded-buttons">
                            <a href="{{ route('service_details', $service->slug) }}" class="btn primary-btn-outline">Read More</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>No service are available here...</p>
            @endforelse
        </div>
    </div>
</section>

@endsection