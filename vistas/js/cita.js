$(document).ready(function() {
    /* ===========================================
    GUARDANDO CITA DESDE EL PANEL DE CONTROL
    =========================================== */
    
    $("#btn_guardar_cita").click(function(e){
    
        e.preventDefault();
        
        let nombre = $('#nombre_cita').val().trim();
        let correo = $('#correo_cita').val().trim();
        let telefono = $('#telefono_cita').val().trim();
        let asunto = $('#asunto_cita').val();
        let fecha = $('#fecha_cita').val().trim();
        let hora = $('#hora_cita').val().trim();
    
        let isValid = true;
    
        if (nombre === '') {
            $('#e_nombre_cita').text('Por favor, ingrese el nombre completo').addClass('text-danger');
            isValid = false;
        } else if (!/^[a-zA-ZÀ-ÿ\s]+$/.test(nombre)) {
            $('#e_nombre_cita').text('El nombre solo debe contener letras y espacios').addClass('text-danger');
            isValid = false;
        } else {
            $('#e_nombre_cita').text('').removeClass('text-danger');
        }

        if (correo && !isValidEmail(correo)) {
            $('#e_correo_cita').text('El correo electrónico ingresado no es válido').addClass('text-danger');
            isValid = false;
        } else {
            $('#e_correo_cita').text('').removeClass('text-danger');
        }
    
        if (telefono === '') {
            $('#e_telefono_cita').text('Por favor, ingrese el teléfono').addClass('text-danger');
            isValid = false;
        } else if (!/^\d+$/.test(telefono)) {
            $('#e_telefono_cita').text('El teléfono debe contener solo números').addClass('text-danger');
            isValid = false;
        } else {
            $('#e_telefono_cita').text('').removeClass('text-danger');
        }
    
        if (asunto === '' || asunto === null) {
            $('#e_asunto_cita').text('Por favor, seleccione un asunto').addClass('text-danger');
            isValid = false;
        } else {
            $('#e_asunto_cita').text('').removeClass('text-danger');
        }
    
        if (fecha === '') {
            $('#e_fecha_cita').text('Por favor, ingrese la fecha').addClass('text-danger');
            isValid = false;
        } else {
            $('#e_fecha_cita').text('').removeClass('text-danger');
        }

        if (hora === '') {
            $('#e_hora_cita').text('Por favor, ingrese la hora').addClass('text-danger');
            isValid = false;
        } else {
            $('#e_hora_cita').text('').removeClass('text-danger');
        }


        if (isValid) {
    
            let datos = new FormData();

            datos.append("nombre_cita", nombre);
            datos.append("correo_cita", correo);
            datos.append("telefono_cita", telefono);
            datos.append("asunto_cita", asunto);
            datos.append("fecha_cita", fecha);
            datos.append("hora_cita", hora);
    
            $.ajax({
                url: "ajax/Cita.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success: function (respuesta) {
    
                    var res = JSON.parse(respuesta);
    
                    if (res.estado === "success") {
    
                        Swal.fire({
                            title: "¡Correcto!",
                            text: `${res.mensaje}`,
                            icon: "success",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Refresca la página después de cerrar la alerta
                                location.reload();
                            }
                        });
    
                        $('#form_nueva_cita')[0].reset();
    
                        $("#modalNuevaCita").modal("hide");

    
                        mostrarCitas();
    
                    } else {
    
                        Swal.fire({
                            title: "¡Aviso!",
                            text: `${res.mensaje}`,
                            icon: "error",
                          }).then((result) => {
                            if (result.isConfirmed) {
                                // Refresca la página después de cerrar la alerta
                                location.reload();
                            }
                        });
    
                    }
    
                },
    
                error: function (xhr, status, error) {
        
                    console.error(xhr);
                    console.error(status);
                    console.error(error);
        
                }
    
            })
    
        }
    
    })

    /* ===========================================
    REALIZAR UNA CITA DESDE LA PAGINA PRINCIPAL
    =========================================== */

    $("#btn_guardar_cita_cliente").click(function(e){

        e.preventDefault();

        let nombre = $('#ing_nombre_cita').val().trim();
        let correo = $('#ing_correo_cita').val().trim();
        let telefono = $('#ing_telefono_cita').val().trim();
        let asunto = $('#ing_asunto_cita').val();
        let fecha = $('#ing_fecha_cita').val().trim();
        let hora = $('#ing_hora_cita').val().trim();

        let isValid = true;
    
        if (nombre === '') {
            $('#ec_nombre_cita').text('Por favor, ingrese el nombre completo').addClass('text-danger');
            isValid = false;
        } else if (!/^[a-zA-ZÀ-ÿ\s]+$/.test(nombre)) {
            $('#ec_nombre_cita').text('El nombre solo debe contener letras y espacios').addClass('text-danger');
            isValid = false;
        } else {
            $('#ec_nombre_cita').text('').removeClass('text-danger');
        }

        if (correo && !isValidEmail(correo)) {
            $('#ec_correo_cita').text('El correo electrónico ingresado no es válido').addClass('text-danger');
            isValid = false;
        }else if(correo == ''){
            $('#ec_correo_cita').text('El campo correo no debe ir vacio').addClass('text-danger');
            isValid = false;
        } else {
            $('#ec_correo_cita').text('').removeClass('text-danger');
        }
    
        if (telefono === '') {
            $('#ec_telefono_cita').text('Por favor, ingrese el teléfono').addClass('text-danger');
            isValid = false;
        } else if (!/^\d+$/.test(telefono)) {
            $('#ec_telefono_cita').text('El teléfono debe contener solo números').addClass('text-danger');
            isValid = false;
        } else {
            $('#ec_telefono_cita').text('').removeClass('text-danger');
        }
    
        if (asunto === '' || asunto === null) {
            $('#ec_asunto_cita').text('Por favor, seleccione un asunto').addClass('text-danger');
            isValid = false;
        } else {
            $('#ec_asunto_cita').text('').removeClass('text-danger');
        }
    
        if (fecha === '') {
            $('#ec_fecha_cita').text('Por favor, ingrese la fecha').addClass('text-danger');
            isValid = false;
        } else {
            $('#ec_fecha_cita').text('').removeClass('text-danger');
        }

        if (hora === '') {
            $('#ec_hora_cita').text('Por favor, ingrese la hora').addClass('text-danger');
            isValid = false;
        } else {
            $('#ec_hora_cita').text('').removeClass('text-danger');
        }

        if (isValid) {
    
            let datos = new FormData();

            datos.append("nombre_cita", nombre);
            datos.append("correo_cita", correo);
            datos.append("telefono_cita", telefono);
            datos.append("asunto_cita", asunto);
            datos.append("fecha_cita", fecha);
            datos.append("hora_cita", hora);
    
            $.ajax({
                url: "ajax/Cita.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success: function (respuesta) {
    
                    var res = JSON.parse(respuesta);
    
                    if (res.estado === "success") {
    
                        Swal.fire({
                            title: "¡Correcto!",
                            text: `${res.mensaje}`,
                            icon: "success",
                        })
    
                        $('#form_cita_cliente')[0].reset();
    
                        /* $("#modalNuevaCita").modal("hide"); */

    
                        mostrarCitas();
    
                    } else {
    
                        Swal.fire({
                            title: "¡Aviso!",
                            text: `${res.mensaje}`,
                            icon: "error",
                          })
    
                    }
    
                },
    
                error: function (xhr, status, error) {
        
                    console.error(xhr);
                    console.error(status);
                    console.error(error);
        
                }
    
            })
    
        }


    })

    
    /* ===========================================
    ACTIVAR CITA
    =========================================== */
    
    $("#tabla_citas").on("click", ".btnActivar", function(e){
    
        e.preventDefault();
    
        let idCita = $(this).attr("idCita");
    
        let estadoCita = $(this).attr("estadoCita");
    
        let datos = new FormData();
    
        datos.append("activarId", idCita)
        datos.append("activarCita", estadoCita)

        $.ajax({
    
            url: "ajax/Cita.ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            success: function (respuesta) {
    
    
    
            }
    
        });
    
        if(estadoCita == 0){
    
            $(this).attr("estadoCita", 1);
    
            $(this).html("Pendiente");
    
            $(this).css({
                "background": "#FF4D4D"
            });
    
        }else{
    
            $(this).attr("estadoCita", 0);
    
            $(this).html("Visto");
    
            $(this).css({
                "background": "#04CE78"
            });
    
        }
    
    
    })
    
    /* ===========================================
    EDITAR CITA
    =========================================== */
    
    $("#tabla_citas").on("click", ".btnEditarCita", function (e){
    
        e.preventDefault();
    
        let idCita = $(this).attr("idCita");
    
        let datos = new FormData();
    
        datos.append("idCita", idCita);
    
        $.ajax({
            url: "ajax/Cita.ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (cita) {
    
               $("#edit_id_cita").val(cita["id_cita"]); 
               $("#edit_nombre_cita").val(cita["nombre_cita"]); 
               $("#edit_correo_cita").val(cita["correo_cita"]); 
               $("#edit_telefono_cita").val(cita["telefono_cita"]); 
               $("#edit_asunto_cita").val(cita["asunto_cita"]); 
               $("#edit_fecha_cita").val(cita["fecha_cita"]); 
               $("#edit_hora_cita").val(cita["hora_cita"]); 
    
            }
        })
    
    
    })
    
    /* ===========================================
    ACTUALIZAR CITA
    =========================================== */
    
    $("#btn_actualizar_cita").click(function(e){
    
        e.preventDefault();
    
        let isValid = true;
    
        let edit_id_cita = $("#edit_id_cita").val();
        let edit_nombre_cita = $("#edit_nombre_cita").val();
        let edit_correo_cita = $("#edit_correo_cita").val();
        let edit_telefono_cita = $("#edit_telefono_cita").val();
        let edit_asunto_cita = $("#edit_asunto_cita").val();
        let edit_fecha_cita = $("#edit_fecha_cita").val();
        let edit_hora_cita = $("#edit_hora_cita").val();
    
        if (edit_nombre_cita === '') {
            $('#e_edit_nombre_cita').text('Por favor, ingrese el nombre completo').addClass('text-danger');
            isValid = false;
        } else if (!/^[a-zA-ZÀ-ÿ\s]+$/.test(edit_nombre_cita)) {
            $('#e_edit_nombre_cita').text('El nombre solo debe contener letras y espacios').addClass('text-danger');
            isValid = false;
        } else {
            $('#e_edit_nombre_cita').text('').removeClass('text-danger');
        }

        if (edit_correo_cita && !isValidEmail(edit_correo_cita)) {
            $('#e_edit_correo_cita').text('El correo electrónico ingresado no es válido').addClass('text-danger');
            isValid = false;
        } else {
            $('#e_edit_correo_cita').text('').removeClass('text-danger');
        }
    
        if (edit_telefono_cita === '') {
            $('#e_edit_telefono_cita').text('Por favor, ingrese el teléfono').addClass('text-danger');
            isValid = false;
        } else if (!/^\d+$/.test(edit_telefono_cita)) {
            $('#e_edit_telefono_cita').text('El teléfono debe contener solo números').addClass('text-danger');
            isValid = false;
        } else {
            $('#e_edit_telefono_cita').text('').removeClass('text-danger');
        }
    
        if (edit_asunto_cita === '' || edit_asunto_cita === null) {
            $('#e_edit_asunto_cita').text('Por favor, seleccione un asunto').addClass('text-danger');
            isValid = false;
        } else {
            $('#e_edit_asunto_cita').text('').removeClass('text-danger');
        }
    
        if (edit_fecha_cita === '') {
            $('#e_edit_fecha_cita').text('Por favor, ingrese la fecha').addClass('text-danger');
            isValid = false;
        } else {
            $('#e_edit_fecha_cita').text('').removeClass('text-danger');
        }

        if (edit_hora_cita === '') {
            $('#e_edit_hora_cita').text('Por favor, ingrese la hora').addClass('text-danger');
            isValid = false;
        } else {
            $('#e_edit_hora_cita').text('').removeClass('text-danger');
        }
    
        if(isValid){
    
            let datos = new FormData();
    
            datos.append("edit_id_cita", edit_id_cita);
            datos.append("edit_nombre_cita", edit_nombre_cita);
            datos.append("edit_correo_cita", edit_correo_cita);
            datos.append("edit_telefono_cita", edit_telefono_cita);
            datos.append("edit_asunto_cita", edit_asunto_cita);
            datos.append("edit_fecha_cita", edit_fecha_cita);
            datos.append("edit_hora_cita", edit_hora_cita);
    
            $.ajax({
                url: "ajax/Cita.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success: function (respuesta) {
    
                    var res = JSON.parse(respuesta);
    
                    if (res.estado === "success") {
    
                        Swal.fire({
                            title: "¡Correcto!",
                            text: `${res.mensaje}`,
                            icon: "success",
                          }).then((result) => {
                            if (result.isConfirmed) {
                                // Refresca la página después de cerrar la alerta
                                location.reload();
                            }
                        });
    
                        $('#form_editar_cita')[0].reset();
    
                        $("#modal_editar_cita").modal("hide");
    
                        mostrarCitas();
    
                    } else {
    
                        Swal.fire({
                            title: "¡Aviso!",
                            text: `${res.mensaje}`,
                            icon: "error",
                          }).then((result) => {
                            if (result.isConfirmed) {
                                // Refresca la página después de cerrar la alerta
                                location.reload();
                            }
                        });
    
                    }
    
                }
            });
    
    
        }
    
    
    })
    
    /* ===========================================
    ELIMINAR CITA
    =========================================== */
    
    $("#tabla_citas").on("click", ".btnEliminarCita", function(e){
    
        e.preventDefault();
    
        let eliminarIdCita = $(this).attr("idCita");
    
        let datos = new FormData();
    
        datos.append("eliminarIdCita", eliminarIdCita);
    
        Swal.fire({
            title: "¿Está seguro de borrar la cita?",
            text: "¡Si no lo está puede cancelar la accíón!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Cancelar",
            confirmButtonText: "Si, borrar!",
          }).then(function (result) {
    
            if (result.value) {
    
              $.ajax({
                url: "ajax/Cita.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success: function (respuesta) {
                    
                  var res = JSON.parse(respuesta);
      
                  if (res === "ok") {
      
                    Swal.fire({
                      title: "¡Eliminado!",
                      text: "La cita ha sido eliminado",
                      icon: "success",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Refresca la página después de cerrar la alerta
                            location.reload();
                        }
                    });
      
                    mostrarCitas();
      
                  } else {
      
                    console.error("Error al eliminar los datos");
      
                  }
    
                }
    
              });
      
            }
          });
    
    })
    
    /* ===========================================
    LIMPIAR FORMULALRIOS
    =========================================== */
    
    $(".limpiar_formulario_cita").click(function(e){
    
        e.preventDefault();
    
        $('#form_nueva_cita')[0].reset();
        $('#form_editar_cita')[0].reset();
    
    })
    
    /* ===========================================
    VALIDANDO CORREO
    =========================================== */
    
    function isValidEmail(email) {
        // Expresión regular más flexible para validar un correo electrónico
        var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return emailRegex.test(email);
    }
    
    /* ===========================================
    MOSTRAR CITAS
    =========================================== */
    
    function mostrarCitas() {
    
        $.ajax({
            url: "ajax/Cita.ajax.php",
            type: "GET",
            dataType: "json",
            success: function (citas) {

                let tbody = $("#datos_citas");
    
                tbody.empty();
    
                citas.forEach(function (cita, index) {
    
                    let fila = `
                        <tr>
                            <th scope="row" class="text-center">${index + 1}</th>
                            <td>${cita.nombre_cita}</td>
                            <td>${cita.correo_cita}</td>
                            <td>${cita.telefono_cita}</td>
                            <td>${cita.asunto_cita}</td>
                            <td>${cita.fecha_cita}</td>
                            <td>${cita.hora_cita}</td>
    
                            <td class="text-center">
                                ${cita.estado_cita != 0 ? '<button class="text-white btn btn-sm rounded-20 btnActivar" idCita="' + cita.id_cita + '" estadoCita="0" style="background: #04CE78;">Visto</button>'
                                                        : '<button class="text-white btn btn-sm rounded-20 btnActivar" idCita="' + cita.id_cita + '" estadoCita="1" style="background: #FF4D4D;">Pendiente</button>'}
                            </td>
    
                            <td class="text-center fw-bold">
    
                                <a class="btnEditarCita text-warning me-1" idCita="${cita.id_cita}" data-bs-toggle="modal" data-bs-target="#modal_editar_cita" style="cursor: pointer;">
                                    <i class="bi bi-pencil-square" style="font-size: 25px;"></i>
                                </a>
    
                                <a class="btnEliminarCita text-danger" idCita="${cita.id_cita}" style="cursor: pointer;">
                                    <i class="bi bi-trash" style="font-size: 25px;"></i>
                                </a>
    
                            </td>
                        </tr>
                    `;
    
                    tbody.append(fila);
    
                });
    
            },
    
            error: function (xhr, status, error) {
    
                console.error("Error al obtener los usuarios:", status, error);
    
            }
    
        });
    
    }
    
    /* ===========================================
    FUNCION MOSTRAR CITAS   
    =========================================== */
    mostrarCitas();
    
    });
    