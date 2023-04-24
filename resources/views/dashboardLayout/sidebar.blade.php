<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/data') ? 'active' : '' }}" href="/dashboard/data">
            <span data-feather="database" class="align-text-bottom"></span>
            Data
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/data/create') ? 'active' : '' }}" href="/dashboard/data/create">
            <span data-feather="plus" class="align-text-bottom"></span>
            Input Data
          </a>
        </li>
      </ul>
    </div>
  </nav>