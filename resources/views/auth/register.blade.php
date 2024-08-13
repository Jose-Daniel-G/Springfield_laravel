@extends('layouts.app')
<style>
    .responsive-img {
      max-width: 90%;
      height: auto;
    }
    
  </style>
@section('content')
    {{-- <link rel="stylesheet" href="css/signup.css"> --}}
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-11 mt-4">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1 m-0">
                                <p class="text-center h1 fw-bold mx-1 mx-md-4">Inscribirse</p>
                                <form class="mx-1 mx-md-4" method="POST" action="{{ route('register') }}" autocomplete="off">
                                    @csrf
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            <label class="form-label" for="name">Nombre</label>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            <label class="form-label" for="email">Correo Electrónico</label>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            <label class="form-label" for="password">Contraseña</label>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            <label class="form-label" for="password_confirmation">Confirmar Contraseña</label>
                                        </div>
                                    </div>
                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                        <label class="form-check-label" for="form2Example3">
                                            Acepto todas las declaraciones en <a href="#!">Términos de servicio</a>
                                        </label>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                            <div class="d-flex justify-content-end pt-3">
                                                <div class="d-flex justify-content-end pt-3">
                                                    <button type="reset" class="btn btn-light btn-lg">Reset</button>
                                                    <button type="submit" class="btn btn-warning btn-lg ms-2">Registrarme</button>
                                                    @if (Route::has('login'))
                                                        <a style="color: #393f81;" class="p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 align-items-center order-1 order-lg-2">
                                <img src="images/team.png" class="responsive-img rounded-3 " alt="Sample image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
