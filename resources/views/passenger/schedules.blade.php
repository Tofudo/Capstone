@extends('layouts.app')
@section('content')
    @include('components.hero'){{-- Head Nav --}}

    <div class="container text-center my-5"> {{-- margin top and bottom set to 5 --}}
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/sched.svg') }}" alt="Image 1" class="img-fluid side-by-side">
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/rates.svg') }}" alt="Image 2" class="img-fluid side-by-side">
            </div>
        </div>
    </div>
@endsection
