@extends('layouts.app')
@section('content')
    @include('components.hero'){{-- Head Nav --}}

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 my-5">
                <img src="{{ asset('images/travel.svg') }}" alt="Body Image" class="img-fluid body-image">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <p class="body-text">
                    <span class="highlight">CHOOSE</span>
                    <span class="newline">YOUR</span>
                    <span class="newline2">DESIRED BUNK</span>
                    <span class="description">Here at Lapulapu Shipping Lines, we give you the<br>
                        freedom to pick the bunks that suites you best!
                    </span>

                    <a href="{{ route('passenger') }}" class="btn btn-outline-primary mt-3 travel-btn">
                        GO TRAVEL
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
