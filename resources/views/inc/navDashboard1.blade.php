{{-- <nav class="" style='background-color: #f7f3f0;'> --}}
<nav class="" style='background-image: linear-gradient(to bottom, #dad4ec 0%, #dad4ec 1%, #f3e7e9 100%);'>
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="/admin/order" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span data-feather="file"></span>
          Orders
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/admin/order">Pending</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/admin/order/success">Success</a>
          <a class="dropdown-item" href="/admin/order/fail">Fail</a>
        </div>
      </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="/admin/product" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span data-feather="shopping-cart"></span>
          Product
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/admin/product">View</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/admin/product/new">New</a>
        </div>
      </li>

    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Saved reports</span>
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
