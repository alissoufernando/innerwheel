<div>

<!-- wrapper -->
<div class="wrapper">
    <div class="authentication-forgot d-flex align-items-center justify-content-center">
        <div class="card forgot-box">
            <div class="card-body">
                @if (session('status'))
                <div>{{session('status')}}</div>
                @endif
                <div class="p-4 rounded  border">
                    <div class="text-center">
                        <img src="{{ asset('assets/site/assets/img/logo1.jpg') }}" width="120" alt="" />
                    </div>
                    <h4 class="mt-5 font-weight-bold">Mot de passe oublié?</h4>
                    <p class="text-muted"> Aucun problème. Indiquez-nous simplement votre adresse e-mail et nous vous enverrons par e-mail un lien de réinitialisation de mot de passe qui vous permettra d'en choisir un nouveau.
                    </p>
                    <form method="post" action="{{ route('password.email') }}">
                    @csrf
                    <div class="my-4">
                        <label class="form-label">Votre adresse mail</label>
                        <input type="email" class="form-control form-control-lg" name="email" placeholder="Votre adresse mail" :value="old('email')" required autofocus />
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                         <a href="{{ route('login') }}" class="btn btn-light btn-lg"><i class='bx bx-arrow-back me-1'></i>Connéxion</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end wrapper -->
</div>
