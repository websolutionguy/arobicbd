<footer class="footer-area footer-eleven">
    <div class="footer-top">
        <div class="container">
            <div class="inner-content">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="footer-widget f-about">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('/images/website/'.App\Models\WebsiteSetting::getSettingsData(1)->footer_logo_image_path) }}" alt="Arobic BD Logo" class="img-fluid" />
                                </a>
                            </div>
                            <p>{!! App\Models\WebsiteSetting::getSettingsData(1)->about_description !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="footer-widget f-link">
                            <h5>Solutions</h5>
                            <ul>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="{{ route('news.events') }}">News & Event</a></li>
                                <li><a href="{{ route('profile') }}">Company Profile</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="footer-widget f-link">
                            <h5>Support</h5>
                            <ul>
                                <li><a href="{{ route('career') }}">Career</a></li>
                                <li><a href="{{ route('our.people') }}">Our People</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="footer-widget f-link">
                            <h5>Others</h5>
                            <ul>
                                <li><a href="{{ route('licence') }}">Licence</a></li>
                                <li><a href="{{ route('award') }}">Awards & Cirtificates</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <p class="copyright-text">
                    <!--{!! App\Models\WebsiteSetting::getSettingsData(1)->copyright !!}-->
                     <div style="text-align: center;margin-top: 50px;">© Copyrights All Rights Reserved | <b>Arobic Recruitment Consultant</b> - 2025</div>
                </p>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer-eleven {
         padding-bottom: 0px !important; 
    }
</style>

<a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
</a>