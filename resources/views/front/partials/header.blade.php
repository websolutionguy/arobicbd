<section class="navbar-area navbar-nine">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('/images/website/'.App\Models\WebsiteSetting::getSettingsData(1)->header_logo_image_path) }}" alt="Arobic BD" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine" aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('licence') }}">License</a></li>
                                    <li><a class="dropdown-item" href="{{ route('award') }}">Award & Certificate</a></li>
                                    <li><a class="dropdown-item" href="{{ route('profile') }}">Company Profile</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="" href="{{ route('services') }}">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="" href="{{ route('news.events') }}">News & Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="" href="{{ route('career') }}">Career</a>
                            </li>
                            <li class="nav-item">
                                <a class="" href="{{ route('our.people') }}">Our People</a>
                            </li>
                            <li class="nav-item">
                                <a class="" href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-btn d-none d-lg-inline-block">
                        <a class="menu-bar" href="{{ App\Models\WebsiteSetting::getSettingsData(1)->facebook }}" target="_blank"><i class="lni lni-facebook-filled"></i></a>
                        <a class="menu-bar" href="{{ App\Models\WebsiteSetting::getSettingsData(1)->twitter }}" target="_blank"><i class="lni lni-twitter-original"></i></a>
                        <a class="menu-bar" href="{{ App\Models\WebsiteSetting::getSettingsData(1)->youtube }}" target="_blank"><i class="lni lni-youtube"></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

{{-- <div class="sidebar-left">
    <div class="sidebar-close">
        <a class="close" href="#close"><i class="lni lni-close"></i></a>
    </div>
    <div class="sidebar-content">
        <div class="sidebar-logo">
            <a href="index.html"><img src="{{ asset('front/images/logo.png') }}" alt="Logo" /></a>
        </div>
        <p class="text">Lorem ipsum dolor sit amet adipisicing elit. Sapiente fuga nisi rerum iusto intro.</p>

        <div class="sidebar-menu">
            <h5 class="menu-title">Quick Links</h5>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Latest News</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <div class="sidebar-social align-items-center justify-content-center">
            <h5 class="social-title">Follow Us On</h5>
            <ul>
                <li>
                    <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="lni lni-youtube"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div> --}}

<div class="overlay-left"></div>