@extends('front.layout.app')

@section('title')
    Home
@endsection

@section('content')

<section id="hero-area" class="header-area header-eight">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-content">
                <h1>{{ $hero[0]->title }}</h1>
                <p>{{ $hero[0]->description }}</p>
                    <div class="button">
                        <a href="{{ route('services') }}" class="btn primary-btn">Get Started</a>
                        {{-- <a href="{{ $hero[0]->video_url }}" class="glightbox video-button">
                            <span class="btn icon-btn rounded-full">
                                <i class="lni lni-play"></i>
                            </span>
                            <span class="text">Watch Intro</span>
                        </a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-image">
                    <img src="{{ asset('/images/hero/'.$hero[0]->image_path )}}" alt="{{ $hero[0]->title }}" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-area about-five">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="about-image-five">
                    <svg class="shape" width="106" height="134" viewBox="0 0 106 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="1.66654" cy="1.66679" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="16.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="31.0001" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="45.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="60.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="88.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="117.667" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="74.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="103" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="132" r="1.66667" fill="#DADADA" />
                        <circle cx="16.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
                        <circle cx="16.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="16.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
                        <circle cx="16.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="16.333" cy="60.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="16.333" cy="88.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="16.333" cy="117.667" r="1.66667" fill="#DADADA" />
                        <circle cx="16.333" cy="74.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="16.333" cy="103" r="1.66667" fill="#DADADA" />
                        <circle cx="16.333" cy="132" r="1.66667" fill="#DADADA" />
                        <circle cx="30.9998" cy="1.66679" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
                        <circle cx="30.9998" cy="16.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="30.9998" cy="31.0001" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
                        <circle cx="30.9998" cy="45.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="31" cy="60.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6668" cy="60.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="31" cy="88.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6668" cy="88.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="31" cy="117.667" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6668" cy="117.667" r="1.66667" fill="#DADADA" />
                        <circle cx="31" cy="74.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6668" cy="74.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="31" cy="103" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6668" cy="103" r="1.66667" fill="#DADADA" />
                        <circle cx="31" cy="132" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6668" cy="132" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="60.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="60.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="88.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="88.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="117.667" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="117.667" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="74.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="74.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="103" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="103" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="132" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="132" r="1.66667" fill="#DADADA" />
                        <circle cx="60.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="1.66679" r="1.66667" fill="#DADADA" />
                        <circle cx="60.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="16.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="60.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="31.0001" r="1.66667" fill="#DADADA" />
                        <circle cx="60.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="45.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="60.333" cy="60.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="60.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="60.333" cy="88.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="88.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="60.333" cy="117.667" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="117.667" r="1.66667" fill="#DADADA" />
                        <circle cx="60.333" cy="74.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="74.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="60.333" cy="103" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="103" r="1.66667" fill="#DADADA" />
                        <circle cx="60.333" cy="132" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="132" r="1.66667" fill="#DADADA" />
                    </svg>
                    <img src="{{ asset('/images/whoweare/'.$story[0]->image_path )}}" alt="{{ $hero[0]->title }}" />
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-five-content">
                    <h6 class="small-title text-lg">{{ $story[0]->title }}</h6>
                    <h2 class="main-title fw-bold">{{ $story[0]->description }}</h2>
                    <div class="about-five-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab" data-bs-target="#nav-who" type="button" role="tab" aria-controls="nav-who" aria-selected="true">Who We Are</button>
                                <button class="nav-link" id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision" aria-selected="false">Our Vision</button>
                                <button class="nav-link" id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-history" type="button" role="tab" aria-controls="nav-history" aria-selected="false">Our Mission</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-who" role="tabpanel" aria-labelledby="nav-who-tab">
                                <p>{!! $story[0]->who_we_are !!}</p>
                            </div>
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <p>{!! $story[0]->our_vision !!}</p>
                            </div>
                            <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-mission-tab">
                                <p>{!! $story[0]->our_mission !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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

<!-- -->


{{-- <div id="clients" class="brand-area section">
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>Meet our Clients</h6>
                        <h2 class="fw-bold">Our Awesome Clients</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="clients-logos">
                    @forelse ($clients as $client)
                        <div class="single-image">
                            <img src="{{ asset('images/client/' . $client->image_path) }}" alt="{{ $client->name }}" />
                        </div>
                    @empty
                        <p>There are not added client logo added yet!</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div> --}}



<!-- //////////////////////// -->

{{-- <section id="testimonial" class="testimonial-5">

    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>Meet our Clients</h6>
                        <h2 class="fw-bold">Our Awesome Clients</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row testimonial-slider">
            @php $i = 1; @endphp
            @forelse ($clients as $client)
                <div class="col-lg-2 col-12 {{ $i == '1' ? 'tns-item tns-slide-active' : 'tns-item tns-slide-cloned' }}" id="tns1-item{{ $i++ }}" aria-hidden="true" tabindex="-1">
                    @php $i++; @endphp
                    <div class="single-testimonial">
                        <div class="inner-content">
                            <img src="{{ asset('images/client/' . $client->image_path) }}" alt="{{ $client->name }}" />
                        </div>
                    </div>
                </div>
            @empty
                <p>There are no client logo added yet!</p>
            @endforelse
        </div>
    </div>

</section> --}}

<!-- //////////////////////// -->


<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="contact-item-wrapper">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-phone"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Contact</h4>
                                    <p>{{ $contact[0]->phone }}</p>
                                    <p>{{ $contact[0]->phone_two }}</p>
                                    <p><a href="mailto:{{ $contact[0]->email }}" class="__cf_email__" data-cfemail="">{{ $contact[0]->email }}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-map-marker"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Address</h4>
                                    <p>{!! nl2br($contact[0]->address) !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-alarm-clock"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Schedule</h4>
                                    <p>{!! nl2br($contact[0]->schedule) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="contact-form-wrapper">
                    <div class="row">
                        <div class="col-xl-10 col-lg-8 mx-auto">
                            <div class="section-title text-center">
                                <span> Get in Touch </span>
                                <h2>Ready to Get Started</h2>
                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('contact-form') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" id="name" placeholder="Name" />
                                @if ($errors->has('name'))
                                    <span class="text-danger mv">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" id="email" placeholder="Email" />
                                @if ($errors->has('email'))
                                    <span class="text-danger mv">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="phone" id="phone" placeholder="Phone" />
                                @if ($errors->has('phone'))
                                    <span class="text-danger mv">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="subject" id="subject" placeholder="Subject" />
                                @if ($errors->has('subject'))
                                    <span class="text-danger mv">{{ $errors->first('subject') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <textarea name="message" id="message" placeholder="Type Message" rows="5"></textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger mv">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="button text-center rounded-buttons">
                                    <button type="submit" class="btn primary-btn rounded-full">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="map-section map-style-9">
    <div class="map-container">
    {{-- <object style="border:0; height: 500px; width: 100%;" src="{{ $contact[0]->map_address }}"></object> --}}
    {{-- <iframe src="{{ $contact[0]->map_address }}" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d34735.57999704417!2d90.35416505141042!3d23.778452750494964!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7643a3ef4e7%3A0x63a4262e2593fa3d!2sAROBIC%20RECRUITMENT%20CONSULTANT!5e0!3m2!1sen!2sbd!4v1668504342488!5m2!1sen!2sbd" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

@endsection

@section('script')
<script>

    //========= glightbox
    GLightbox({
      'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
      'type': 'video',
      'source': 'youtube', //vimeo, youtube or local
      'width': 900,
      'autoplayVideos': true,
    });

    //============== isotope masonry portfolio-three
    const filters = document.querySelectorAll(".portfolio-menu button");

    filters.forEach((filter) => {
      filter.addEventListener("click", function () {
        // ==== Filter btn toggle
        let filterBtn = filters[0];
        while (filterBtn) {
          if (filterBtn.tagName === "BUTTON") {
            filterBtn.classList.remove("active");
          }
          filterBtn = filterBtn.nextSibling;
        }
        this.classList.add("active");

        // === filter
        let selectedFilter = filter.getAttribute("data-filter");
        let itemsToHide = document.querySelectorAll(
          `.grid .col-lg-4:not([data-filter='${selectedFilter}'])`
        );
        let itemsToShow = document.querySelectorAll(
          `.grid [data-filter='${selectedFilter}']`
        );

        if (selectedFilter == "all") {
          itemsToHide = [];
          itemsToShow = document.querySelectorAll(".grid [data-filter]");
        }

        itemsToHide.forEach((el) => {
          el.classList.add("hide");
          el.classList.remove("show");
        });

        itemsToShow.forEach((el) => {
          el.classList.remove("hide");
          el.classList.add("show");
        });
      });
    });

    //========= glightbox
    const myGallery3 = GLightbox({
      selector: ".glightbox3",
      type: "image",
      width: 900,
    });

    //========= testimonial
    tns({
      container: ".testimonial-slider",
      items: 3,
      autoplay: true,
      autoplayButtonOutput: false,
      mouseDrag: true,
      gutter: 0,
      nav: true,
      controls: false,
      controlsText: [
        '<i class="lni lni-arrow-left"></i>',
        '<i class="lni lni-arrow-right"></i>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        1170: {
          items: 2,
        },
      },
    });
</script>
@endsection