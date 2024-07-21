<style>
    .rounded-border {
        border: 0.5px solid #BBF7DE;
        border-radius: 15px;
        border-collapse: separate;
        border-spacing: 0;
    }

    .rounded-border th,
    .rounded-border td {
        border: none;
        padding: 5px;
    }

    .rounded-border thead tr:first-child th:first-child {
        border-top-left-radius: 15px;
    }

    .rounded-border thead tr:first-child th:last-child {
        border-top-right-radius: 15px;
    }

    .rounded-border tbody tr:last-child td:first-child {
        border-bottom-left-radius: 15px;
    }

    .rounded-border tbody tr:last-child td:last-child {
        border-bottom-right-radius: 15px;
    }
</style>

<!-- CONTENIDO PRINCIPAL -->
<div class="overflow-hidden space">
    <div class="container">
        <div class="mb-4">
            <button type="button" class="th-btn btn-sm" data-bs-toggle="modal" data-bs-target="#nuevoUsuario"> <i class="bi bi-plus" style="font-size: 20px"></i> Agregar nuevo usuario</button>
        </div>
        <table class="rounded-border" id="tabla_usuarios">
            <thead style="background: #BBF7DE;">
                <tr>
                    <th class="text-center" scope="col">N°</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Perfil</th>
                    <th scope="col">Correo</th>
                    <th class="text-center" scope="col">Estado</th>
                    <th class="text-center" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody id="datos_usuarios">

                <!-- Llenado de datos con ajax javaScript -->

            </tbody>
        </table>

    </div>
</div>

<!-- MODAL NUEVO USUARIO -->
<div class="modal fade" id="nuevoUsuario" tabindex="-1" aria-labelledby="nuevoUsuarioLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title h4 w-100 text-center" id="nuevoUsuarioLabel">Nuevo usuario</h1>
                <button type="button" class="btn-close limpiar_formulario" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="form_nuevo_usuario" >

                <div class="modal-body">

                    <!-- INGRESO DE NOMBRE -->
                    <div class="form-group mb-2">
                        <label for="">Nombre completo (<span class="text-danger">*</span>)</label>
                        <input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control" placeholder="Ingrese el nombre completo">
                        <small class="text-danger" id="e_nombre_usuario"></small>
                    </div>

                    <!-- INGRESO DEL TELEFONO -->
                    <div class="form-group mb-2">
                        <label for="">Teléfono (<span class="text-danger">*</span>)</label>
                        <input type="text" name="telefono_usuario" id="telefono_usuario" class="form-control" placeholder="Ingrese el teléfono">
                        <small class="text-danger" id="e_telefono_usuario"></small>
                    </div>

                    <!-- INGRESO DEL PERFIL -->
                    <div class="form-group mb-2">
                        <label for="">Perfil (<span class="text-danger">*</span>)</label>
                        <select name="perfil_usuario" id="perfil_usuario">
                            <option value="">Seleccione</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Ayudante">Ayudante</option>
                            <option value="Cliente">Cliente</option>
                        </select>
                        <small class="text-danger" id="e_perfil_usuario"></small>
                    </div>

                    <!-- INGRESO DEL CORREO -->
                    <div class="form-group mb-2">
                        <label for="">Correo (<span class="text-danger">*</span>)</label>
                        <input type="email" name="correo_usuario" id="correo_usuario" placeholder="Ingrese el correo">
                        <small class="text-danger" id="e_correo_usuario"></small>
                    </div>

                    <!-- INGRESO DE LA CONTRASEÑA -->
                    <div class="form-group mt-2">
                        <label for="">Ingrese su contraseña (<span class="text-danger">*</span>)</label>
                        <input type="password" name="contrasena_usuario" id="contrasena_usuario" class="form-control" placeholder="Ingrese su contraseña">
                        <small class="text-danger" id="e_contrasena_usuario"></small>
                    </div>

                </div>

                <!-- BOTONES -->
                <div class="modal-footer justify-content-center">
                    <button type="button" class="th-btn btn-sm limpiar_formulario" data-bs-dismiss="modal" style="background: #F25252; color: white">Cancelar</button>
                    <button type="submit" id="btn_guardar_usuario" class="th-btn ms-2 btn-sm">Guardar</button>
                </div>

            </form>
        </div>
    </div>
</div>


<!-- MODAL EDITAR USUARIO -->
<div class="modal fade" id="modal_editar_usuario" tabindex="-1" aria-labelledby="modal_editar_usuarioLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title h4 w-100 text-center" id="nuevoUsuarioLabel">Editar usuario</h1>
                <button type="button" class="btn-close limpiar_formulario" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="form_actualizar_usuario" >

                <div class="modal-body">

                    <!-- EDITAR ID USUARIO -->
                     <input type="hidden" name="edit_id_usuario" id="edit_id_usuario">

                    <!-- INGRESO DE NOMBRE -->
                    <div class="form-group mb-2">
                        <label for="">Nombre completo (<span class="text-danger">*</span>)</label>
                        <input type="text" name="edit_nombre_usuario" id="edit_nombre_usuario" class="form-control" placeholder="Ingrese el nombre completo">
                        <small class="text-danger" id="e_edit_nombre_usuario"></small>
                    </div>

                    <!-- INGRESO DEL TELEFONO -->
                    <div class="form-group mb-2">
                        <label for="">Teléfono (<span class="text-danger">*</span>)</label>
                        <input type="text" name="edit_telefono_usuario" id="edit_telefono_usuario" class="form-control" placeholder="Ingrese el teléfono">
                        <small class="text-danger" id="e_edit_telefono_usuario"></small>
                    </div>

                    <!-- INGRESO DEL PERFIL -->
                    <div class="form-group mb-2">
                        <label for="">Perfil (<span class="text-danger">*</span>)</label>
                        <select name="edit_perfil_usuario" id="edit_perfil_usuario">
                            <option value="">Seleccione</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Ayudante">Ayudante</option>
                            <option value="Cliente">Cliente</option>
                        </select>
                        <small class="text-danger" id="e_edit_perfil_usuario"></small>
                    </div>

                    <!-- INGRESO DEL CORREO -->
                    <div class="form-group mb-2">
                        <label for="">Correo (<span class="text-danger">*</span>)</label>
                        <input type="email" name="edit_correo_usuario" id="edit_correo_usuario" placeholder="Ingrese el correo">
                        <small class="text-danger" id="e_edit_correo_usuario"></small>
                    </div>

                    <!-- INGRESO DE LA CONTRASEÑA -->
                    <div class="form-group mt-2">
                        <label for="">Ingrese su contraseña (<span class="text-danger">*</span>)</label>
                        <input type="password" name="edit_contrasena_usuario" id="edit_contrasena_usuario" class="form-control" placeholder="Ingrese la nueva contraseña">
                        <input type="hidden" name="contrasena_usuario_actual" id="contrasena_usuario_actual" class="form-control" >
                        <small class="text-danger" id="e_edit_contrasena_usuario"></small>
                    </div>

                </div>

                <!-- BOTONES -->
                <div class="modal-footer justify-content-center">
                    <button type="button" class="th-btn btn-sm limpiar_formulario" data-bs-dismiss="modal" style="background: #F25252; color: white">Cancelar</button>
                    <button type="submit" id="btn_actualizar_usuario" class="th-btn ms-2 btn-sm"> Actualizar</button>
                </div>

            </form>
        </div>
    </div>
</div>
