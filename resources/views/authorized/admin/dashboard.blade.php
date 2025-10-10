@extends('layouts.app')
@section('content')
    <h1>ADMIN Login Successful</h1>

    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit">Log Out</button>
    </form>
@endsection
