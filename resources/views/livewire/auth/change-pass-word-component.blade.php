<div>
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="mb-4 text-center">
                            <img src="{{ asset('assets/site/assets/img/logo1.jpg') }}" width="100" height="100" alt="" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Changer mot de passe </h3>
                                        {{-- <p>Vous n'avez pas de compte ? <a href="{{route('register')}}">Inscription</a>
                                        </p> --}}
                                        @if (Session::has('message'))
                                            <div class="alert alert-success">{{Session::get('message')}}</div>
                                        @endif
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" wire:submit.prevent='ChangePassword'>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Votre adresse mail</label>
                                                <input type="email" class="form-control" id="inputEmailAddress" placeholder="Votre Email" required wire:model="email" autocomplete="off">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Ancien Mot de passe</label>
                                                <div class="input-group" id="show_hide_password">

                                                    @if ($this->passwordA)
                                                        @if ($this->vrai == 1)
                                                        <input type="password" class="form-control border-end-0" style="border: solid 1px green" id="inputChoosePassword" type="password" wire:model="passwordA"  placeholder="Ancien Mot de passe" required autocomplete="off"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                        @else
                                                        <input type="password" class="form-control border-end-0" style="border: solid 1px red" id="inputChoosePassword" type="password" wire:model="passwordA"  placeholder="Ancien Mot de passe" required autocomplete="off"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                        @endif
                                                    @else
                                                    <input type="password" class="form-control border-end-0" id="inputChoosePassword" type="password" wire:model="passwordA"  placeholder="Ancien Mot de passe" required> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Nouveau Mot de passe</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0"  id="inputChoosePassword" type="password" wire:model="passwordN" placeholder="Nouveau Mot de passe" required> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Confirmer Nouveau Mot de passe</label>
                                                <div class="input-group" id="show_hide_password">
                                                    @if ($this->passwordCN)
                                                        @if ($this->passwordN === $this->passwordCN)
                                                        <input type="password" class="form-control border-end-0" style="border: solid 1px green" id="inputChoosePassword" type="password" wire:model="passwordCN" placeholder="Confirmer Nouveau Mot de passe" required> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                        @else
                                                        <input type="password" class="form-control border-end-0" style="border: solid 1px red" id="inputChoosePassword" type="password" wire:model="passwordCN" placeholder="Confirmer Nouveau Mot de passe" required> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                        @endif
                                                    @else
                                                    <input type="password" class="form-control border-end-0" id="inputChoosePassword" type="password" wire:model="passwordCN" placeholder="Confirmer Nouveau Mot de passe" required> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6 text-end">
                                                <a href="{{ route('login') }}">Connexion</a>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Modifier</button>
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    </div>
