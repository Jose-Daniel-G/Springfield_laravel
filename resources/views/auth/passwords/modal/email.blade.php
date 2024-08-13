<!-- Modal -->
<div class="modal top fade" id="modalRecoverPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-mdb-backdrop="true" data-mdb-keyboard="true">
    {{-- <div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true"> --}}

    <div class="modal-dialog">
        <div class="modal-content text-center border border-white">
            <div class="modal-header h5 text-white bg-dark justify-content-center">
                Restablecimiento de contraseña
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            {{-- <form method="POST" action="{{ route('contactanos.store') }}"> --}}
                <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="modal-body px-5">
                    <p class="py-2">
                        Ingrese su dirección de correo electrónico y le enviaremos un correo electrónico con
                        instrucciones para restablecer su contraseña.
                    </p>
                    <div class="form-outline">
                        <input type="email" name="email_link" id="email_link">
                        {{-- <input id="email_link" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email_link" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}
                        <label class="form-label" for="typeEmail">Email</label>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-dark w-100">
                        {{ __('Enviar enlace') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
