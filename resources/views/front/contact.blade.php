@extends('front.layout.app')

@section('title')
Contact
@endsection

@section('content')

<section id="contact" class="contact-section">

    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>Contact</h6>
                        <h2 class="fw-bold">Our Contact Details</h2>
                        <p>
                        If you have any query please write to us
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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