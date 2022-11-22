@section('styles')
<style>
    #header{
        background-color:rgb(41, 41, 42);
    }
    .scrollto{
        color:black;
    }
</style>
@endsection
<div>
    <header id="header" class="d-flex align-items-center " >
        <div class="container-fluid container-xxl d-flex align-items-center">

          <div id="logo" class="me-auto">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
            <a href="{{ route('welcome') }}" class="scrollto"><img src="{{ asset('assets/site/assets/img/logo1.jpg') }}" alt="" title=""></a>
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
        <p>Quelques-unes de nos activités</p>
      </div>

      <div class="row">
      @foreach ($activiteActions as $activiteAction)
      @php
        $images = explode(",",$activiteAction->image);
      @endphp
        <div class="col-lg-4 col-md-6">
          <div class="speaker" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('storage/Activites')}}/{{$images[0]}}" alt="{{$activiteAction->name}}" alt="Speaker 1" class="img-fluid">
            <div class="details">
              <h3><a href="{{ route('activite-details', ['id' => $activiteAction->id])}}">Brenden Legros</a></h3>
              <p>{{ $activiteAction->name }}</p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      @endforeach
      </div>
    </div>

  </section><!-- End Speakers Section -->
</div>
