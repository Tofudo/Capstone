@extends('layouts.app')
@section('page-title', 'DASHBOARD')
@section('content')
    @include('components.authHeader')
    @include('components.admin_nav') {{--NAVBAR--}}
    <div class="admin-body">
        <h1>ADMIN Login Successful</h1>
        <h3>Welcome to the Admin Dashboard!</h3>
    </div>
    
    
@endsection
