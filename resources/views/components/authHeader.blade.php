<header class="auheader-main main-header d-flex align-items-center justify-content-between px-4">
  <div class="header-left d-flex align-items-center gap-3">
    <img src="{{ asset('images/lslc_logo_name2.png') }}" alt="Logo" class="auheader-logo">
  </div>

  <div class="auheader-title header-title text-center">
    <h3 class="m-0 fw-bold">@yield('page-title')</h3>
  </div>

  <div class="auheader-user d-flex align-items-center gap-3 position-relative">
    <i class="fa-regular fa-bell"></i>

    <div class="user-dropdown" id="userDropdownToggle">
      <div class="d-flex align-items-center gap-2">
        <i class="fa-solid fa-circle-user auheader-profile"></i>
        <span class="fw-semibold">{{ Session::get('username') }}</span>
      </div>

  <div class="dropdown-menu">
      <a href="#" class="dropdown-item">
        <i class="fa-solid fa-user"></i> View Profile
      </a>
      <a href="#" class="dropdown-item">
        <i class="fa-solid fa-gear"></i> Settings
      </a>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="dropdown-item logout">
          <i class="fa-solid fa-right-from-bracket"></i> Log out
        </button>
      </form>
    </div>
  </div>


  </div>
</header>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('userDropdownToggle');
    const dropdown = document.querySelector('.user-dropdown');

    toggle.addEventListener('click', (e) => {
      e.stopPropagation();
      dropdown.classList.toggle('active');
    });

    document.addEventListener('click', (e) => {
      if (!dropdown.contains(e.target)) {
        dropdown.classList.remove('active');
      }
    });
  });
</script>

