@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <p class="text-center h1 fw-bold mb-4">Inscribirse</p>
                                <form method="POST" action="{{ route('register') }}" autocomplete="off">
                                    @csrf
                                    <div class="mb-4">
                                        
                                        <div class="form-outline">
                                            <label class="form-label" for="name"><i class="fas fa-user fa-lg me-3 fa-fw"></i>Nombre</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="form-outline">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <label class="form-label" for="email">Correo Electrónico</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="form-outline">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <label class="form-label" for="password">Contraseña</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline">
                                            <label class="form-label" for="password_confirmation">Confirmar Contraseña</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                        <label class="form-check-label" for="form2Example3c">
                                            Acepto todas las declaraciones en <a href="#!">Términos de servicio</a>
                                        </label>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="reset" class="btn btn-light btn-lg">Reset</button>
                                        <button type="submit" class="btn btn-warning btn-lg">Registrarme</button>
                                    </div>
                                    @if (Route::has('login'))
                                        <div class="text-center mt-3">
                                            <a href="{{ route('login') }}" style="color: #393f81;">{{ __('Login') }}</a>
                                        </div>
                                    @endif
                                </form>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img src="{{ asset('images/team.png') }}" class="responsive-img rounded-3" alt="Sample image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
