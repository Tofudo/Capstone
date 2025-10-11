<nav class="admin-nav">
  <ul class="anav justify-content-start">

    <li class="anav-item">
      <a class="anav-link" id="adash" href="{{ route('admin.dashboard') }}">
        <i class="fa-solid fa-chart-simple me-2"></i>Dashboard
      </a>
    </li>

    <li class="anav-item"><i class="fa-solid fa-map me-2"></i></i>Voyages</li>
    <li class="anav-item"><a class="anav-link" href="{{ url('/') }}"><i class="fa-solid fa-route me-2"></i>Create Voyage</a></li>
    <li class="anav-item"><a class="anav-link" href="{{ url('/') }}"><i class="fa-solid fa-magnifying-glass me-2"></i>Search Voyage</a></li>

    <li class="anav-item"><i class="fa-solid fa-box me-2"></i>Cargo</li>
    <li class="anav-item"><a class="anav-link" href="{{ url('/') }}">Auto Placement</a></li>
    <li class="anav-item"><a class="anav-link" href="{{ url('/') }}"><i class="fa-solid fa-boxes-stacked me-2"></i>Create Cargo Item</a></li>
    <li class="anav-item"><a class="anav-link" href="{{ url('/') }}"><i class="fa-solid fa-tags me-2"></i>View Rates</a></li>

    <li class="anav-item"><i class="fa-solid fa-ship me-2"></i>Vessel</li>
    <li class="anav-item"><a class="anav-link" href="{{ url('/') }}"><i class="fa-solid fa-ferry me-2"></i>View Vessels</a></li>

    <li class="anav-item"><i class="fa-solid fa-tag me-2"></i>Promos</li>
    <li class="anav-item"><a class="anav-link" href="{{ url('/') }}"><i class="fa-solid fa-tags me-2"></i>View Promos</a></li>

    <li class="anav-item"><i class="fa-solid fa-user-gear me-2"></i>Staff</li>
    <li class="anav-item"><a class="anav-link" href="{{ url('/') }}"><i class="fa-solid fa-user-plus me-2"></i>Create Staff</a></li>
    <li class="anav-item"><a class="anav-link" href="{{ url('/') }}"><i class="fa-solid fa-users me-2"></i>Staff List</a></li>
    <li class="anav-item"><i class="fa-solid fa-bars me-2"></i>Collapse Menu</li>
  </ul>
</nav>