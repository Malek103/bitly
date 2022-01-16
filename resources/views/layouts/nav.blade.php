<nav class="navbar navbar-expand-md navbar-light fixed-top py-4" id="main-nav">
    <div class="container">
      <a href="#home" class="navbar-brand">
        <img src="{{ asset('img/logobitly.jfif') }}" width="50" height="50" alt="">

      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#" class="nav-link">Why Bitly?</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Solutions</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Features</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Pricing</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Resources</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="{{ route('login') }}" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link btn btn-outline-primary">Get a Quote</a>
            </li>

          </ul>
      </div>
    </div>
  </nav>
