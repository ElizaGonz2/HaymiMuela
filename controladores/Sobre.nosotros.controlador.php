<?php

class ControladorSobreNosotros{

    /* ====================
    CREAR SOBRE nOSOTROS
    =======================*/

    static public function ctrCrearSobreNosotros(){


        /* VALIDANDO IMAGEN */

        $ruta = "../vistas/img/nosotros/";

        if (isset($_FILES["imagen_sn"]["tmp_name"])) {

            $extension = pathinfo($_FILES["imagen_sn"]["name"], PATHINFO_EXTENSION);

            $tipos_permitidos = array("jpg", "jpeg", "png", "gif");

            if (in_array(strtolower($extension), $tipos_permitidos)) {

                $nombre_imagen = date("YmdHis") . rand(1000, 9999);

                $ruta_imagen = $ruta . $nombre_imagen . "." . $extension;

                if (move_uploaded_file($_FILES["imagen_sn"]["tmp_name"], $ruta_imagen)) {

                    /* echo "Imagen subida correctamente."; */
                } else {

                    /* echo "Error al subir la imagen."; */
                }
            } else {

                /* echo "Solo se permiten archivos de imagen JPG, JPEG, PNG o GIF."; */
            }
        }

        $tabla = "sobre_nosotros";

        $datos = array(
            "titulo_sn" => $_POST["titulo_sn"],
            "imagen_sn" => $ruta_imagen,
            "descripcion_sn" => $_POST["descripcion_sn"]
        );

        $respuesta = ModeloSobreNosotros::mdlIngresarSobreNosotros($tabla, $datos);

        if ($respuesta == "ok") {

            $resultado = array(
                "estado" => "success",
                "mensaje" => "Los datos han sido guardado exitosamente."
            );

        }elseif($respuesta == "registro_existe"){

            $resultado = array(
                "estado" => "error",
                "mensaje" => "Solo puedes registrar una sola vez."
            );

        } else {

            $resultado = array(
                "estado" => "error",
                "mensaje" => "Hubo un error al guardar la cita."
            );

        }
    
        // Retornar el resultado como JSON
        echo json_encode($resultado);

    }

    /* ====================
    MOSTRAR SOBRE NOSOTROS
    =======================*/

    static public function ctrMostrarSobreNosotros($item, $valor){

        $tabla = "sobre_nosotros";

        $respuesta = ModeloSobreNosotros::mdlMostrarSobreNosotros($tabla, $item, $valor);

        return $respuesta;

    }

    /* ====================
    EDITAR SOBRE NOSOTROS
    =======================*/

    static public function ctrEditarSobreNosotros(){


        /* VALIDAR USUARIO */

        $ruta = "../vistas/img/nosotros/";

        $ruta_imagen = $_POST["imagen_sn_actual"];

        if (isset($_FILES["edit_imagen_sn"]["tmp_name"]) && !empty($_FILES["edit_imagen_sn"]["tmp_name"])) {

            if (file_exists($ruta_imagen)) {

                unlink($ruta_imagen);

            }

            $extension = pathinfo($_FILES["edit_imagen_sn"]["name"], PATHINFO_EXTENSION);

            $tipos_permitidos = array("jpg", "jpeg", "png", "gif");

            if (in_array(strtolower($extension), $tipos_permitidos)) {

                $nombre_imagen = date("YmdHis") . rand(1000, 9999);

                $ruta_imagen = $ruta . $nombre_imagen . "." . $extension;

                if (move_uploaded_file($_FILES["edit_imagen_sn"]["tmp_name"], $ruta_imagen)) {

                    /* echo "Imagen subida correctamente."; */
                } else {

                    /* echo "Error al subir la imagen."; */
                }
            } else {

                /* echo "Solo se permiten archivos de imagen JPG, JPEG, PNG o GIF."; */
            }
        }



        $tabla = "sobre_nosotros";

        $datos = array(
            "id_sobre_sn" => $_POST["edit_id_sobre_sn"],
            "titulo_sn" => $_POST["edit_titulo_sn"],
            "imagen_sn" => $ruta_imagen,
            "descripcion_sn" => $_POST["edit_descripcion_sn"],

        );


        $respuesta = ModeloSobreNosotros::mdlEditarSobreNosotros($tabla, $datos);


        if ($respuesta == "ok") {

            $resultado = array(
                "estado" => "success",
                "mensaje" => "Cita actualizada exitosamente."
            );

        }else{

            $resultado = array(
                "estado" => "error",
                "mensaje" => "Hubo un error al guardar la cita."
            );

        }
    
        // Retornar el resultado como JSON
        echo json_encode($resultado);

    }

    /* ====================
    BORRAR SOBRE NOSOTROS
    =======================*/

    static public function ctrBorrarSobreNosotros(){

        $tabla = "sobre_nosotros";

        $datos = $_POST["eliminarIdSn"];

        if ($_POST["eliminarFotoRuta"] != "") {

            // Verificar si el archivo existe y eliminarlo
            if (file_exists($_POST["eliminarFotoRuta"])) {

                unlink($_POST["eliminarFotoRuta"]);

            } else {

                // El archivo no existe
                echo "El archivo a eliminar no existe.";

            }
        }

        $respuesta = ModeloSobreNosotros::mdlBorrarSobreNosotros($tabla, $datos);

        if ($respuesta == "ok") {

            echo json_encode("ok");

        }

    }

}
