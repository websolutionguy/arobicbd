@extends('front.layout.app')

@section('content')

<section id="services" class="services-area services-eight">
    <div class="detail-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h3 class="fw-bold">{{ $career->title }}</h3>
                        <br/>
                        <h6 class="fw-bold" style="margin-bottom: 7px;">Vacancy : {{ $career->vacancy }}</h6>
                        <h6 class="fw-bold" style="margin-bottom: 7px;">Location : {{ $career->location }}</h6>
                        <h6 class="fw-bold" style="margin-bottom: 7px;">Status : {{ $career->status }}</h6>
                        <h6 class="fw-bold" style="margin-bottom: 7px;">Salary : {{ $career->salary }}</h6>
                        <br/>
                        <p>{!! $career->description !!}</p>
                        <p>Send your CV to: <b><a href="mailto:{{ $career->apply_email }}">{{ $career->apply_email }}</a></b></p>
                        <br/>
                        <p>OR : <b><a href="{{ $career->apply_link }}" target="_blank">Apply Online</a></b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection