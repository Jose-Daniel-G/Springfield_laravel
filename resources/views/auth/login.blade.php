@extends('layouts.app')

@section('content')
<br>
<br>
<br>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-xl-7 align-items-center order-1 order-lg-1">
                                {{-- <img src="images/team.png" class="img-fluid rounded-3" alt="Sample image"> --}}
                                <img src="images/background-new.png" class="card-img " alt="Sample image">

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-2">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Ingresar</p>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-outline">
                                        <input id="email" type="email"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus>
                                        <label for="email"
                                            class="form-label text-md-end">{{ __('Email Address') }}</label>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-outline">
                                        <input id="password" type="password"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="password" class="form-label text-md-end">{{ __('Password') }}</label>

                                    </div>

                                    <div class="pt-1">
                                        <button type="submit" class="btn btn-dark btn-lg btn-block">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </form>

                                    @if (Route::has('password.request'))
                                    {{-- <a class="small text-muted" data-bs-toggle="modal"
                                        data-bs-target="#modalRecoverPassword">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @include('auth.passwords.modal.email') --}}
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">No tienes cuenta?
                                        @if (Route::has('register'))
                                            <a style="color: #393f81;" href="{{ route('register') }}">Registrate</a>
                                            {{-- <a style="color: #393f81;" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
                                        @endif
                                    </p>
                                    <a href="#!" class="small text-muted">Teminos de uso.</a>
                                    <a href="#!" class="small text-muted">Politicas de privacidad</a>

                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer fixed-bottom ">
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between  px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © <?= date("Y"); ?>. Todos los derechos reservados.
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <!-- Right -->
        </div>
    </footer>
@endsection
