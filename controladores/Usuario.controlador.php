<?php

class ControladorUsuarios{

    /* =====================
    INGRESO DE USUARIO
    =======================*/

    static public function ctrIngresoUsuario(){

        if(isset($_POST["ing_correo_usuario"]) && isset($_POST["ing_contrasena_usuario"])) {

            if(preg_match('/^[a-zA-Z0-9_@.]+$/', $_POST["ing_correo_usuario"])){

                $encriptar = crypt($_POST["ing_contrasena_usuario"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                $tabla = "usuarios";

                $item = "correo_usuario";

                $valor = $_POST["ing_correo_usuario"];

                $respuesta = ModeloUsuario::mdlMostrarUsuarios($tabla, $item, $valor);

                if($respuesta["correo_usuario"] == $_POST["ing_correo_usuario"] && $respuesta["contrasena_usuario"] == $encriptar){

                    if($respuesta["estado_usuario"] == 1){

                        $_SESSION["iniciarSesion"] = "ok";
                        $_SESSION["id_usuario"] = $respuesta["id_usuario"];
                        $_SESSION["nombre_usuario"] = $respuesta["nombre_usuario"];
                        $_SESSION["telefono_usuario"] = $respuesta["telefono_usuario"];
                        $_SESSION["perfil_usuario"] = $respuesta["perfil_usuario"];
                        $_SESSION["correo_usuario"] = $respuesta["correo_usuario"];
                        $_SESSION["estado_usuario"] = $respuesta["estado_usuario"];

                        echo '<script>
                                window.location = "inicio"
                             </script>';

                    }else{

                        echo '<script>

                                Swal.fire({
                                    title: "Advertencia",
                                    text: "¡El usuario no está activado!",
                                    icon: "warning",
                                    showCancelButton: false,
                                    confirmButtonColor: "#3085d6",
                                    confirmButtonText: "Ok"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location = "inicio"
                                    }
                                });

                              </script>';

                    }

                }else{

                    echo '<script>

                            Swal.fire({
                                title: "Error",
                                text: "¡El correo o contraseña incorrecto!",
                                icon: "error",
                                showCancelButton: false,
                                confirmButtonColor: "#3085d6",
                                confirmButtonText: "Ok"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location = "inicio"
                                }
                            });

                        </script>';

                }

            }else{

                echo '<script>

                        Swal.fire({
                            title: "Error",
                            text: "¡El correo no puede tener caracteres especiales!",
                            icon: "error",
                            showCancelButton: false,
                            confirmButtonColor: "#3085d6",
                            confirmButtonText: "Ok"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location = "inicio"
                            }
                        });

                    </script>';

            }

        } 
    }

    /* ====================
    CREAR USUARIO
    =======================*/

    static public function ctrCrearUsuario(){

        $tabla = "usuarios";

        $encriptar = crypt($_POST["contrasena_usuario"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

        $datos = array(
            "nombre_usuario" => $_POST["nombre_usuario"],
            "telefono_usuario" => $_POST["telefono_usuario"],
            "perfil_usuario" => $_POST["perfil_usuario"],
            "correo_usuario" => $_POST["correo_usuario"],
            "contrasena_usuario" => $encriptar
        );

        $respuesta = ModeloUsuario::mdlIngresarUsuario($tabla, $datos);

        if ($respuesta == "ok") {

            $resultado = array(
                "estado" => "success",
                "mensaje" => "Usuario guardado exitosamente."
            );

        } else if ($respuesta == "correo_existente") {

            $resultado = array(
                "estado" => "error",
                "mensaje" => "El correo electrónico ya está registrado."
            );

        } else if ($respuesta == "telefono_existente") {

            $resultado = array(
                "estado" => "error",
                "mensaje" => "El teléfono ya está registrado."
            );

        } else {

            $resultado = array(
                "estado" => "error",
                "mensaje" => "Hubo un error al guardar el usuario."
            );

        }
    
        // Retornar el resultado como JSON
        echo json_encode($resultado);

    }

    /* ====================
    MOSTRAR USUARIO
    =======================*/

    static public function ctrMostrarUsuarios($item, $valor){

        $tabla = "usuarios";

        $respuesta = ModeloUsuario::mdlMostrarUsuarios($tabla, $item, $valor);

        return $respuesta;

    }

    /* ====================
    EDITAR USUARIO
    =======================*/

    static public function ctrEditarUsuario(){

        $tabla = "usuarios";

        if($_POST["edit_contrasena_usuario"] != ""){

            $encriptar = crypt($_POST["edit_contrasena_usuario"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

        }else{

            $encriptar = $_POST["contrasena_usuario_actual"];

        }

        $datos = array(
            "id_usuario" => $_POST["edit_id_usuario"],
            "nombre_usuario" => $_POST["edit_nombre_usuario"],
            "telefono_usuario" => $_POST["edit_telefono_usuario"],
            "perfil_usuario" => $_POST["edit_perfil_usuario"],
            "correo_usuario" => $_POST["edit_correo_usuario"],
            "contrasena_usuario" => $encriptar
        );


        $respuesta = ModeloUsuario::mdlEditarUsuario($tabla, $datos);


        if ($respuesta == "ok") {

            $resultado = array(
                "estado" => "success",
                "mensaje" => "Usuario actualizado exitosamente."
            );

        } else if ($respuesta == "correo_existente") {

            $resultado = array(
                "estado" => "error",
                "mensaje" => "El correo electrónico ya está registrado."
            );

        } else if ($respuesta == "telefono_existente") {

            $resultado = array(
                "estado" => "error",
                "mensaje" => "El teléfono ya está registrado."
            );

        } else {

            $resultado = array(
                "estado" => "error",
                "mensaje" => "Hubo un error al guardar el usuario."
            );

        }
    
        // Retornar el resultado como JSON
        echo json_encode($resultado);

    }

    /* ====================
    BORRAR USUARIO
    =======================*/

    static public function ctrBorrarUsuario(){

        $tabla = "usuarios";

        $datos = $_POST["eliminarIdUsuario"];

        $respuesta = ModeloUsuario::mdlBorrarUsuario($tabla, $datos);

        if ($respuesta == "ok") {

            echo json_encode("ok");

        }

    }

}
