<div>
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

              <li><a class="nav-link scrollto {{ Route::currentRouteName()== 'activite' ? 'active' : '' }}" href="{{ route('activite') }}">Activites et Actions</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
          <a class="buy-tickets scrollto {{ Route::currentRouteName()== 'inscription' ? 'active' : '' }}" href="{{ route('inscription') }}">Inscription</a>

        </div>
    </header><!-- End Header -->
       <!-- ======= Gallery Section ======= -->
       <section id="gallery" style="padding-top: 250px; padding-bottom: 100px">

        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Détails de l'activité</h2>
            <p>Check our gallery from the recent events</p>
          </div>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a href="assets/img/gallery/1.jpg" class="gallery-lightbox"><img src="assets/img/gallery/1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/2.jpg" class="gallery-lightbox"><img src="assets/img/gallery/2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/3.jpg" class="gallery-lightbox"><img src="assets/img/gallery/3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/4.jpg" class="gallery-lightbox"><img src="assets/img/gallery/4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/5.jpg" class="gallery-lightbox"><img src="assets/img/gallery/5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/6.jpg" class="gallery-lightbox"><img src="assets/img/gallery/6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/7.jpg" class="gallery-lightbox"><img src="assets/img/gallery/7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/8.jpg" class="gallery-lightbox"><img src="assets/img/gallery/8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div>
            <p>
                Check our gallery from the recent eventsCheck our gallery from the recent events Check our gallery from the recent events Check our gallery from the recent events Check our gallery from the recent events Check our gallery from the recent events Check our gallery from the recent events Check our gallery from the recent events Check our gallery from the recent events Check our gallery from the recent events Check our gallery from the recent eventsCheck our gallery from the recent events Check our gallery from the recent events Check our gallery from the recent events Check our gallery from the recent events Check our gallery from the recent events Check our gallery from the recent eventsCheck our gallery from the recent eventsCheck our gallery from the recent events Check our gallery from the recent events Check our gallery from the recent eventsCheck our gallery from the recent events Check our gallery from the recent eventsCheck our gallery from the recent events Check our gallery from the recent eventsCheck our gallery from the recent events Check our gallery from the recent eventsCheck our gallery from the recent events Check our gallery from the recent events Check our
                gallery from the recent events Check our gallery from the recent eventsCheck our gallery from the recent events
            </p>
        </div>

      </section><!-- End Gallery Section -->
</div>
