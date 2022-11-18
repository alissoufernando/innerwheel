@section('styles')
<style>
    #header{
        background-color:rgb(41, 41, 42);
    }
</style>
@endsection
<div>
    <header id="header" class="d-flex align-items-center " >
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
 <!-- ======= Speakers Section ======= -->
 <section id="speakers" style="padding-top: 250px; padding-bottom: 100px">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Activités et Actions</h2>
        <p>Here are some of our speakers</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="speaker" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('assets/site/assets/img/speakers/1.jpg') }}" alt="Speaker 1" class="img-fluid">
            <div class="details">
              <h3><a href="speaker-details.html">Brenden Legros</a></h3>
              <p>Quas alias incidunt</p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="speaker" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('assets/site/assets/img/speakers/2.jpg') }}" alt="Speaker 2" class="img-fluid">
            <div class="details">
              <h3><a href="speaker-details.html">Hubert Hirthe</a></h3>
              <p>Consequuntur odio aut</p>
              <div class="social">
                {{-- <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="speaker" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('assets/site/assets/img/speakers/3.jpg') }}" alt="Speaker 3" class="img-fluid">
            <div class="details">
              <h3><a href="speaker-details.html">Cole Emmerich</a></h3>
              <p>Fugiat laborum et</p>
              <div class="social">
                {{-- <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="speaker" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('assets/site/assets/img/speakers/4.jpg') }}" alt="Speaker 4" class="img-fluid">
            <div class="details">
              <h3><a href="speaker-details.html">Jack Christiansen</a></h3>
              <p>Debitis iure vero</p>
              <div class="social">
                {{-- <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="speaker" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('assets/site/assets/img/speakers/5.jpg') }}" alt="Speaker 5" class="img-fluid">
            <div class="details">
              <h3><a href="speaker-details.html">Alejandrin Littel</a></h3>
              <p>Qui molestiae natus</p>
              <div class="social">
                {{-- <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="speaker" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('assets/site/assets/img/speakers/6.jpg') }}" alt="Speaker 6" class="img-fluid">
            <div class="details">
              <h3><a href="speaker-details.html">Willow Trantow</a></h3>
              <p>Non autem dicta</p>
              <div class="social">
                {{-- <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Speakers Section -->
</div>
