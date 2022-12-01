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
    .scrollto{
        color:black;
    }
</style>
@endsection

<div id="inscription_step">
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
    <!-- ======= Subscribe Section ======= -->
    <section id="" style="padding-top: 100px; padding-bottom: 100px">

        <div class="container">

          <div class="section-header">
            <div class="text-center" style="padding-bottom: 50px">
            <img  src="{{ asset('assets/site/assets/img/des.jpeg') }}" alt="" width="300" height="400" >
            </div>

            <h2>Inscription</h2>
            <p>Tous les champs sont obligatoires.</p>
          </div>

          <form wire:submit.prevent='storeinscription'>
            <div class="row justify-content-center ">
                @if (Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                @if ($this->currentStep == 1)

                <div class="col-md-6 shadow">
                    <div class="col-md-12 etape">
                        <h5 class="text-center" >Etape 1 : Informations personnelles</h5>
                    </div>
                    <div class="col-md-12 mb-4">
                        <label class="form-label">Pays <sup class="text-danger">*</sup></label>
                        <select class="form-control " name="" id="pay_id" wire:model="pay_id">
                            <option value="">Veuillez choisir le pays</option>
                            @foreach ($payss as $paysss)
                            <option value="{{ $paysss->id }}">{{ $paysss->libelle }}</option>
                            @endforeach
                        </select>
                            @error('pay_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        @if ($this->pay_id == 12)
                            <label class="form-label mt-4">Précisez le Pays <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control"  placeholder="Saisir le nom de votre pays" wire:model="pays" autocomplete="off">
                            @error('pays')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        @endif
                    </div>
                    <div class="col-md-12 mb-4">
                        @if ($this->pay_id == 12)
                            <label class="form-label">Précisez le Club <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control"  placeholder="Saisir le nom de votre club" wire:model="club" autocomplete="off">
                            @error('club')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        @else
                            <label class="form-label">Club <sup class="text-danger">*</sup></label>
                            <select class="form-control" name="" id="" wire:model="club_id">
                                <option value="">Veuillez choisir le club</option>
                                @foreach ($clubs as $club)
                                <option value="{{ $club->id }}">{{ $club->libelle }}</option>
                                @endforeach
                            </select>
                            @error('club_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        @endif
                    </div>
                    <div class="col-md-12 mb-4">
                        <label class="form-label">Nom <sup class="text-danger">*</sup></label>

                        <input type="text" class="form-control" name="lastName" placeholder="Saisir votre nom" wire:model="nom">
                        @error('nom')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                        <label class="form-label">Prénoms <sup class="text-danger">*</sup></label>

                        <input type="text" class="form-control" name="fisrtName" placeholder="Saisir vos prénoms" wire:model="prenoms">
                        @error('prenoms')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                        <label class="form-label">Poste au sein du club<sup class="text-danger">*</sup></label>
                        <select class="form-control" name="" id="" wire:model="poste_id">
                            <option value="">Veuillez choisir le poste</option>
                            @foreach ($postes as $poste)
                            <option value="{{ $poste->id }}">{{ $poste->libelle }}</option>
                            @endforeach
                        </select>
                        @error('poste_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    @if ($this->poste_id == 25)
                    <div class="col-md-12 mb-4">
                        <label class="form-label">Précisez le poste au sein du club<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="poste" placeholder="Saisir votre poste" wire:model="poste">
                        @error('poste')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    @endif
                    <div class="col-md-12 mb-4">

                        <label class="form-label">Adresse <sup class="text-danger">*</sup></label>

                        <input type="text" class="form-control" placeholder="Saisir votre Adresse" wire:model="adresse">
                        @error('adresse')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                        <label class="form-label">Téléphone <sup class="text-danger">*</sup></label>
                        <div class="row">
                            <div class="col-md-2 mr-0">
                                @if ($this->pay_id == 12)

                                <input type="text" class="form-control col-md-2" placeholder="EX:00229" wire:model="indicatif">
                                @else
                                <select class="form-control" name="" id="indicatif" wire:model="indicatif">
                                    <option value="" selected>00254</option>
                                    @foreach ($paysIndicatifs as $paysIndicatif)
                                    <option value="{{ $paysIndicatif->indicatif }}">{{ $paysIndicatif->indicatif }}</option>
                                    @endforeach
                                </select>
                                @endif
                            </div>
                            <div class="col-md-10 ml-0">
                                <input type="tel" class="form-control col-md-2" placeholder="Saisir votre numero" wire:model="tel">
                            </div>
                        </div>
                        @error('tel')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                        <label class="form-label">E-mail <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" placeholder="Saisir votre mail" wire:model="email">
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
                                <option value="">Veuillez choisir le mode d'arrivée</option>
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
                            <label class="form-label">Date de retour <sup class="text-danger">*</sup></label>

                            <input type="date" id="date_depart" class="form-control" wire:model="date_depart">
                        @error('date_depart')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                            <label class="form-label">Mode d'hébergement <sup class="text-danger">*</sup></label>
                            <select class="form-control" name="" id="hebergement_id" wire:model="hebergement_id">
                                <option value="">Veuillez choisir le mode hébergement</option>
                                @foreach ($hebergements as $hebergement)
                                <option value="{{ $hebergement->id }}">{{ $hebergement->libelle }}</option>
                                @endforeach
                            </select>
                        @error('hebergement_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    @if ($this->hebergement_id == 2)

                    @else
                    <div class="col-md-12 mb-4">
                        <label class="form-label">Choisir l'hôtel <sup class="text-danger">*</sup></label>
                        <select class="form-control" name="" id="lieu_id" wire:model="lieu_id">
                            <option value="">Veuillez choisir un hôtel</option>
                            @foreach ($lieus as $lieu)
                            <option value="{{ $lieu->id }}">{{ $lieu->libelle }}</option>
                            @endforeach
                        </select>
                        @error('lieu_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                            <label class="form-label">Hébergement <sup class="text-danger">*</sup></label>
                            <select class="form-control" name="" id="tarif_id" wire:model="tarif_id">
                                <option value="">Veuillez choisir l'hébergement</option>
                                @foreach ($tarifs as $tarif)
                                @if ($tarif->place != 0)
                                <option value="{{ $tarif->id }}">{{ $tarif->libelle }} => Place disponible: {{ $tarif->place }}</option>
                                @endif
                                @endforeach
                            </select>
                        @error('tarif_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                        <label class="form-label">Comment? <sup class="text-danger">*</sup></label>
                        <select class="form-control" name="" id="optionHebergement_id" wire:model="optionHebergement_id">
                            <option value="">Simple ou Double</option>
                            @foreach ($optionHebergements as $optionHebergement)
                            <option value="{{ $optionHebergement->id }}">{{ $optionHebergement->libelle }} => {{ $optionHebergement->prix }} FCFA </option>
                            @endforeach
                        </select>
                    @error('optionHebergement_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    @if ($this->compagnon == 1)
                    <div class="col-md-12 mb-4">
                        <label class="form-label">Avec qui? <sup class="text-danger">*</sup></label>

                        <input type="text" id="" class="form-control" wire:model="compagnons">
                        @error('compagnons')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    @endif
                    @endif
                    <div class="col-md-12 mb-4">
                            <label class="form-label">Activités du samedi <sup class="text-danger">*</sup></label>
                            <select class="form-control" name="" id="activite_id" wire:model="activite_id">
                                <option value="">Veuillez choisir une activité</option>
                                @foreach ($activites as $activite)
                                    @if ($activite->obligatoire == 0)
                                        @if ($activite->prix == 0)
                                            @if ($activite->libelle =="Aucune")
                                            <option value="{{ $activite->id }}">{{ $activite->libelle}}</option>
                                            @else
                                            <option value="{{ $activite->id }}">{{ $activite->libelle}} => Gratuitement</option>
                                            @endif
                                        @else
                                        <option value="{{ $activite->id }}">{{ $activite->libelle}} => Payante</option>
                                        @endif
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
                                <option value="">Veuillez choisir un mode de paiement</option>
                                @foreach ($modepaiments as $modepaiment)
                                <option value="{{ $modepaiment->id }}">{{ $modepaiment->libelle }}</option>
                                @endforeach
                            </select>
                        @error('Mode_paiement_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    @if ($this->Mode_paiement_id == 1)
                    <div class="col-md-12 mb-4">
                        <label class="form-label">Reçu de Virement</label>

                        <input type="file" class="form-control" wire:model="piece">
                    @error('piece')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    @endif
                </div>
                @endif

                @if ($this->currentStep == 3)
                <div class="col-md-6 shadow">
                    <div class="col-md-12 etape">
                        <h5 class="text-center" >Etape 3 : Récapitulation de mes informations</h5>
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
                        @if ($this->poste_id == 25)
                        <p> <strong>Poste</strong>: {{ $this->poste}}</p>
                        @else
                        <p> <strong>Poste</strong>: {{ $this->posteInner->libelle }} </p>
                        @endif
                        @if ($this->pay_id == 12)
                        <p> <strong>Pays</strong>: {{ $this->pays}}</p>
                        <p> <strong>Club</strong>: {{ $this->club}}</p>
                        @else
                        <p> <strong>Pays</strong>: {{ $this->Dclub->pay->libelle}}</p>
                        <p> <strong>Club</strong>: {{ $this->Dclub->libelle}}</p>
                        @endif
                        <p> <strong>E-mail</strong>: {{ $this->email }} </p>
                        <p> <strong>Adresse</strong>: {{ $this->adresse }} </p>
                        <p> <strong>Télephone</strong>: {{ $this->indicatif.$this->tel }} </p>
                    </div>
                    <div class="col-md-12 mb-4">
                        <h6 class="text-center"> <strong>Informations relatives au séjour</strong> </h6>
                        <p> <strong>Mode d'arrivée</strong>: {{ $this->mode_arrivee->libelle }} </p>
                        <p> <strong>Date d'arrivée</strong>: {{ $this->date_arrivee }} </p>
                        <p> <strong>Date départ</strong>: {{ $this->date_depart }} </p>
                        @if ($this->hebergement_id == 2)
                        <p> <strong>Hébergement</strong>: {{ $this->Dhebergements->libelle }}</p>
                        @else
                        <p> <strong>Hôtel</strong>: {{ $this->lieux->libelle }}</p>
                        <p> <strong>Hébergement</strong>: {{ $this->Dtarifs->libelle }} => {{ $this->DoptionHebergements->prix }} FCFA</p>
                        @endif

                        @if ($this->Dactivites->prix == 0)
                        @if ($this->Dactivites->libelle == "Aucune")
                        <p> <strong>Activité</strong>: {{ $this->Dactivites->libelle}}</p>
                        @else
                        <p> <strong>Activité</strong>: {{ $this->Dactivites->libelle}} => Gratuitement</p>
                        @endif
                        @else
                        <p> <strong>Activité</strong>: {{ $this->Dactivites->libelle}} => Payante</p>
                        @endif
                        <p> <strong>Mode de paiement</strong>: {{ $this->Mode_paiement->libelle }} </p>
                    </div>
                    <div class="col-md-12 mb-4">
                        <h6 class="text-center"> <strong>Paiement</strong> </h6>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>N°</th>
                                <th>Libellé</th>
                                <th>Prix</th>
                              </tr>
                            </thead>
                            <tbody>

                            @foreach ($activites as $activite)
                            @if ($activite->obligatoire == 1)
                                <tr>

                                <td>1</td>
                                <td>{{ $activite->libelle}}</td>
                                <td>{{ $activite->prix}} FCFA</td>
                                </tr>
                            @endif
                            @endforeach
                              <tr>
                                @if ($this->hebergement_id != 2)
                                <td>3</td>
                                <td>{{ $this->lieux->libelle }} : {{ $this->Dtarifs->libelle }} => {{ $this->DoptionHebergements->libelle }}</td>
                                <td>{{ $this->DoptionHebergements->prix }} FCFA</td>
                                @endif
                              </tr>

                              <tr>
                                <td colspan="3">
                                <strong><h6 class="text-center">Total: {{ $this->montant_total }}</h6> </strong>
                                </td>
                              </tr>

                            </tbody>
                          </table>
                    </div>

                    <div class="col-md-12 mb-4">

                    </div>
                </div>
                @endif
            </div>
            <div class="row justify-content-center pt-4 ">
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
      @include('livewire.site.inscriptions.modal')


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



