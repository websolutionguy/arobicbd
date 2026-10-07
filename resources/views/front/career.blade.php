@extends('front.layout.app')

@section('title')
    Career
@endsection

@section('content')

<section id="pricing" class="pricing-area pricing-fourteen">

    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>Career</h6>
                        <h2 class="fw-bold">Find your Job</h2>
                        <p>We are cocern to unemployed problem in our country</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @forelse ($careers as $career)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="pricing-style-fourteen">
                        <div class="table-head">
                            <h6 class="title">Starter</h4>
                            <h5>{{ $career->title }}</h5>
                        </div>
                        <div class="light-rounded-buttons">
                            <a href="{{ route('career.details', $career->slug ) }}" class="btn primary-btn-outline">
                                Apply Now
                            </a>
                        </div>
                        <div class="table-content">
                            <ul class="table-list">
                                <li> <i class="lni lni-checkmark-circle"></i>Vacancy : {{ $career->vacancy }}</li>
                                <li> <i class="lni lni-checkmark-circle"></i>Location : {{ $career->location }}</li>
                                <li> <i class="lni lni-checkmark-circle"></i>Status : {{ $career->status }}</li>
                                <li> <i class="lni lni-checkmark-circle"></i>Salary : {{ $career->salary }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @empty
                <p>There are not any career data found</p>
            @endforelse
            

            {{-- <div class="col-lg-4 col-md-6 col-12">
                <div class="pricing-style-fourteen middle">
                    <div class="table-head">
                        <h6 class="title">Exclusive</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and industry.</p>
                        <div class="price">
                            <h2 class="amount">
                                <span class="currency">$</span>99<span class="duration">/mo </span>
                            </h2>
                        </div>
                    </div>
                    <div class="light-rounded-buttons">
                        <a href="javascript:void(0)" class="btn primary-btn">
                        Start free trial
                        </a>
                    </div>
                    <div class="table-content">
                        <ul class="table-list">
                            <li> <i class="lni lni-checkmark-circle"></i> Cras justo odio.</li>
                            <li> <i class="lni lni-checkmark-circle"></i> Dapibus ac facilisis in.</li>
                            <li> <i class="lni lni-checkmark-circle"></i> Morbi leo risus.</li>
                            <li> <i class="lni lni-checkmark-circle deactive"></i> Excepteur sint occaecat velit.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="pricing-style-fourteen">
                    <div class="table-head">
                        <h6 class="title">Premium</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and industry.</p>
                        <div class="price">
                            <h2 class="amount">
                                <span class="currency">$</span>150<span class="duration">/mo </span>
                            </h2>
                        </div>
                    </div>
                    <div class="light-rounded-buttons">
                        <a href="javascript:void(0)" class="btn primary-btn-outline">
                        Start free trial
                        </a>
                    </div>
                    <div class="table-content">
                        <ul class="table-list">
                            <li> <i class="lni lni-checkmark-circle"></i> Cras justo odio.</li>
                            <li> <i class="lni lni-checkmark-circle"></i> Dapibus ac facilisis in.</li>
                            <li> <i class="lni lni-checkmark-circle"></i> Morbi leo risus.</li>
                            <li> <i class="lni lni-checkmark-circle"></i> Excepteur sint occaecat velit.</li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>

@endsection