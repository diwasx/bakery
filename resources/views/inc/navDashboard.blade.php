<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="/admin/order">
          <span data-feather="file"></span>
          Orders
        </a>
      </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="/admin/product" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span data-feather="shopping-cart"></span>
          Product
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/admin/product">View</a>
          <a class="dropdown-item" href="/admin/product/new">New</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      {{-- <li class="nav-item"> --}}
      {{--   <a class="nav-link" href="#"> --}}
      {{--     <span data-feather="users"></span> --}}
      {{--     Customers --}}
      {{--   </a> --}}
      {{-- </li> --}}
      {{-- <li class="nav-item"> --}}
      {{--   <a class="nav-link" href="#"> --}}
      {{--     <span data-feather="bar-chart-2"></span> --}}
      {{--     Reports --}}
      {{--   </a> --}}
      {{-- </li> --}}
      {{-- <li class="nav-item"> --}}
      {{--   <a class="nav-link" href="#"> --}}
      {{--     <span data-feather="layers"></span> --}}
      {{--     Integrations --}}
      {{--   </a> --}}
      {{-- </li> --}}
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Saved reports</span>
      <a class="d-flex align-items-center text-muted" href="#">
        <span data-feather="plus-circle"></span>
      </a>
    </h6>
    <ul class="nav flex-column mb-2">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="file-text"></span>
          Current month
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="file-text"></span>
          Last quarter
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="file-text"></span>
          Social engagement
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="file-text"></span>
          Year-end sale
        </a>
      </li>
    </ul>
  </div>
</nav>
