$(document).ready(function() {

    /* ===========================================
    VISTA PREVIA DE LAS IMG SOBRE NOSOTROS
    =========================================== */

    $("#imagen_sn").change(function () {

        const file = this.files[0];

        if (file) {

            const reader = new FileReader();

            reader.onload = function (e) {

                $("#previsualizar_img_sn").attr("src", e.target.result);

                $("#previsualizar_img_sn").show();

            };

            reader.readAsDataURL(file);
        }
    });

    /* ===========================================
    VISTA PREVIA DE LAS IMG SOBRE NOSOTROS
    =========================================== */

    $("#edit_imagen_sn").change(function () {

        const file = this.files[0];

        if (file) {

            const reader = new FileReader();

            reader.onload = function (e) {

                $("#previsualizar_img_sn_edit").attr("src", e.target.result);

                $("#previsualizar_img_sn_edit").show();

            };

            reader.readAsDataURL(file);
        }
    });

    /* =====================================
    VALIDANDO IMAGEN DE SOBRE NOSOTROS
    ===================================== */

    $("#imagen_sn").change(function () {

        var imagen = $(this).get(0).files[0];

        if (imagen) {
            var maxSize = 5 * 1024 * 1024;

            if (imagen.size > maxSize) {
                Swal.fire({
                    title: "¡Error!",
                    text: "El tamaño de la imagen es demasiado grande. Por favor, seleccione una imagen más pequeña.",
                    icon: "error",
                });

                $(this).val("");

                return;
            }

            var allowedTypes = ["image/jpeg", "image/png", "image/gif", "image/jpg"];

            if (allowedTypes.indexOf(imagen.type) === -1) {
                Swal.fire({
                    title: "¡Error!",
                    text: "El tipo de archivo seleccionado no es válido. Por favor, seleccione una imagen en formato JPEG, PNG, GIF o JPG.",
                    icon: "error",
                });

                $(this).val("");

                return;
            }

        } else {
            alert("Por favor, seleccione una imagen.");
        }
    });

    /* ===========================================
    GUARDANDO SOBRE NOSOTROS
    =========================================== */
    
    $("#btn_guardar_sn").click(function(e){
    
        e.preventDefault();
        
        let titulo = $('#titulo_sn').val().trim();
        let imagen = $('#imagen_sn').get(0).files[0];
        let descripcion = $('#descripcion_sn').val().trim();
    
        let isValid = true;
    
        if (titulo === '') {
            $('#e_titulo_sn').text('Por favor, ingrese el título').addClass('text-danger');
            isValid = false;
        } else if (!/^[a-zA-ZÀ-ÿ\s]+$/.test(titulo)) {
            $('#e_titulo_sn').text('El nombre solo debe contener letras y espacios').addClass('text-danger');
            isValid = false;
        } else {
            $('#e_titulo_sn').text('').removeClass('text-danger');
        }

        if (imagen == '' || imagen == null) {
            $('#e_imagen_sn').text('Selecione una imagen por favor').addClass('text-danger');
            isValid = false;
        } else {
            $('#e_imagen_sn').text('').removeClass('text-danger');
        }
    
        if (descripcion === '' || descripcion == null) {
            $('#e_descripcion_sn').text('Por favor, ingrese la descripción').addClass('text-danger');
            isValid = false;
        }else {
            $('#e_descripcion_sn').text('').removeClass('text-danger');
        }
    

        if (isValid) {
    
            let datos = new FormData();

            datos.append("titulo_sn", titulo);
            datos.append("imagen_sn", imagen);
            datos.append("descripcion_sn", descripcion);
    
            $.ajax({
                url: "ajax/Sobre.nosotros.ajax.php",
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
    
                        $('#form_nuevo_sn')[0].reset();
    
                        $("#modal_sobre_nosotros").modal("hide");

                        $("#previsualizar_img_sn").attr("src", "");
    
                        mostrarSobreNosotros();
    
                    } else {
    
                        Swal.fire({
                            title: "¡Aviso!",
                            text: `${res.mensaje}`,
                            icon: "error",
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
    EDITAR SOBRE NOSOTROS
    =========================================== */
    
    $("#tabla_sobre_nosotros").on("click", ".btnEditarSn", function (e){
    
        e.preventDefault();
    
        let idSn = $(this).attr("idSn");
    
        let datos = new FormData();
    
        datos.append("idSn", idSn);

      
    
        $.ajax({
            url: "ajax/Sobre.nosotros.ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (sn) {
    
               $("#edit_id_sobre_sn").val(sn["id_sobre_sn"]); 

               $("#edit_titulo_sn").val(sn["titulo_sn"]); 

               var imagen = sn["imagen_sn"].substring(3);

               if (sn["imagen_sn"] != "") {

                 $("#previsualizar_img_sn_edit").attr("src", imagen);

               }

               $("#imagen_sn_actual").val(sn["imagen_sn"]); 

               $("#edit_descripcion_sn").val(sn["descripcion_sn"]); 

    
            }
        })
    
    
    })
    
    /* ===========================================
    ACTUALIZAR SOBRE NOSOTROS
    =========================================== */
    
    $("#btn_actualizar_sn").click(function(e){
    
        e.preventDefault();
    
        let edit_id_sobre_sn  = $('#edit_id_sobre_sn').val().trim();
        let edit_titulo_sn = $('#edit_titulo_sn').val().trim();
        let edit_imagen_sn = $('#edit_imagen_sn').get(0).files[0];
        let imagen_sn_actual = $('#imagen_sn_actual').val().trim();
        let edit_descripcion_sn = $('#edit_descripcion_sn').val().trim();
    
        let isValid = true;
    
        if (edit_titulo_sn === '') {
            $('#e_edit_titulo_sn').text('Por favor, ingrese el título').addClass('text-danger');
            isValid = false;
        } else if (!/^[a-zA-ZÀ-ÿ\s]+$/.test(edit_titulo_sn)) {
            $('#e_edit_titulo_sn').text('El nombre solo debe contener letras y espacios').addClass('text-danger');
            isValid = false;
        } else {
            $('#e_edit_titulo_sn').text('').removeClass('text-danger');
        }
    
        if (edit_descripcion_sn === '' || edit_descripcion_sn == null) {
            $('#e_edit_descripcion_sn').text('Por favor, ingrese la descripción').addClass('text-danger');
            isValid = false;
        }else {
            $('#e_edit_descripcion_sn').text('').removeClass('text-danger');
        }
    
        if(isValid){
    
            let datos = new FormData();
    
            datos.append("edit_id_sobre_sn", edit_id_sobre_sn);
            datos.append("edit_titulo_sn", edit_titulo_sn);
            datos.append("edit_imagen_sn", edit_imagen_sn);
            datos.append("imagen_sn_actual", imagen_sn_actual);
            datos.append("edit_descripcion_sn", edit_descripcion_sn);
    
            $.ajax({
                url: "ajax/Sobre.nosotros.ajax.php",
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
    
                        $('#form_actualizar_sn')[0].reset();
    
                        $("#modal_editar_nosotros").modal("hide");
    
                        mostrarSobreNosotros();
    
                    } else {
    
                        Swal.fire({
                            title: "¡Aviso!",
                            text: `${res.mensaje}`,
                            icon: "error",
                          });
    
                    }
    
                }
            });
    
    
        }
    
    
    })
    
    /* ===========================================
    ELIMINAR SOBRE NOSOTROS
    =========================================== */
    
    $("#tabla_sobre_nosotros").on("click", ".btnEliminarSn", function(e){
    
        e.preventDefault();
    
        let eliminarIdSn = $(this).attr("idSn");

        let eliminarFoto = $(this).attr("fotoSn");

        let eliminarFotoRuta = "../" + eliminarFoto;
    
        let datos = new FormData();
    
        datos.append("eliminarIdSn", eliminarIdSn);
        datos.append("eliminarFotoRuta", eliminarFotoRuta);
    
        Swal.fire({
            title: "¿Está seguro de borrar?",
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
                url: "ajax/Sobre.nosotros.ajax.php",
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
                      text: "Eliminado con éxito",
                      icon: "success",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Refresca la página después de cerrar la alerta
                            location.reload();
                        }
                    });
      
                    mostrarSobreNosotros();
      
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
    
    $(".limpiar_formulario_sn").click(function(e){
    
        e.preventDefault();
    
        $('#form_nuevo_sn')[0].reset();
        $('#form_actualizar_sn')[0].reset();
        $("#previsualizar_img_sn").attr("src", "");
    
    })
    
    
    /* ===========================================
    MOSTRAR SOBRE NOSOTROS
    =========================================== */
    
    function mostrarSobreNosotros() {
    
        $.ajax({
            url: "ajax/Sobre.nosotros.ajax.php",
            type: "GET",
            dataType: "json",
            success: function (sobreNosotros) {

                let tbody = $("#datos_sobre_nosotros");
    
                tbody.empty();
    
                sobreNosotros.forEach(function (sn, index) {

                    sn.imagen_sn = sn.imagen_sn.substring(3);
    
                    let fila = `
                        <tr>
                            <th scope="row" class="text-center">${index + 1}</th>
                            <td>${sn.titulo_sn}</td>
                            <td class="text-center">
                                <img src="${sn.imagen_sn}" alt="${sn.titulo_sn}" width="200" class="img img-fluid">
                            </td>
                            <td>${sn.descripcion_sn}</td>
    
                            <td class="text-center fw-bold">
    
                                <a class="btnEditarSn text-warning me-1" idSn="${sn.id_sobre_sn }" data-bs-toggle="modal" data-bs-target="#modal_editar_nosotros" style="cursor: pointer;">
                                    <i class="bi bi-pencil-square" style="font-size: 25px;"></i>
                                </a>
    
                                <a class="btnEliminarSn text-danger" idSn="${sn.id_sobre_sn }" style="cursor: pointer;" fotoSn="${sn.imagen_sn}">
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
    FUNCION MOSTRAR SOBRE NOSOTROS   
    =========================================== */
    mostrarSobreNosotros();
    
});
    