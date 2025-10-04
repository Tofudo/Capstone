<header class="hero">

    <div class="hero-logo">
        <img src="{{ asset('images/logo_w_name.svg') }}" alt="Logo">
    </div>

    <nav class="hero-nav">
        <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">HOME</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('book') }}">BOOK NOW</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('schedules') }}">SCHEDULES & RATES</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT US</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('faqs') }}">FAQs</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT US</a></li>
        </ul>
    </nav>

</header>
