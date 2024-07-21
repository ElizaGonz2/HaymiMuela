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
            <button type="button" class="th-btn btn-sm" data-bs-toggle="modal" data-bs-target="#modal_sobre_nosotros"> <i class="bi bi-plus" style="font-size: 20px"></i> Agregar nuevo usuario</button>
        </div>
        <table class="rounded-border" id="tabla_sobre_nosotros">
            <thead style="background: #BBF7DE;">
                <tr>
                    <th class="text-center" scope="col">N°</th>
                    <th scope="col">Título</th>
                    <th class="text-center" scope="col">Imagen</th>
                    <th scope="col">Descripción</th>
                    <th class="text-center" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody id="datos_sobre_nosotros">

                <!-- Llenado de datos con ajax javaScript -->

            </tbody>
        </table>

    </div>
</div>

<!-- MODAL NUEVO SOBRE NOSOTROS -->
<div class="modal fade" id="modal_sobre_nosotros" tabindex="-1" aria-labelledby="modal_sobre_nosotrosLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title h4 w-100 text-center" id="modal_sobre_nosotrosLabel">Nuevo sobre nosotros</h1>
                <button type="button" class="btn-close limpiar_formulario" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="form_nuevo_sn" >

                <div class="modal-body">

                    <!-- INGRESO DE TITULO -->
                    <div class="form-group mb-2">
                        <label for="">Título (<span class="text-danger">*</span>)</label>
                        <input type="text" name="titulo_sn" id="titulo_sn" class="form-control" placeholder="Ingrese el título">
                        <small class="text-danger" id="e_titulo_sn"></small>
                    </div>

                    <!-- INGRESO DE IMAGEN -->
                    <div class="form-group mb-2">
                        <label for="">Imagen (<span class="text-danger">*</span>)</label>
                        <small>Tamaño: 600px x 600px</small>
                        <input type="file" name="imagen_sn" id="imagen_sn" class="form-control" accept="image/*">
                        <div class="text-center">
                            <img src="" id="previsualizar_img_sn" alt="" class="img img-fluid" width="400">
                        </div>
                        <small class="text-danger" id="e_imagen_sn"></small>
                    </div>

                    <!-- INGRESO DE LA DESCRIPCION -->
                    <div class="form-group mt-2">
                        <label for="">Descripción (<span class="text-danger">*</span>)</label>
                        <textarea name="descripcion_sn" id="descripcion_sn" placeholder="Ingrese la descripción"></textarea>
                        <small class="text-danger" id="e_descripcion_sn"></small>
                    </div>

                </div>

                <!-- BOTONES -->
                <div class="modal-footer justify-content-center">
                    <button type="button" class="th-btn btn-sm limpiar_formulario_sn" data-bs-dismiss="modal" style="background: #F25252; color: white">Cancelar</button>
                    <button type="submit" id="btn_guardar_sn" class="th-btn ms-2 btn-sm">Guardar</button>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- MODAL EDITAR SOBRE NOSOTROS -->
<div class="modal fade" id="modal_editar_nosotros" tabindex="-1" aria-labelledby="modal_sobre_nosotrosLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title h4 w-100 text-center" id="modal_sobre_nosotrosLabel">Editar sobre nosotros</h1>
                <button type="button" class="btn-close limpiar_formulario" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="form_actualizar_sn" >

                <div class="modal-body">

                    <!-- ID SOBRE NOSOTROS -->
                     <input type="hidden" name="edit_id_sobre_sn" id="edit_id_sobre_sn">

                    <!-- INGRESO DE TITULO -->
                    <div class="form-group mb-2">
                        <label for="">Título (<span class="text-danger">*</span>)</label>
                        <input type="text" name="edit_titulo_sn" id="edit_titulo_sn" class="form-control" placeholder="Ingrese el título">
                        <small class="text-danger" id="e_edit_titulo_sn"></small>
                    </div>

                    <!-- INGRESO DE IMAGEN -->
                    <div class="form-group mb-2">
                        <label for="">Imagen (<span class="text-danger">*</span>)</label>
                        <input type="file" name="edit_imagen_sn" id="edit_imagen_sn" class="form-control">
                        <div class="text-center mb-2 mt-2">
                            <img src="" id="previsualizar_img_sn_edit" alt="" width="250">
                        </div>
                        <input type="hidden" name="imagen_sn_actual" id="imagen_sn_actual">
                        <small class="text-danger" id="e_edit_imagen_sn"></small>
                    </div>

                    <!-- INGRESO DE LA DESCRIPCION -->
                    <div class="form-group mt-2">
                        <label for="">Descripción (<span class="text-danger">*</span>)</label>
                        <textarea name="edit_descripcion_sn" id="edit_descripcion_sn" placeholder="Ingrese la descripción"></textarea>
                        <small class="text-danger" id="e_edit_descripcion_sn"></small>
                    </div>

                </div>

                <!-- BOTONES -->
                <div class="modal-footer justify-content-center">
                    <button type="button" class="th-btn btn-sm limpiar_formulario_sn" data-bs-dismiss="modal" style="background: #F25252; color: white">Cancelar</button>
                    <button type="submit" id="btn_actualizar_sn" class="th-btn ms-2 btn-sm">Actualizar</button>
                </div>

            </form>
        </div>
    </div>
</div>
