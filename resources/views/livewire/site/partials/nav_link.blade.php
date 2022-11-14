<div class="row mt-5">
        <h6 class="mb-0 text-uppercase text-center">Formulaire d'inscription</h6>
            <hr/>
        <div class="col-xl-9 mx-auto">
            @if (Session::has('message'))
            <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif
            <div class="card">
                <form wire:submit.prevent='storeinscription'>
                    <div class="row card-body">

                        <div class="col-md-12">
                            <fieldset class="reset">
                                <legend class="reset text-uppercase font-weight-bold">Informations Personnelles </legend>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label class="form-label">Nom</label>
                                                <input type="text" class="form-control" wire:model="nom" required />

                                                @error('nom')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom02" class="form-label">Prénoms</label>
                                                <input type="text" class="form-control" wire:model="prenoms" required />
                                                @error('prenoms')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom02" class="form-label">Fonction</label>
                                                <input type="text" class="form-control" wire:model="fonction" required />
                                                @error('fonction')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom02" class="form-label">Adresse</label>
                                                <input type="text" class="form-control" name="address" wire:model="adresse" required />
                                                @error('adresse')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom02" class="form-label">Téléphone</label>
                                                <input type="tel" class="form-control" wire:model="tel" required />
                                                @error('tel')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom02" class="form-label">E_mail</label>
                                                <input type="email" class="form-control" wire:model="email" required />
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Choisir le club</label>
                                        <select  class=" form-control" wire:model="club_id" id="club_id">
                                            <option value="">Veillez choisir le club</option>
                                            @foreach ($clubs as $club)
                                            <option value="{{ $club->id }}">{{ $club->libelle }}</option>
                                            @endforeach
                                        </select>
                                        @error('club_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset class="reset">
                                <legend class="reset text-uppercase font-weight-bold">Informations relatives au séjour</legend>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Choisir le Mode d'arrivé</label>
                                        <select  class="form-control" wire:model="mode_arrivee_id" id="mode_arrivee_id">
                                            <option value="">Veillez choisir le mode d'arrivé</option>
                                            @foreach ($mode_arrivee as $mode_arrive)
                                            <option value="{{ $mode_arrive->id }}">{{ $mode_arrive->libelle }}</option>
                                            @endforeach
                                        </select>
                                        @error('mode_arrivee_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom02" class="form-label">Date de depart</label>
                                                <input type="date" class="form-control" wire:model="date_depart" required />
                                                @error('date_depart')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label class="form-label">Choisir le Mode d'hebergement</label>
                                                <select  class="form-control" wire:model="hebergement_id" id="hebergement_id" wire:change="changeTarif">
                                                    <option value="">Veillez choisir le mode hebergement</option>
                                                    @foreach ($hebergements as $hebergement)
                                                    <option value="{{ $hebergement->id }}">{{ $hebergement->libelle }}</option>
                                                    @endforeach
                                                </select>
                                                @error('hebergement_id')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label class="form-label">Choisir le mode paiement</label>
                                                <select  class="form-control" wire:model="Mode_paiement_id" id="Mode_paiement_id">
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
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom02" class="form-label">Date Arrivée</label>
                                                <input type="date" class="form-control" wire:model="date_arrivee" required />
                                                @error('date_arrivee')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label class="form-label">Choisir l'hebergement</label>
                                                <select  class="form-control" wire:model="tarif_id" id="tarif_id">
                                                    <option value="">Veillez choisir l'hebergement</option>
                                                    @foreach ($tarifs as $tarif)
                                                    <option value="{{ $tarif->id }}">{{ $tarif->libelle }} => {{ $tarif->prix }} FCFA</option>
                                                    @endforeach
                                                </select>
                                                @error('tarif_id')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label class="form-label">Choisir Une activité</label>
                                                <select  class="form-control" wire:model="activite_id" id="activite_id">
                                                    <option value="">Veillez choisir une activité</option>
                                                    @foreach ($activites as $activite)
                                                    @if ($activite->obligatoire == 0)
                                                    <option value="{{ $activite->id }}">{{ $activite->libelle}} => {{ $activite->prix}} FCFA</option>
                                                    @endif
                                                    @endforeach
                                                </select>

                                                @error('activite_id') <span class="text-danger">
                                                    {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </fieldset>
                        </div>

                        <div class="col-md-12">
                            <fieldset class="reset">
                                <legend class="reset text-uppercase font-weight-bold">Détails du paiement </legend>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <h5 class="text-center">Activités ogbligatoires</h5>
                                            @foreach ($activites as $activite)
                                            @if ($activite->obligatoire == 1)
                                            {{-- @php
                                                $this->montant_total += $activite->prix;
                                            @endphp --}}
                                            <div class="col-md-12 mb-3">
                                                <h6>{{ $activite->libelle }}</h6> <span>{{ $activite->prix }} FCFA</span>
                                            </div>
                                            @endif
                                            @endforeach


                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <h5 class="text-center">Activités Facultatives</h5>
                                            @if ($this->activite_id)
                                            {{-- @php
                                            // dd('ok');
                                                $this->montant_total += $Dactivites->prix;
                                            @endphp --}}
                                            <div class="col-md-12 mb-3">
                                                <h6>{{ $Dactivites->libelle }}</h6> <span>{{ $Dactivites->prix }} FCFA</span>
                                            </div>
                                            @endif
                                            @if ($this->tarif_id)
                                            {{-- @php
                                                $this->montant_total += $Dtarifs->prix;
                                            @endphp --}}
                                            <div class="col-md-12 mb-3">
                                                <h6>{{ $Dtarifs->libelle }}</h6> <span>{{ $Dtarifs->prix }} FCFA</span>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3 text-center">
                                        <h5>Montant Total: {{ $this->montant_total }} FCFA</h5>
                                    </div>
                                </div>
                            </fieldset>
                        </div>


                        <div class="col-md-12 mt-5">
                            <button type="submit" class="btn btn-outline-primary btn-sm float-end">Ajouter</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
