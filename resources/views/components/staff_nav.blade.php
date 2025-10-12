<nav class="staff-nav">
  <ul class="snav justify-content-start">

    <li class="snav-item">
      <a class="snav-link" id="sdash" href="{{ route('staff.dashboard') }}">
        <i class="fa-solid fa-chart-simple me-1"></i>
        <span class="snav-label">Dashboard</span>
      </a>
    </li>

    <li class="snav-item">
      <i class="fa-solid fa-money-bill me-3"></i>
      <span class="snav-label">New Transaction</span>
    </li>

    <li class="snav-item">
      <a class="snav-link" href="{{ url('/') }}">
        <i class="fa-solid fa-person-walking-luggage me-1"></i>
        <span class="snav-label">Passenger Booking</span>
      </a>
    </li>

    <li class="snav-item">
      <a class="snav-link" href="{{ url('/') }}">
        <i class="fa-solid fa-truck-ramp-box me-1"></i>
        <span class="snav-label">Cargo Booking</span>
      </a>
    </li>

    <li class="snav-item">
      <i class="fa-solid fa-map me-3"></i></i><span class="snav-label">Voyages</span>
    </li>

    <li class="snav-item">
      <a class="snav-link" href="{{ url('/') }}"><i class="fa-solid fa-route me-1"></i>
        <span class="snav-label">Create Voyage</span>
      </a>
    </li>

    <li class="snav-item">
      <a class="snav-link" href="{{ url('/') }}">
        <i class="fa-solid fa-magnifying-glass me-1"></i>
        <span class="snav-label">Search Voyage</span>
      </a>
    </li>

    <li class="snav-item">
      <i class="fa-solid fa-box me-3"></i>
      <span class="snav-label">Cargo</span>
    </li>

    <li class="snav-item">
      <a class="snav-link" href="{{ url('/') }}">
        <i class="fa-solid fa-cubes me-1"></i>
        <span class="snav-label">Auto Placement</span>
      </a>
    </li>

    <li class="snav-item">
      <a class="snav-link" href="{{ url('/') }}">
        <i class="fa-solid fa-boxes-stacked me-1"></i>
        <span class="snav-label">Create Cargo Item</span>
      </a>
    </li>

    <li class="snav-item">
      <a class="snav-link" href="{{ url('/') }}">
        <i class="fa-solid fa-tags me-1"></i>
        <span class="snav-label">View Rates</span>
      </a>
    </li>

    <li class="snav-item" id="s-collapseBtn" style="cursor: pointer">
      <i class="fa-solid fa-bars me-3"></i>
      <span class="snav-label">Collapse Menu</span>
    </li>

  </ul>
</nav>

