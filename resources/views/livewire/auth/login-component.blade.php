<div>
<div class="wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="mb-4 text-center">
                        <img src="{{ asset('assets/site/assets/img/logo1.jpg') }}" width="180" alt="" />
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Connéxion</h3>
                                    <p>Vous n'avez pas de compte ? <a href="{{route('register')}}">Inscription</a>
                                    </p>
                                </div>
                                <div class="form-body">
                                    <form class="row g-3" method="post" action="{{route('login')}}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmailAddress" name="email" placeholder="Votre Email" :value="old('email')" required autofocus >
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Mot de passe</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" class="form-control border-end-0" id="inputChoosePassword" type="password" name="password" placeholder="mot de passe" required autocomplete="current-password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Souvinir de moi</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                                            @endif
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Connéxion</button>
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
