$(document).ready(function() {
/* ===========================================
GUARDANDO USUARIO
=========================================== */

$("#btn_guardar_usuario").click(function(e){

    e.preventDefault();

    
    let nombre = $('#nombre_usuario').val().trim();
    let telefono = $('#telefono_usuario').val().trim();
    let perfil = $('#perfil_usuario').val();
    let correo = $('#correo_usuario').val().trim();
    let contrasena = $('#contrasena_usuario').val().trim();

    let isValid = true;

    if (nombre === '') {
        $('#e_nombre_usuario').text('Por favor, ingrese el nombre completo').addClass('text-danger');
        isValid = false;
    } else if (!/^[a-zA-ZÀ-ÿ\s]+$/.test(nombre)) {
        $('#e_nombre_usuario').text('El nombre solo debe contener letras y espacios').addClass('text-danger');
        isValid = false;
    } else {
        $('#e_nombre_usuario').text('').removeClass('text-danger');
    }

    if (telefono === '') {
        $('#e_telefono_usuario').text('Por favor, ingrese el teléfono').addClass('text-danger');
        isValid = false;
    } else if (!/^\d+$/.test(telefono)) {
        $('#e_telefono_usuario').text('El teléfono debe contener solo números').addClass('text-danger');
        isValid = false;
    } else {
        $('#e_telefono_usuario').text('').removeClass('text-danger');
    }

    if (perfil === '' || perfil === null) {
        $('#e_perfil_usuario').text('Por favor, seleccione un perfil').addClass('text-danger');
        isValid = false;
    } else {
        $('#e_perfil_usuario').text('').removeClass('text-danger');
    }

    if (correo === '') {
        $('#e_correo_usuario').text('Por favor, ingrese el correo electrónico').addClass('text-danger');
        isValid = false;
    } else if (!isValidEmail(correo)) {
        $('#e_correo_usuario').text('El correo electrónico ingresado no es válido').addClass('text-danger');
        isValid = false;
    } else {
        $('#e_correo_usuario').text('').removeClass('text-danger');
    }

    if (contrasena === '') {
        $('#e_contrasena_usuario').text('Por favor, ingrese la contraseña').addClass('text-danger');
        isValid = false;
    } else {
        $('#e_contrasena_usuario').text('').removeClass('text-danger');
    }

    if (isValid) {

        let datos = new FormData();

        datos.append("nombre_usuario", nombre);
        datos.append("telefono_usuario", telefono);
        datos.append("perfil_usuario", perfil);
        datos.append("correo_usuario", correo);
        datos.append("contrasena_usuario", contrasena);

        $.ajax({
            url: "ajax/Usuario.ajax.php",
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
                        text: "El usuario ha sido guardado",
                        icon: "success",
                      }).then((result) => {
                        if (result.isConfirmed) {
                            // Refresca la página después de cerrar la alerta
                            location.reload();
                        }
                    });

                    $('#form_nuevo_usuario')[0].reset();

                    $("#nuevoUsuario").modal("hide");

                    mostrarUsuarios();

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

        })

    }

})

/* ===========================================
ACTIVAR USUARIO
=========================================== */

$("#tabla_usuarios").on("click", ".btnActivar", function(e){

    e.preventDefault();

    let idUsuario = $(this).attr("idUsuario");

    let estadoUsuario = $(this).attr("estadoUsuario");

    let datos = new FormData();

    datos.append("activarId", idUsuario)
    datos.append("activarUsuario", estadoUsuario)

    $.ajax({

        url: "ajax/Usuario.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta) {



        }

    });

    if(estadoUsuario == 0){

        $(this).attr("estadoUsuario", 1);

        $(this).html("Desactivado");

        $(this).css({
            "background": "#FF4D4D"
        });

    }else{

        $(this).attr("estadoUsuario", 0);

        $(this).html("Activado");

        $(this).css({
            "background": "#04CE78"
        });

    }


})

/* ===========================================
EDITAR USUARIO
=========================================== */

$("#tabla_usuarios").on("click", ".btnEditarUsuario", function (e){

    e.preventDefault();

    let idUsuario = $(this).attr("idUsuario");

    let datos = new FormData();

    datos.append("idUsuario", idUsuario);

    $.ajax({
        url: "ajax/Usuario.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (usuario) {

           $("#edit_id_usuario").val(usuario["id_usuario"]); 
           $("#edit_nombre_usuario").val(usuario["nombre_usuario"]); 
           $("#edit_telefono_usuario").val(usuario["telefono_usuario"]); 
           $("#edit_perfil_usuario").val(usuario["perfil_usuario"]); 
           $("#edit_correo_usuario").val(usuario["correo_usuario"]); 
           $("#contrasena_usuario_actual").val(usuario["contrasena_usuario"]); 

        }
    })


})

/* ===========================================
ACTUALIZAR USUARIO
=========================================== */

$("#btn_actualizar_usuario").click(function(e){

    e.preventDefault();

    let isValid = true;

    let edit_id_usuario = $("#edit_id_usuario").val();
    let edit_nombre_usuario = $("#edit_nombre_usuario").val();
    let edit_telefono_usuario = $("#edit_telefono_usuario").val();
    let edit_perfil_usuario = $("#edit_perfil_usuario").val();
    let edit_correo_usuario = $("#edit_correo_usuario").val();
    let edit_contrasena_usuario = $("#edit_contrasena_usuario").val();
    let contrasena_usuario_actual = $("#contrasena_usuario_actual").val();

    if (edit_nombre_usuario === '') {
        $('#e_edit_nombre_usuario').text('Por favor, ingrese el nombre completo').addClass('text-danger');
        isValid = false;
    } else if (!/^[a-zA-ZÀ-ÿ\s]+$/.test(edit_nombre_usuario)) {
        $('#e_edit_nombre_usuario').text('El nombre solo debe contener letras y espacios').addClass('text-danger');
        isValid = false;
    } else {
        $('#e_edit_nombre_usuario').text('').removeClass('text-danger');
    }

    if (edit_telefono_usuario === '') {
        $('#e_edit_telefono_usuario').text('Por favor, ingrese el teléfono').addClass('text-danger');
        isValid = false;
    } else if (!/^\d+$/.test(edit_telefono_usuario)) {
        $('#e_edit_telefono_usuario').text('El teléfono debe contener solo números').addClass('text-danger');
        isValid = false;
    } else {
        $('#e_edit_telefono_usuario').text('').removeClass('text-danger');
    }

    if (edit_perfil_usuario === '' || edit_perfil_usuario === null) {
        $('#e_edit_perfil_usuario').text('Por favor, seleccione un perfil').addClass('text-danger');
        isValid = false;
    } else {
        $('#e_edit_perfil_usuario').text('').removeClass('text-danger');
    }

    if (edit_correo_usuario === '') {
        $('#e_edit_correo_usuario').text('Por favor, ingrese el correo electrónico').addClass('text-danger');
        isValid = false;
    } else if (!isValidEmail(edit_correo_usuario)) {
        $('#e_edit_correo_usuario').text('El correo electrónico ingresado no es válido').addClass('text-danger');
        isValid = false;
    } else {
        $('#e_edit_correo_usuario').text('').removeClass('text-danger');
    }


    if(isValid){

        let datos = new FormData();

        datos.append("edit_id_usuario", edit_id_usuario);
        datos.append("edit_nombre_usuario", edit_nombre_usuario);
        datos.append("edit_telefono_usuario", edit_telefono_usuario);
        datos.append("edit_perfil_usuario", edit_perfil_usuario);
        datos.append("edit_correo_usuario", edit_correo_usuario);
        datos.append("edit_contrasena_usuario", edit_contrasena_usuario);
        datos.append("contrasena_usuario_actual", contrasena_usuario_actual);

        $.ajax({
            url: "ajax/Usuario.ajax.php",
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

                    $('#form_actualizar_usuario')[0].reset();

                    $("#modal_editar_usuario").modal("hide");

                    mostrarUsuarios();

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
ELIMINAR USUARIO
=========================================== */

$("#tabla_usuarios").on("click", ".btnEliminarUsuario", function(e){

    e.preventDefault();

    let eliminarIdUsuario = $(this).attr("idUsuario");

    let datos = new FormData();

    datos.append("eliminarIdUsuario", eliminarIdUsuario);

    Swal.fire({
        title: "¿Está seguro de borrar el usuario?",
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
            url: "ajax/Usuario.ajax.php",
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
                  text: "El usuario ha sido eliminado",
                  icon: "success",
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Refresca la página después de cerrar la alerta
                        location.reload();
                    }
                });
  
                mostrarUsuarios();
  
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

$(".limpiar_formulario").click(function(e){

    e.preventDefault();

    $('#form_nuevo_usuario')[0].reset();

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
MOSTRAR USUARIOS
=========================================== */

function mostrarUsuarios() {

    $.ajax({
        url: "ajax/Usuario.ajax.php",
        type: "GET",
        dataType: "json",
        success: function (usuarios) {

            let tbody = $("#datos_usuarios");

            tbody.empty();

            usuarios.forEach(function (usuario, index) {

                let fila = `
                    <tr>
                        <th scope="row" class="text-center">${index + 1}</th>
                        <td>${usuario.nombre_usuario}</td>
                        <td>${usuario.telefono_usuario}</td>
                        <td>${usuario.perfil_usuario}</td>
                        <td>${usuario.correo_usuario}</td>

                        <td class="text-center">
                            ${usuario.estado_usuario != 0 ? '<button class="text-white btn btn-sm rounded-20 btnActivar" idUsuario="' + usuario.id_usuario + '" estadoUsuario="0" style="background: #04CE78;">Activado</button>'
                                                          : '<button class="text-white btn btn-sm rounded-20 btnActivar" idUsuario="' + usuario.id_usuario + '" estadoUsuario="1" style="background: #FF4D4D;">Desactivado</button>'}
                        </td>

                        <td class="text-center fw-bold">

                            <a class="btnEditarUsuario text-warning me-1" idUsuario="${usuario.id_usuario}" data-bs-toggle="modal" data-bs-target="#modal_editar_usuario" style="cursor: pointer;">
                                <i class="bi bi-pencil-square" style="font-size: 25px;"></i>
                            </a>

                            <a class="btnEliminarUsuario text-danger" idUsuario="${usuario.id_usuario}" style="cursor: pointer;">
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
FUNCION MOSTRAR USUARIOS
=========================================== */
mostrarUsuarios();

});
