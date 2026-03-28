@extends('loyouts.authLoyout.auth')

@section('auth_content')
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h2">Hoş geldiniz</h1>
                        <p class="lead">Devam etmek için giriş yapın</p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-3">
                                <form method="post" action="#">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label email" for="email">E-posta</label>
                                        <input class="form-control form-control-lg" id="email" type="email" name="email" placeholder="E-posta adresiniz" required autocomplete="username" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label password" for="password">Şifre</label>
                                        <input class="form-control form-control-lg" id="password" type="password" name="password" placeholder="Şifreniz" required autocomplete="current-password" />
                                    </div>
                                    <div>
                                        <div class="form-check align-items-center">
                                            <input id="remember" type="checkbox" class="form-check-input" name="remember">
                                            <label class="form-check-label text-small" for="remember">Beni hatırla</label>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mt-3">
                                        <button type="submit" class="btn btn-lg btn-primary">Giriş yap</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        <a href="{{ url('/') }}">Ana sayfa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
