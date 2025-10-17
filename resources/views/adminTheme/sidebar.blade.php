<style>
  .bbh-sans-bartle-regular {
  font-family: "BBH Sans Bartle", sans-serif;
  font-weight: 400;
  font-style: normal;
}
</style>

<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
      <a href="{{ route('admin.contactMe') }}" class="logo ms-5">
        <img
          src="{{ asset('frontTheme/assets/img/hm44.png')}}"
          alt="navbar brand"
          class="navbar-brand"
          height="40"
        />
        <span class="text-light ms-2 bbh-sans-bartle-regular">HM</span>
      </a>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
          <i class="gg-menu-left"></i>
        </button>
      </div>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>


  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Content</h4>
        </li>
          
        <li class="nav-item active">
          <a data-bs-toggle="collapse" href="{{ route('admin.contactMe')}}">
            <i class="fas fa-phone"></i>
            <p>Contact Me</p>
          </a>
        </li>
      </ul>
    </div>
  </div>


</div>
<!-- End Sidebar -->