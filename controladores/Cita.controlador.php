<?php

class ControladorCitas{

    /* ====================
    CREAR CITA
    =======================*/

    static public function ctrCrearCita(){

        $tabla = "citas";

        $datos = array(
            "nombre_cita" => $_POST["nombre_cita"],
            "correo_cita" => $_POST["correo_cita"],
            "telefono_cita" => $_POST["telefono_cita"],
            "asunto_cita" => $_POST["asunto_cita"],
            "fecha_cita" => $_POST["fecha_cita"],
            "hora_cita" => $_POST["hora_cita"]
        );

        $respuesta = ModeloCita::mdlIngresarCita($tabla, $datos);

        if ($respuesta == "ok") {

            $resultado = array(
                "estado" => "success",
                "mensaje" => "La cita ha sido guardado exitosamente."
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
                "mensaje" => "Hubo un error al guardar la cita."
            );

        }
    
        // Retornar el resultado como JSON
        echo json_encode($resultado);

    }

    /* ====================
    MOSTRAR CITA
    =======================*/

    static public function ctrMostrarCitas($item, $valor){

        $tabla = "citas";

        $respuesta = ModeloCita::mdlMostrarCitas($tabla, $item, $valor);

        return $respuesta;

    }

    /* ====================
    EDITAR CITA
    =======================*/

    static public function ctrEditarCita(){

        $tabla = "citas";

        $datos = array(
            "id_cita" => $_POST["edit_id_cita"],
            "nombre_cita" => $_POST["edit_nombre_cita"],
            "correo_cita" => $_POST["edit_correo_cita"],
            "telefono_cita" => $_POST["edit_telefono_cita"],
            "asunto_cita" => $_POST["edit_asunto_cita"],
            "fecha_cita" => $_POST["edit_fecha_cita"],
            "hora_cita" => $_POST["edit_hora_cita"]
        );


        $respuesta = ModeloCita::mdlEditarCita($tabla, $datos);


        if ($respuesta == "ok") {

            $resultado = array(
                "estado" => "success",
                "mensaje" => "Cita actualizada exitosamente."
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
                "mensaje" => "Hubo un error al guardar la cita."
            );

        }
    
        // Retornar el resultado como JSON
        echo json_encode($resultado);

    }

    /* ====================
    BORRAR CITA
    =======================*/

    static public function ctrBorrarCita(){

        $tabla = "citas";

        $datos = $_POST["eliminarIdCita"];

        $respuesta = ModeloCita::mdlBorrarCita($tabla, $datos);

        if ($respuesta == "ok") {

            echo json_encode("ok");

        }

    }

}
