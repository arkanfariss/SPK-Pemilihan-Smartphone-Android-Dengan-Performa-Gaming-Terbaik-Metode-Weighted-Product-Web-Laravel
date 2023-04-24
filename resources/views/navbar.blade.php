  <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color:#000000">
    <div class="container">
      <a class="navbar-brand" href="home">FIND YOUR GAMING SMARTPHONE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link {{ ($title === "HOME") ? 'active' : '' }}" href="home">Home</a>
          <a class="nav-link {{ ($title === "ABOUT") ? 'active' : '' }}" href="about">About</a>
          @auth
          <div class="dropdown">
            <a class="nav-link dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome, Admin
            </a>
          
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
              <li>
                  <form action="/logout" method="post">
                    @csrf
                      <button type="submit" class="dropdown-item">Logout</button>
                  </form>
            </li>
            </ul>
          </div>
          @else
            <a class="nav-link {{ ($title === "ADMIN") ? 'active' : '' }}" href="admin">Admin</a>
          @endauth
        </div>
      </div>
    </div>
  </nav>
