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
            <button type="button" class="th-btn btn-sm" data-bs-toggle="modal" data-bs-target="#modalNuevaCita"> <i class="bi bi-plus" style="font-size: 20px"></i> Agregar nueva cita</button>
        </div>
        <table class="rounded-border" id="tabla_citas">
            <thead style="background: #BBF7DE;">
                <tr>
                    <th class="text-center" scope="col">N°</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Asunto</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th class="text-center" scope="col">Estado</th>
                    <th class="text-center" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody id="datos_citas">

                <!-- Llenado de datos con ajax javaScript -->

            </tbody>
        </table>

    </div>
</div>

<!-- MODAL NUEVA CITA -->
<div class="modal fade" id="modalNuevaCita" tabindex="-1" aria-labelledby="modalNuevaCitaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title h4 w-100 text-center" id="modalNuevaCitaLabel">Nueva cita</h1>
                <button type="button" class="btn-close limpiar_formulario" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="form_nueva_cita">

                <div class="modal-body">

                    <!-- INGRESO DE NOMBRE -->
                    <div class="form-group mb-2">
                        <label for="">Nombre completo (<span class="text-danger">*</span>)</label>
                        <input type="text" name="nombre_cita" id="nombre_cita" class="form-control" placeholder="Ingrese el nombre completo">
                        <small class="text-danger" id="e_nombre_cita"></small>
                    </div>

                    <!-- INGRESO DE CORREO -->
                    <div class="form-group mb-2">
                        <label for="">Correo (<span class="text-danger">*</span>)</label>
                        <input type="text" name="correo_cita" id="correo_cita" class="form-control" placeholder="Ingrese el correo">
                        <small class="text-danger" id="e_correo_cita"></small>
                    </div>

                    <!-- INGRESO DEL TELEFONO -->
                    <div class="form-group mb-2">
                        <label for="">Teléfono (<span class="text-danger">*</span>)</label>
                        <input type="text" name="telefono_cita" id="telefono_cita" class="form-control" placeholder="Ingrese el teléfono">
                        <small class="text-danger" id="e_telefono_cita"></small>
                    </div>

                    <!-- INGRESO DEL ASUNTO -->
                    <div class="form-group mb-2">
                        <label for="">Asunto (<span class="text-danger">*</span>)</label>
                        <select name="asunto_cita" id="asunto_cita">
                            <option value="">Seleccione</option>
                            <option value="limpieza">Limpieza Dental</option>
                            <option value="revision">Revisión General</option>
                            <option value="ortodoncia">Consulta de Ortodoncia</option>
                            <option value="blanqueamiento">Blanqueamiento Dental</option>
                            <option value="implante">Implante Dental</option>
                            <option value="endodoncia">Endodoncia</option>
                            <option value="emergencia">Emergencia Dental</option>
                            <option value="otro">Otro</option>
                        </select>
                        <small class="text-danger" id="e_asunto_cita"></small>
                    </div>

                    <!-- INGRESO DE LA FECHA -->
                    <div class="form-group mb-2">
                        <label for="">Fecha (<span class="text-danger">*</span>)</label>
                        <input type="date" name="fecha_cita" id="fecha_cita">
                        <small class="text-danger" id="e_fecha_cita"></small>
                    </div>

                    <!-- INGRESO DE LA HORA -->
                    <div class="form-group mt-2">
                        <label for="">Hora (<span class="text-danger">*</span>)</label>
                        <input type="time" name="hora_cita" id="hora_cita" class="form-control">
                        <small class="text-danger" id="e_hora_cita"></small>
                    </div>

                </div>

                <!-- BOTONES -->
                <div class="modal-footer justify-content-center">
                    <button type="button" class="th-btn btn-sm limpiar_formulario_cita" data-bs-dismiss="modal" style="background: #F25252; color: white">Cancelar</button>
                    <button type="submit" id="btn_guardar_cita" class="th-btn ms-2 btn-sm">Guardar</button>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- MODAL EDITAR CITA -->
<div class="modal fade" id="modal_editar_cita" tabindex="-1" aria-labelledby="modal_editar_citaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title h4 w-100 text-center" id="modalNuevaCitaLabel">Editar cita</h1>
                <button type="button" class="btn-close limpiar_formulario" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="form_editar_cita">

                <div class="modal-body">

                    <!-- ID CITA -->
                    <input type="hidden" name="edit_id_cita" id="edit_id_cita">

                    <!-- INGRESO DE NOMBRE -->
                    <div class="form-group mb-2">
                        <label for="">Nombre completo (<span class="text-danger">*</span>)</label>
                        <input type="text" name="edit_nombre_cita" id="edit_nombre_cita" class="form-control" placeholder="Ingrese el nombre completo">
                        <small class="text-danger" id="e_edit_nombre_cita"></small>
                    </div>

                    <!-- INGRESO DE CORREO -->
                    <div class="form-group mb-2">
                        <label for="">Correo (<span class="text-danger">*</span>)</label>
                        <input type="text" name="edit_correo_cita" id="edit_correo_cita" class="form-control" placeholder="Ingrese el correo">
                        <small class="text-danger" id="e_edit_correo_cita"></small>
                    </div>

                    <!-- INGRESO DEL TELEFONO -->
                    <div class="form-group mb-2">
                        <label for="">Teléfono (<span class="text-danger">*</span>)</label>
                        <input type="text" name="edit_telefono_cita" id="edit_telefono_cita" class="form-control" placeholder="Ingrese el teléfono">
                        <small class="text-danger" id="e_edit_telefono_cita"></small>
                    </div>

                    <!-- INGRESO DEL ASUNTO -->
                    <div class="form-group mb-2">
                        <label for="">Asunto (<span class="text-danger">*</span>)</label>
                        <select name="edit_asunto_cita" id="edit_asunto_cita">
                            <option value="">Seleccione</option>
                            <option value="limpieza">Limpieza Dental</option>
                            <option value="revision">Revisión General</option>
                            <option value="ortodoncia">Consulta de Ortodoncia</option>
                            <option value="blanqueamiento">Blanqueamiento Dental</option>
                            <option value="implante">Implante Dental</option>
                            <option value="endodoncia">Endodoncia</option>
                            <option value="emergencia">Emergencia Dental</option>
                            <option value="otro">Otro</option>
                        </select>
                        <small class="text-danger" id="e_edit_asunto_cita"></small>
                    </div>

                    <!-- INGRESO DE LA FECHA -->
                    <div class="form-group mb-2">
                        <label for="">Fecha (<span class="text-danger">*</span>)</label>
                        <input type="date" name="edit_fecha_cita" id="edit_fecha_cita">
                        <small class="text-danger" id="e_edit_fecha_cita"></small>
                    </div>

                    <!-- INGRESO DE LA HORA -->
                    <div class="form-group mt-2">
                        <label for="">Hora (<span class="text-danger">*</span>)</label>
                        <input type="time" name="edit_hora_cita" id="edit_hora_cita" class="form-control">
                        <small class="text-danger" id="e_edit_hora_cita"></small>
                    </div>

                </div>

                <!-- BOTONES -->
                <div class="modal-footer justify-content-center">
                    <button type="button" class="th-btn btn-sm limpiar_formulario_cita" data-bs-dismiss="modal" style="background: #F25252; color: white">Cancelar</button>
                    <button type="submit" id="btn_actualizar_cita" class="th-btn ms-2 btn-sm">Actualizar</button>
                </div>

            </form>
        </div>
    </div>
</div>
