@section('styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    label{
        font-weight: bolder;
    }

    .etape{
        margin-bottom: 40px;
    }

    .etape h5{
        font-weight: bolder;
        padding-top: 20px;
    }

    #inscription_step{
        background-color: rgb(255, 255, 255);
    }
    formId{
        background-color: #fff;
        width:10px;

    }
    .shadow{
        border-radius: 3%;
    }
    #header{
        background-color:rgb(41, 41, 42);
    }
</style>
@endsection

<div id="inscription_step">
    <header id="header" class="d-flex align-items-center ">
        <div class="container-fluid container-xxl d-flex align-items-center">

            <div id="logo" class="me-auto">
                <a href="index.html" class="scrollto"><img src="{{ asset('assets/site/assets/img/logo1.jpg') }}" alt="" title=""></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                <li><a class="nav-link scrollto active" href="{{ route('welcome') }}">Accueil</a></li>
                {{-- <li><a class="nav-link scrollto" href="#speakers">A propos</a></li> --}}
                {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a class="buy-tickets scrollto" href="{{ route('inscription') }}">Inscription</a>

        </div>
    </header><!-- End Header -->
    <!-- ======= Subscribe Section ======= -->
    <section id="" style="padding-top: 250px; padding-bottom: 100px">
        <div class="container">
          <div class="section-header">
            <h2>Inscription</h2>
            <p>Tous les champs sont obligatoires.</p>
          </div>

          <form wire:submit.prevent='storeinscription'>
            <div class="row justify-content-center ">

                @if ($this->currentStep == 1)

                <div class="col-md-6 shadow">
                    <div class="col-md-12 etape">
                        <h5 class="text-center" >Etape 1 : Informations personnelles</h5>
                    </div>
                    <div class="col-md-12 mb-4">
                            <label class="form-label">Veillez choisir votre pays <sup class="text-danger">*</sup></label>
                            <select class="form-control " name="" id="pay_id" wire:model="pay_id">
                                <option value="">Veillez choisir le pays</option>
                                @foreach ($pays as $pay)
                                <option value="{{ $pay->id }}">{{ $pay->libelle }}</option>
                                @endforeach
                            </select>
                        @error('pay_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                            <label class="form-label">Veillez choisir votre club <sup class="text-danger">*</sup></label>
                            <select class="form-control" name="" id="" wire:model="club_id">
                                <option value="">Veillez choisir le club</option>
                                @foreach ($clubs as $club)
                                <option value="{{ $club->id }}">{{ $club->libelle }}</option>
                                @endforeach
                            </select>
                        @error('club_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                        <label class="form-label">Votre nom <sup class="text-danger">*</sup></label>

                        <input type="text" class="form-control" name="lastName" placeholder="Entrer votre nom" wire:model="nom">
                        @error('nom')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                        <label class="form-label">Vos prénoms <sup class="text-danger">*</sup></label>

                        <input type="text" class="form-control" name="fisrtName" placeholder="Entrer vos prenoms" wire:model="prenoms">
                        @error('prenoms')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                        <label class="form-label">Votre Profession <sup class="text-danger">*</sup></label>

                        <input type="text" class="form-control" placeholder="Entrer votre fonction" wire:model="fonction">
                        @error('fonction')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">

                        <label class="form-label">Adresse <sup class="text-danger">*</sup></label>

                        <input type="text" class="form-control" placeholder="Entrer votre Adresse" wire:model="adresse">
                        @error('adresse')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                        <label class="form-label">Téléphone <sup class="text-danger">*</sup></label>

                        <input type="tel" class="form-control" placeholder="Entrer votre numero" wire:model="tel">
                        @error('tel')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                        <label class="form-label">E-mail <sup class="text-danger">*</sup></label>

                        <input type="text" class="form-control" placeholder="Entrer votre mail" wire:model="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                @endif

                @if ($this->currentStep == 2)
                <div class="col-md-6 shadow">
                    <div class="col-md-12 etape">
                        <h5 class="text-center" >Etape 2 : Informations relatives au séjour</h5>
                    </div>
                    <div class="col-md-12 mb-4">
                            <label class="form-label">Mode d'arrivée <sup class="text-danger">*</sup></label>
                            <select class="form-control " name="" id="mode_arrivee_id" wire:model="mode_arrivee_id">
                                <option value="">Veillez choisir le mode d'arrivé</option>
                                @foreach ($mode_arriveess as $mode_arrives)
                                <option value="{{ $mode_arrives->id }}">{{ $mode_arrives->libelle }}</option>
                                @endforeach
                            </select>
                        @error('mode_arrivee_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                        <label class="form-label">Date d'arrivée <sup class="text-danger">*</sup></label>
                        <input type="date" id="date_arrivee" class="form-control" placeholder="date d'arrivée" wire:model="date_arrivee">
                        @error('date_arrivee')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    <div class="col-md-12 mb-4">
                            <label class="form-label">Date de depart <sup class="text-danger">*</sup></label>

                            <input type="date" id="date_depart" class="form-control" wire:model="date_depart">
                        @error('date_depart')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                            <label class="form-label">Mode d'hebergement <sup class="text-danger">*</sup></label>
                            <select class="form-control" name="" id="hebergement_id" wire:model="hebergement_id">
                                <option value="">Veillez choisir le mode hebergement</option>
                                @foreach ($hebergements as $hebergement)
                                <option value="{{ $hebergement->id }}">{{ $hebergement->libelle }}</option>
                                @endforeach
                            </select>
                        @error('hebergement_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                            <label class="form-label">Hebergement <sup class="text-danger">*</sup></label>
                            <select class="form-control" name="" id="tarif_id" wire:model="tarif_id">
                                <option value="">Veillez choisir l'hebergement</option>
                                @foreach ($tarifs as $tarif)
                                <option value="{{ $tarif->id }}">{{ $tarif->libelle }} => {{ $tarif->prix }} FCFA</option>
                                @endforeach
                            </select>
                        @error('tarif_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                            <label class="form-label">Activité <sup class="text-danger">*</sup></label>
                            <select class="form-control" name="" id="activite_id" wire:model="activite_id">
                                <option value="">Veillez choisir une activité</option>
                                @foreach ($activites as $activite)
                                @if ($activite->obligatoire == 0)
                                <option value="{{ $activite->id }}">{{ $activite->libelle}} => {{ $activite->prix}} FCFA</option>
                                @endif
                                @endforeach
                            </select>
                        @error('activite_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                            <label class="form-label">Mode de paiement <sup class="text-danger">*</sup></label>
                            <select class="form-control " name="" id="Mode_paiement_id" wire:model="Mode_paiement_id">
                                <option value="">Veillez choisir un mode de paiement</option>
                                @foreach ($modepaiments as $modepaiment)
                                <option value="{{ $modepaiment->id }}">{{ $modepaiment->libelle }}</option>
                                @endforeach
                            </select>
                        @error('Mode_paiement_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                @endif

                @if ($this->currentStep == 3)
                <div class="col-md-6 shadow">
                    <div class="col-md-12 etape">
                        <h5 class="text-center" >Etape 3 : Recaptulation de mes informations</h5>
                    </div>
                    <div class="col-md-12 mb-4">
                        <h6 class="text-center"> <strong>Frais obligatoire</strong> </h6>
                        @foreach ($activites as $activite)
                        @if ($activite->obligatoire == 1)
                        <p> <strong>{{ $activite->libelle}}</strong>: {{ $activite->prix}} FCFA </p>
                        @endif
                        @endforeach
                    </div>
                    <div class="col-md-12 mb-4">
                        <h6 class="text-center"> <strong>Informations personnelles</strong> </h6>
                        <p> <strong>Nom</strong>: {{ $this->nom }} </p>
                        <p> <strong>Prenoms</strong>: {{ $this->prenoms }} </p>
                        <p> <strong>Fonction</strong>: {{ $this->fonction }} </p>
                        <p> <strong>Pays</strong>: {{ $this->Dclub->pay->libelle}}</p>
                        <p> <strong>Club</strong>: {{ $this->Dclub->libelle}}</p>

                        <p> <strong>E-mail</strong>: {{ $this->email }} </p>
                        <p> <strong>Adresse</strong>: {{ $this->adresse }} </p>
                        <p> <strong>Télephone</strong>: {{ $this->tel }} </p>
                    </div>
                    <div class="col-md-12 mb-4">
                        <h6 class="text-center"> <strong>Informations personnelles</strong> </h6>
                        <p> <strong>Mode d'arrivée</strong>: {{ $this->mode_arrivee->libelle }} </p>
                        <p> <strong>Date d'arrivée</strong>: {{ $this->date_arrivee }} </p>
                        <p> <strong>Date dapart</strong>: {{ $this->date_depart }} </p>
                        <p> <strong>Herbegement</strong>: {{ $this->Dtarifs->libelle }} => {{ $this->Dtarifs->prix }} FCFA</p>
                        <p> <strong>Activité</strong>: {{ $this->Dactivites->libelle}} => {{ $this->Dactivites->prix }} FCFA</p>
                        <p> <strong>Mode de paiement</strong>: {{ $this->Mode_paiement->libelle }} </p>
                    </div>

                    <div class="col-md-12 mb-4">
                      <strong><h6 class="text-center">Total: {{ $this->montant_total }}</h6> </strong>

                    </div>
                </div>
                @endif
            </div>
            <div class="row justify-content-center pt-4">
                <div class="col-md-6 action-buttons d-flex justify-content-between pt-2 pb-2">
                    @if ($currentStep == 1)
                    <div></div>
                    @endif
                    @if ($currentStep == 2 || $currentStep == 3)
                    <button type="button" class="btn btn-success" wire:click="decreaseStep()">Précédent</button>
                    @endif
                    @if ($currentStep == 1 || $currentStep == 2)
                    <button type="button" class="btn btn-success" wire:click="increaseStep()">Suivant</button>
                    @endif
                    @if ($currentStep == 3)
                    <button type="submit" class="btn btn-success">S'inscrire</button>
                    @endif

                </div>
            </div>
          </form>

        </div>
      </section><!-- End Subscribe Section -->
</div>

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  {{-- <script>
  $( function() {
    $( ".datepicker" ).datepicker();
  } );
  // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });


    $("#activite_id").on('change',function() {
        @this.activite_id = $(this).val();
    });
    $("#pay_id").on('change',function() {
        @this.pay_id = $(this).val();
    });

    $("#tarif_id").on('change',function() {
        @this.tarif_id = $(this).val();
    });

    $("#Mode_paiement_id").on('change',function() {
        @this.Mode_paiement_id = $(this).val();
    });
    $("#mode_arrivee_id").on('change',function() {
        @this.mode_arrivee_id = $(this).val();
    });
    $("#hebergement_id").on('change',function() {
        @this.hebergement_id = $(this).val();
    });
    $("#club_id").on('change',function() {
        @this.club_id = $(this).val();
    });
    $("#date_depart").on('change',function() {
        @this.date_depart = $(this).val();
    });
    $("#date_arrivee").on('change',function() {
        @this.date_arrivee = $(this).val();
    });

</script> --}}

@endsection



