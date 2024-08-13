<!-- Modal create user -->
<div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 50%;">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('settings.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">

                <div class="text-center modal-header">
                    <h3 class="w-100 modal-title">Crear de Usuario</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" title="Cerrar">
                    </button>
                </div>

                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="row mt-2">
                                    <div class="col">
                                        <input type="text" class="form-control" id="nombre" name="nombre"
                                            placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <input class="form-control" type="email-modal" name="email-modal" id="email2"
                                            placeholder="Correo Electronico">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="input-group form-group">
                                            {{-- <input mdInput type="password" class="form-control"
                                                placeholder="Contrase&ntilde;a" name="password_user" id="password_user"
                                                required [formControl]="formGroup.controls['password']"
                                                autocomplete="new-password" #password />
                                            <button type="button" class="btn btn-outline-primary showPassword">
                                                <i class="fas fa-eye"></i>
                                            </button> --}}
                                            <input id="password" name="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                 required autocomplete="new-password"
                                                placeholder="Contrase&ntilde;a">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2 pb-4">
                                    <div class="col">
                                        <div class="input-group form-group">
                                            {{-- <input type="password" class="form-control"
                                                placeholder="Validar Contrase&ntilde;a" required name="password_confirm"
                                                id="password_confirm" />
                                            <button type="button" class="btn btn-outline-primary showPassword">
                                                <i class="fas fa-eye"></i>
                                            </button> --}}
                                            {{-- <i class="fas fa-key fa-lg me-3 fa-fw"></i> --}}
                                            <input id="password-confirm" name="password-confirm" type="password" class="form-control"
                                                 required autocomplete="new-password"
                                                placeholder="Validar Contrase&ntilde;a">

                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row"><label>Rol</label></div> --}}

                                <div class="row mt-2 pb-4">
                                    <div class="col">
                                        <div class="input-group form-group">

                                            {{-- <select name="rol" name="rol" class="form-select">
                                                        <option value="">Seleccione...</option>
                                                        @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                        @endforeach
                                                    </select> --}}
                                            @foreach ($roles as $role)
                                                <label for="">
                                                    <div class="form-check">
                                                        <input type="checkbox" name="{{ $role->id }}"
                                                            id="{{ $role->id }}" class="mr-1">
                                                        <label class="form-check-label"
                                                            for="checkbox1">{{ $role->name }}</label>
                                                    </div>
                                                    <div class="my-2"></div> <!-- Add space here -->
                                                </label>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <label for="photo-modal">
                                            <div class="img__wrap border border-dark btn btn-outline-white d-flex justify-content-center">
                                                <img class="img-responsive" id="img_preview2"
                                                    src="{{ asset('images/users/user_profile.png') }}" height="190"
                                                    width="190">
                                            </div>
                                        </label>
                                    </div>

                                    <input type="file" name="photo-modal" id="photo-modal" accept="image/*"
                                        style="display: none;">
                                    @error('photo-modal')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="row mt-2">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    // Obtener referencia al input y a la imagen
    window.onload = function() {
        const $seleccionArchivos = document.querySelector("#photo-modal"),
            $imagenPrevisualizacion = document.querySelector("#img_preview2");

        // Escuchar cuando cambie
        $seleccionArchivos.addEventListener("change", () => {
            // Los archivos seleccionados, pueden ser muchos o uno
            const archivos = $seleccionArchivos.files;
            // Si no hay archivos salimos de la función y quitamos la imagen
            if (!archivos || !archivos.length) {
                $imagenPrevisualizacion.src = "";
                return;
            }
            // Ahora tomamos el primer archivo, el cual vamos a previsualizar
            const primerArchivo = archivos[0];
            // Lo convertimos a un objeto de tipo objectURL
            const objectURL = URL.createObjectURL(primerArchivo);
            // Y a la fuente de la imagen le ponemos el objectURL
            $imagenPrevisualizacion.src = objectURL;
        });
    }
</script>