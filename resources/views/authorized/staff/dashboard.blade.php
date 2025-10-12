@extends('layouts.app')
@section('page-title', 'DASHBOARD')
@section('content')
    @include('components.authHeader')
    @include('components.staff_nav')
    <div class="staff-body">
        <h1>STAFF Login Successful</h1>
        <h3>Welcome to Staff Dahsboard!</h3>
    </div>
@endsection
