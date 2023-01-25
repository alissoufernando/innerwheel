@section('styles')
<style>
    #header{
        background-color:rgb(41, 41, 42);
    }
    /*--------------------------------------------------------------
# Gallery Section
--------------------------------------------------------------*/
#gallery {
  padding: 60px;
  overflow: hidden;
}

#gallery .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

#gallery .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid rgb(255,215,0);
}

#gallery .swiper-pagination .swiper-pagination-bullet-active {
  background-color: rgb(255,215,0);
}

#gallery .swiper-slide-active {
  text-align: center;

}

@media (min-width: 992px) {
  #gallery .swiper-wrapper {
    padding: 40px 0;
  }

  #gallery .swiper-slide-active {
    border: 5px solid rgb(255,215,0);
    padding: 4px;
    background: rgb(255,215,0);
    z-index: 1;
    transform: scale(1.15);
    margin-top: 6px;

  }
}
.scrollto{
    color:black;
}

</style>
@endsection
<div>
    <header id="header" class="d-flex align-items-center ">
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
       <!-- ======= Gallery Section ======= -->
       <section id="gallery" style="padding-top: 250px; padding-bottom: 100px">

        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>{{ $activiteAction->name }}</h2>
            <p></p>
          </div>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            @php
                $images = explode(",",$activiteAction->image);
                // dd($images);
            @endphp
            @foreach ($images as $image)
            @if (pathinfo($image, PATHINFO_EXTENSION) != "pdf")
            <div class="swiper-slide"><a href="{{ asset('activity_files')}}/{{$image}}" class="gallery-lightbox"><img src="{{ asset('activity_files')}}/{{$image}}" class="img-fluid" alt="{{ $activiteAction->name }}"></a></div>
            @endif
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="justify-content-center">
            {!! $activiteAction->contenu !!}

        </div>
        <div style="text-align: center">
            @foreach ($images as $image)
            @if (pathinfo($image, PATHINFO_EXTENSION) == "pdf")
            <a href="{{ asset('activity_files')}}/{{$image}}" target="_blank" rel="noopener noreferrer" class="btn btn-warning text-dark">Télécharger la pièce jointe</a>
            @endif
            @endforeach
        </div>

      </section><!-- End Gallery Section -->
</div>
