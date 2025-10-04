@extends('layouts.app')
@section('content')
    @include('components.hero'){{-- Head Nav --}}
    <h2 class="booking-type">TYPE OF BOOKING</h2>

    <div class="custom-button-wrapper">
        <!-- Button 1 -->
        <a href="{{ route('passenger') }}" class="custom-btn passenger-book">
            <span>PASSENGER</span>
        </a>

        <!-- Button 2 -->
        <a href="{{ route('passenger') }}" class="custom-btn cargo-book">
            <span>CARGO</span>
        </a>
    </div>
@endsection
