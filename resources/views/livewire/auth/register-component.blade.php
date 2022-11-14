<div>
<!--wrapper-->
<div class="wrapper">
    <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                <div class="col mx-auto">
                    <div class="my-4 text-center">
                        <img src="{{ asset('assets/site/assets/img/logo1.jpg') }}" width="180" alt="" />
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Inscription</h3>
                                    <p>Vous avez déjà un compte? <a href="{{route('login')}}">Connéxion</a>
                                    </p>
                                </div>
                                <div class="form-body">
                                    <form class="row g-3" method="post" action="{{route('register')}}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="inputFirstName" class="form-label">Votre Nom</label>
                                            <input type="text" class="form-control" id="inputFirstName" name="name" placeholder="Entrer votre nom" value="{{old('name')}}" required autofocus autocomplete="name">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Votre adresse mail</label>
                                            <input type="email" class="form-control" id="inputEmailAddress" name="email" placeholder="Entrer votre Email" required value="{{old('email')}}">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Mot de passe</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" class="form-control border-end-0" id="inputChoosePassword" name="password" placeholder="mot de passe" required autocomplete="new-password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Confirmer mot de passe</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" class="form-control border-end-0" id="inputChoosePassword" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">J'accepte les termes & Politique.</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Inscription</button>
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
<!--end wrapper-->
</div>
