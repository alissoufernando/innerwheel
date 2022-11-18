<header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
        <a href="index.html" class="scrollto"><img src="{{ asset('assets/site/assets/img/logo1.jpg') }}" alt="" title=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>

          <li><a class="nav-link scrollto {{ Route::currentRouteName()== 'welcome' ? 'active' : '' }}" href="{{ route('welcome') }}">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#speakers">A propos</a></li>

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a class="buy-tickets scrollto {{ Route::currentRouteName()== 'inscription' ? 'active' : '' }}" href="{{ route('inscription') }}">Inscription</a>

    </div>
</header><!-- End Header -->
