@extends('layouts.app')
@section('content')
    @include('components.staff_nav')
    <div class="staff-body">
        <h1>STAFF Login Successful</h1>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit">
                <i class="fa-solid fa-right-from-bracket"></i> LOG OUT
            </button>
        </form>
    </div>
@endsection
