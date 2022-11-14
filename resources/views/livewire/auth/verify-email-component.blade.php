
<div>
    <!--wrapper-->
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                @if (session('status') == 'verification-link-sent')
                <div>
                    <p>
                        Un nouveau lien de vérification a été envoyé à l'adresse e-mail que vous avez fournie lors de l'inscription.
                    </p>
                </div>
                @endif
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col mx-auto">
                        <div class="my-4 text-center">
                            <img src="{{ asset('assets/site/assets/img/logo1.jpg') }}" width="180" alt="" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3>Verification</h3>
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" method="post" action="{{ route('verification.send') }}">
                                            @csrf
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Resend Verification Email</button>
                                                </div>
                                            </div>
                                        </form>
                                        <form class="row g-3" method="post" action="{{ route('logout') }}"">
                                            @csrf
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Log Out</button>
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


