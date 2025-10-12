@extends('layouts.app')
@section('content')
    <section class="vh-100 d-flex align-items-center justify-content-center login-bg"
    style="background-image: url('{{ asset('images/login-bg.png') }}');">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body py-0 px-5 text-center">

                            <div class="mb-md-4 mt-md-4 py-0">
                            <img src="{{ asset('images/lslc_logo_name2.png') }}" alt="App Logo" class="img-fluid mb-1" style="height:150px">
                                <h2 class="fw-bold text-uppercase">WELCOME</h2>
                                <p class="mb-3">Enter your username and password</p>


                                {{-- Display errors --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger text-center">
                                        {{ $errors->first() }}
                                    </div>
                                @endif

                                {{-- Login Form --}}
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf

                                    <!-- Username -->
                                    <div class="form-floating mb-4">
                                        <input type="text" name="username" id="typeEmailX"
                                            class="form-control form-control-lg"
                                            placeholder="Username" value="{{ old('username') }}" />
                                        <label for="typeEmailX" class="#485B8C">Username</label>
                                    </div>

                                    <!-- Password -->
                                    <div class="form-floating mb-5">
                                        <input type="password" name="password" id="typePasswordX"class="form-control form-control-lg"
                                            class="form-control form-control-lg text-white bg-dark border-light"
                                            placeholder="Password" />
                                        <label for="typePasswordX" class="#485B8C">Password</label>
                                    </div>

                                    <button class="loginBtn btn btn-lg px-5 mt-1 mb-4"
                                            type="submit">
                                        Login
                                    </button>

                                </form>

                            </div> <!-- mb-md-5 mt-md-4 py-5 -->

                        </div> <!-- card-body -->
                    </div> <!-- card -->
                </div> <!-- col -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
@endsection
