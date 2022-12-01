@section('styles')
<style>
.divimage img{
    width: 100%;
    /*height: 100%; */
}

/* .divtext{
    width: 100%;
    height: 100%;
} */
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

              {{-- <li><a class="nav-link scrollto" href="#about">Evenement</a></li> --}}
              <li><a class="nav-link scrollto" href="#speakers">A propos</a></li>
              <li><a class="nav-link scrollto" href="{{ route('activite') }}">Activites et Actions</a></li>

              {{-- <li><a class="nav-link scrollto" href="#schedule">Nos programmes</a></li> --}}
              {{-- <li><a class="nav-link scrollto" href="#venue">Venue</a></li> --}}
              {{-- <li><a class="nav-link scrollto" href="#hotels">Hotels</a></li> --}}
              {{-- <li><a class="nav-link scrollto" href="#gallery"></a></li> --}}
              {{-- <li><a class="nav-link scrollto" href="#supporters">Sponsors</a></li> --}}
              <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
              </ul>
            </li> -->
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
          <a class="buy-tickets scrollto {{ Route::currentRouteName()== 'inscription' ? 'active' : '' }}" href="{{ route('inscription') }}">Inscription</a>

        </div>
    </header><!-- End Header -->
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
          <h1 class="mb-4 pb-0">International Inner wheel <br><span> District 909</span> </h1>
          <p class="mb-4 pb-0">Assemblée Générale Annuelle <br> <h4 style="color: white">COTONOU, du 01 au 04 Mars 2023</h4> </p>
          <a href="{{ asset('assets/site/assets/video/description.mp4') }}" class="glightbox play-btn mb-4"></a>
          <a href="{{ route('inscription') }}" class="about-btn scrollto">S'inscrire</a>
        </div>
      </section><!-- End Hero Section -->

      <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
          <div class="container" data-aos="fade-up">
            <div class="row">
              <div class="col-lg-6">
                {{-- <h2>Description de l'évenement</h2>
                <p>Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut
                  accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt inventore in
                  est ut optio sequi unde.</p> --}}
              </div>
              <div class="col-lg-3">
                {{-- <h3>Lieu</h3>
                <p>Bénin, cotonou</p> --}}
              </div>
              <div class="col-lg-3">
                {{-- <h3>Periode</h3> --}}
                {{-- <p>04 jours d'activité<br>Du 01 au 04 Mars 2023</p> --}}
              </div>
            </div>
          </div>
        </section><!-- End About Section -->

        <!-- ======= Speakers Section ======= -->
        <section id="speakers">
          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h2>Découvrez Inner wheel</h2>
              <p>A propos de nous</p>
            </div>

            <div class="row">
                <div class="col-md-6 divimage">
                    <img src="{{ asset('assets/site/assets/img/des.jpeg') }}" alt="" >
                </div>
                <div class="col-md-6 text-justify divtext">
                    <h3> <strong>QUI SOMMES NOUS</strong> </h3>
                    <p class="text-justify" style="text-align: justify">
                        Nous sommes des femmes de cœur appartenant à une organisation féminine, apolitique, non confessionnelle appelée International Inner Wheel.
                        Cette organisation, la plus grande au monde compte environ 120 000 membres regroupés dans 4200 clubs répartis dans 182 districts.
                        Elle siège à l’ONU avec six (06) représentantes et un statut de consultant depuis 1988. Ainsi, l’Inner Wheel est consulté sur les sujets relatifs aux droits de l’homme et des enfants, aux droits de la femme, aux droits de la famille et des personnes âgées ainsi que sur les problèmes liés à la drogue.
                        Fondée par les épouses des rotariens depuis le 10 janvier 1924, elle s’est ouverte à partir de 2012 à toutes les femmes capables d’offrir un peu de leur temps et de leurs ressources à travers l’amitié et le service aux femmes et aux enfants en situation difficile, nos cibles privilégiées.

                    </p>
                     <p class="text-justify" style="text-align: justify">
                        Ses valeurs sont le Service, l’Amitié et l’Entente Internationale.<br>
                        L’Inner Wheel s’investit dans les actions à caractère social. Il soutient des orphelinats, les malades mentaux, prend en charge des enfants en situation difficile pour leur scolarisation (construction de salles de classes ; dons de fournitures scolaires de bourses d’excellence ; etc.), les femmes vivant dans la précarité, etc.

                     </p>
                     <p class="text-justify" style="text-align: justify">
                        Le District 909 fait partie des 177 districts du monde et couvre 7 pays que sont :
                        <ul>
                            <li>Bénin</li>
                            <li>Burkina-Faso</li>
                            <li>Côte d’Ivoire</li>
                            <li>Guinée Conakry</li>
                            <li>Mali</li>
                            <li>Sénégal</li>
                            <li>Togo</li>

                        </ul>
                        Le Gouverneur du District 909 pour l’année 2022-2023 est l’amie Gisèle ENIANLOKO MARTIN, de nationalité béninoise. L’année INNER WHEEL va du 1er juillet d’une année au 30 juin de l’année suivante.

                        Durant chaque mandat, il se tient une Assemblée Générale Annuelle qui regroupe les membres de tous les pays du District, environ 200 personnes et se déroule dans le pays du Gouverneur. Ainsi donc, cette année, elle aura lieu à Cotonou au Bénin, du 1er au 04 Mars 2023.
                     </p>
                     <p class="text-justify" style="text-align: justify">

                        Les amies des autres districts sont également conviées. Ainsi, le District 915 est représenté par les amies du Cameroun et de la République Démocratique du Congo.
                        Certaines amies d’autres pays et d’autres districts sont également représentées à nos assemblées générales annuelles.

                     </p>

                </div>
            </div>
          </div>

        </section><!-- End Speakers Section -->


        <!-- ======= Gallery Section ======= -->
        <section id="gallery">

          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h2>Les pays Membres</h2>
              <p>Les différents pays du D909 de l'international INNER WHEEL</p>
            </div>
          </div>

          <div class="gallery-slider swiper">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide text-center"><img src="{{ asset('assets/site/assets/img/gallery/3.png') }}" class="" alt="" width="100" height="100"> <h6 class="mt-3">Bénin</h6></div>
                <div class="swiper-slide text-center"><img src="{{ asset('assets/site/assets/img/gallery/1.png') }}" class="" alt="" width="100" height="100"> <h6 class="mt-3">Burkina-Faso</h6></div>
                <div class="swiper-slide text-center"><img src="{{ asset('assets/site/assets/img/gallery/7.png') }}" class="" alt="" width="100" height="100"> <h6 class="mt-3">Côte d'Ivoire</h6></div>
                <div class="swiper-slide text-center"><img src="{{ asset('assets/site/assets/img/gallery/5.png') }}" class="" alt="" width="100" height="100"> <h6 class="mt-3">Guinée Conakry</h6></div>
              <div class="swiper-slide text-center"><img src="{{ asset('assets/site/assets/img/gallery/2.png') }}" class="" alt="" width="100" height="100"> <h6 class="mt-3">Mali</h6></div>
              <div class="swiper-slide text-center"><img src="{{ asset('assets/site/assets/img/gallery/6.png') }}" class="" alt="" width="100" height="100"> <h6 class="mt-3">Sénégal</h6></div>
              <div class="swiper-slide text-center"><img src="{{ asset('assets/site/assets/img/gallery/4.png') }}" class="" alt="" width="100" height="100"> <h6 class="mt-3">Togo</h6></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>

        </section><!-- End Gallery Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="section-bg">

          <div class="container" data-aos="fade-up">

            <div class="section-header">
              <h2>Contactez Nous</h2>
              <p>Pour plus d'informations veuillez nous contacter.</p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-phone">
                      <i class="bi bi-phone"></i>
                      <h3>Contact N°1</h3>
                      <p>Gisèle ENIANLOKO MARTIN</p>
                      <p>Gouverneur du District</p>
                      <p><a href="tel:+22997974054">(+229) 97 97 40 54</a></p>
                      <p><a href="mailto:virgoefr@yahoo.fr">virgoefr@yahoo.fr</a></p>


                    </div>
                  </div>

              <div class="col-md-4">
                <div class="contact-phone">
                  <i class="bi bi-phone"></i>
                  <h3>Contact N°2</h3>
                  <p>Rufine AGOSSOU</p>
                      <p>Secrétaire du District</p>
                      <p><a href="tel:+22995053691">(+229) 95 05 36 91</a></p>
                      <p><a href="mailto:rufineagossou@gmail.com">rufineagossou@gmail.com</a></p>

                </div>
              </div>

              <div class="col-md-4">
                <div class="contact-phone">
                  <i class="bi bi-phone"></i>
                  <h3>Contact N°3</h3>
                  <p>Aurore PATHINVO</p>
                      <p>Présidente Comité d'organisation</p>
                      <p><a href="tel:+22966090273">(+229) 66 09 02 73</a></p>
                      <p><a href="mailto:auropathinvo@yahoo.fr">auropathinvo@yahoo.fr</a></p>

                </div>
              </div>

            </div>

            <div class="form">
                @if (Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
              <form wire:submit.prevent='sendMessage'>
                <div class="row">
                  <div class="form-group col-md-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required wire:model="name">
                  </div>
                  <div class="form-group col-md-6 mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" required required wire:model="email">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" required wire:model="subject">
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required wire:model="comment"></textarea>
                </div>

                <div class="text-center"><button type="submit" class="btn btn-success mt-5">Envoyer</button></div>
              </form>
            </div>

          </div>
        </section><!-- End Contact Section -->

      </main><!-- End #main -->
</div>



