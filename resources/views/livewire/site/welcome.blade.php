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
          <a href="https://www.youtube.com/watch?v=-9AHvO-MfIk" class="glightbox play-btn mb-4"></a>
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

        <!-- ======= Schedule Section ======= -->
        {{-- <section id="schedule" class="section-with-bg">
          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h2>Nos differents programme</h2>
              <p>Here is our event programme</p>
            </div>

            <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
              <li class="nav-item">
                <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Day 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Day 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">Day 3</a>
              </li>
            </ul>

            <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
              necessitatibus voluptatem quis labore perspiciatis quia.</h3>

            <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

              <!-- Schdule Day 1 -->
              <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

                <div class="row schedule-item">
                  <div class="col-md-2"><time>09:30 AM</time></div>
                  <div class="col-md-10">
                    <h4>Registration</h4>
                    <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>10:00 AM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/1.jpg') }}" alt="Brenden Legros">
                    </div>
                    <h4>Keynote <span>Brenden Legros</span></h4>
                    <p>Facere provident incidunt quos voluptas.</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>11:00 AM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/2.jpg') }}" alt="Hubert Hirthe">
                    </div>
                    <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                    <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>12:00 AM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/3.jpg') }}" alt="Cole Emmerich">
                    </div>
                    <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                    <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>02:00 PM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/4.jpg') }}" alt="Jack Christiansen">
                    </div>
                    <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                    <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>03:00 PM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/5.jpg') }}" alt="Alejandrin Littel">
                    </div>
                    <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                    <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>04:00 PM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/6.jpg') }}" alt="Willow Trantow">
                    </div>
                    <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                    <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                  </div>
                </div>

              </div>
              <!-- End Schdule Day 1 -->

              <!-- Schdule Day 2 -->
              <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

                <div class="row schedule-item">
                  <div class="col-md-2"><time>10:00 AM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/1.jpg') }}" alt="Brenden Legros">
                    </div>
                    <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                    <p>Facere provident incidunt quos voluptas.</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>11:00 AM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/2.jpg') }}" alt="Hubert Hirthe">
                    </div>
                    <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                    <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>12:00 AM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/3.jpg') }}" alt="Cole Emmerich">
                    </div>
                    <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                    <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>02:00 PM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/4.jpg') }}" alt="Jack Christiansen">
                    </div>
                    <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                    <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>03:00 PM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/5.jpg') }}" alt="Alejandrin Littel">
                    </div>
                    <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                    <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>04:00 PM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/6.jpg') }}" alt="Willow Trantow">
                    </div>
                    <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                    <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                  </div>
                </div>

              </div>
              <!-- End Schdule Day 2 -->

              <!-- Schdule Day 3 -->
              <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

                <div class="row schedule-item">
                  <div class="col-md-2"><time>10:00 AM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/2.jpg') }}" alt="Hubert Hirthe">
                    </div>
                    <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                    <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>11:00 AM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/3.jpg') }}" alt="Cole Emmerich">
                    </div>
                    <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                    <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>12:00 AM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/1.jpg') }}" alt="Brenden Legros">
                    </div>
                    <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                    <p>Facere provident incidunt quos voluptas.</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>02:00 PM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/4.jpg') }}" alt="Jack Christiansen">
                    </div>
                    <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                    <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>03:00 PM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/5.jpg') }}" alt="Alejandrin Littel">
                    </div>
                    <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                    <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>04:00 PM</time></div>
                  <div class="col-md-10">
                    <div class="speaker">
                      <img src="{{ asset('assets/site/assets/img/speakers/6.jpg') }}" alt="Willow Trantow">
                    </div>
                    <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                    <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                  </div>
                </div>

              </div>
              <!-- End Schdule Day 2 -->

            </div>

          </div>

        </section><!-- End Schedule Section --> --}}

        {{-- <!-- ======= Venue Section ======= -->
        <section id="venue">

          <div class="container-fluid" data-aos="fade-up">

            <div class="section-header">
              <h2>Event Venue</h2>
              <p>Event venue location info and gallery</p>
            </div>

            <div class="row g-0">
              <div class="col-lg-6 venue-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>

              <div class="col-lg-6 venue-info">
                <div class="row justify-content-center">
                  <div class="col-11 col-lg-8 position-relative">
                    <h3>Downtown Conference Center, New York</h3>
                    <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus. Consequatur sequi et ea suscipit enim nesciunt quia velit.</p>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="container-fluid venue-gallery-container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-0">

              <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                  <a href="assets/img/venue-gallery/1.jpg" class="glightbox" data-gall="venue-gallery">
                    <img src="assets/img/venue-gallery/1.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                  <a href="assets/img/venue-gallery/2.jpg" class="glightbox" data-gall="venue-gallery">
                    <img src="assets/img/venue-gallery/2.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                  <a href="assets/img/venue-gallery/3.jpg" class="glightbox" data-gall="venue-gallery">
                    <img src="assets/img/venue-gallery/3.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                  <a href="assets/img/venue-gallery/4.jpg" class="glightbox" data-gall="venue-gallery">
                    <img src="assets/img/venue-gallery/4.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                  <a href="assets/img/venue-gallery/5.jpg" class="glightbox" data-gall="venue-gallery">
                    <img src="assets/img/venue-gallery/5.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                  <a href="assets/img/venue-gallery/6.jpg" class="glightbox" data-gall="venue-gallery">
                    <img src="assets/img/venue-gallery/6.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                  <a href="assets/img/venue-gallery/7.jpg" class="glightbox" data-gall="venue-gallery">
                    <img src="assets/img/venue-gallery/7.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                  <a href="assets/img/venue-gallery/8.jpg" class="glightbox" data-gall="venue-gallery">
                    <img src="assets/img/venue-gallery/8.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>

            </div>
          </div>

        </section><!-- End Venue Section --> --}}

        <!-- ======= Hotels Section ======= -->
        {{-- <section id="hotels" class="section-with-bg">

          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h2>Hotels</h2>
              <p>Her are some nearby hotels</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

              <div class="col-lg-4 col-md-6">
                <div class="hotel">
                  <div class="hotel-img">
                    <img src="{{ asset('assets/site/assets/img/hotels/1.jpg') }}" alt="Hotel 1" class="img-fluid">
                  </div>
                  <h3><a href="#">Hotel 1</a></h3>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <p>0.4 Mile from the Venue</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="hotel">
                  <div class="hotel-img">
                    <img src="{{ asset('assets/site/assets/img/hotels/2.jpg') }}" alt="Hotel 2" class="img-fluid">
                  </div>
                  <h3><a href="#">Hotel 2</a></h3>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill-half-full"></i>
                  </div>
                  <p>0.5 Mile from the Venue</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="hotel">
                  <div class="hotel-img">
                    <img src="{{ asset('assets/site/assets/img/hotels/3.jpg') }}" alt="Hotel 3" class="img-fluid">
                  </div>
                  <h3><a href="#">Hotel 3</a></h3>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <p>0.6 Mile from the Venue</p>
                </div>
              </div>

            </div>
          </div>

        </section><!-- End Hotels Section --> --}}

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

        {{-- <!-- ======= Supporters Section ======= -->
        <section id="supporters" class="section-with-bg">

          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h2>Sponsors</h2>
            </div>

            <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">

              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="supporter-logo">
                  <img src="assets/img/supporters/1.png" class="img-fluid" alt="">
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="supporter-logo">
                  <img src="assets/img/supporters/2.png" class="img-fluid" alt="">
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="supporter-logo">
                  <img src="assets/img/supporters/3.png" class="img-fluid" alt="">
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="supporter-logo">
                  <img src="assets/img/supporters/4.png" class="img-fluid" alt="">
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="supporter-logo">
                  <img src="assets/img/supporters/5.png" class="img-fluid" alt="">
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="supporter-logo">
                  <img src="assets/img/supporters/6.png" class="img-fluid" alt="">
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="supporter-logo">
                  <img src="assets/img/supporters/7.png" class="img-fluid" alt="">
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="supporter-logo">
                  <img src="assets/img/supporters/8.png" class="img-fluid" alt="">
                </div>
              </div>

            </div>

          </div>

        </section><!-- End Sponsors Section --> --}}

        <!-- =======  F.A.Q Section ======= -->
        {{-- <section id="faq">

          <div class="container" data-aos="fade-up">

            <div class="section-header">
              <h2>F.A.Q </h2>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-9">

                <ul class="faq-list">

                  <li>
                    <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                      </p>
                    </div>
                  </li>

                  <li>
                    <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                      </p>
                    </div>
                  </li>

                  <li>
                    <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                      </p>
                    </div>
                  </li>

                  <li>
                    <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                      </p>
                    </div>
                  </li>

                  <li>
                    <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                      </p>
                    </div>
                  </li>

                  <li>
                    <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                      </p>
                    </div>
                  </li>

                </ul>

              </div>
            </div>

          </div>

        </section><!-- End  F.A.Q Section --> --}}

        <!-- ======= Subscribe Section ======= -->
        {{-- <section id="subscribe">
          <div class="container" data-aos="zoom-in">
            <div class="section-header">
              <h2>Newsletter</h2>
              <p>Rerum numquam illum recusandae quia mollitia consequatur.</p>
            </div>

            <form method="POST" action="#">
              <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 d-flex">
                  <input type="text" class="form-control" placeholder="Enter your Email">
                  <button type="submit" class="ms-2">Subscribe</button>
                </div>
              </div>
            </form>

          </div>
        </section><!-- End Subscribe Section --> --}}

        {{-- <!-- ======= Buy Ticket Section ======= -->
        <section id="buy-tickets" class="section-with-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-header">
              <h2>Modalités</h2>
              <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
            </div>

            <div class="row">
              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card mb-5 mb-lg-0">
                  <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">Inscrption</h5>
                    <h6 class="card-price text-center">25 000 F</h6>
                    <hr>
                    <ul class="fa-ul">
                      <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                      <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                      <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                      <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
                      <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                      <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                    </ul>
                    <hr>
                    <div class="text-center">
                        <button type="button" class="btn" >Inscription</button>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card mb-5 mb-lg-0">
                  <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">Gala</h5>
                    <h6 class="card-price text-center">25 000 F</h6>
                    <hr>
                    <ul class="fa-ul">
                      <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                      <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                      <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                      <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                      <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                      <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                    </ul>
                    <hr>
                    <div class="text-center">
                        <button type="button" class="btn" >Inscription</button>

                    </div>
                  </div>
                </div>
              </div>
              <!-- Pro Tier -->
              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">Autres Activités</h5>
                    <h6 class="card-price text-center">0 F</h6>
                    <hr>
                    <ul class="fa-ul">
                      <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                      <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                      <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                      <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                      <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
                      <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                    </ul>
                    <hr>
                    <div class="text-center">
                      <button type="button" class="btn" >Inscription</button>
                    </div>

                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Modal Order Form -->
          <div id="buy-ticket-modal" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Buy Tickets</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="#">
                    <div class="form-group">
                      <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                    </div>
                    <div class="form-group mt-3">
                      <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                    </div>
                    <div class="form-group mt-3">
                      <select id="ticket-type" name="ticket-type" class="form-select">
                        <option value="">-- Select Your Ticket Type --</option>
                        <option value="standard-access">Standard Access</option>
                        <option value="pro-access">Pro Access</option>
                        <option value="premium-access">Premium Access</option>
                      </select>
                    </div>
                    <div class="text-center mt-3">
                      <button type="submit" class="btn">Buy Now</button>
                    </div>
                  </form>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->

        </section><!-- End Buy Ticket Section --> --}}

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



