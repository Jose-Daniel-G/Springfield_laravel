<!-- Modal BUSCAR -->
<div class="modal fade" id="modalShowUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <input class="form-control" type="email2" name="email2" id="email2"
                                            placeholder="Correo Electronico">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="input-group form-group">
                                            <input mdInput type="password" class="form-control"
                                                placeholder="Contrase&ntilde;a" name="password_user" id="password_user"
                                                required [formControl]="formGroup.controls['password']"
                                                autocomplete="new-password" #password />
                                            <button type="button" class="btn btn-outline-primary showPassword">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2 pb-4">
                                    <div class="col">
                                        <div class="input-group form-group">
                                            <input type="password" class="form-control"
                                                placeholder="Validar Contrase&ntilde;a" required name="password_confirm"
                                                id="password_confirm" />
                                            <button type="button" class="btn btn-outline-primary showPassword">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <label for="photo2">
                                            <div class="img__wrap border border-dark btn btn-outline-white d-flex justify-content-center">
                                                <img class="img-responsive" id="img_preview2"
                                                    src="{{ asset('images/users/user_profile.png') }}" height="190"
                                                    width="190">
                                            </div>
                                        </label>
                                    </div>

                                    <input type="file" name="photo2" id="photo2" accept="image/*" style="display: none;" >
                                    @error('photo2')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="row"><label>Rol</label></div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <select name="rol" name="rol" class="form-select">
                                            <option value="">Seleccione...</option>
                                            <!-- <option value="1">Administrador</option> -->
                                            <option value="2">Lector</option>
                                            <option value="3">Columnista</option>
                                        </select>
                                    </div>

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