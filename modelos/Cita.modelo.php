<?php

require_once "Conexion.php";

class ModeloCita{

    /* ====================================
    MOSTRAR CITA
    ==================================== */

    static public function mdlMostrarCitas($tabla, $item, $valor){

        if($item != null){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt -> fetch();

        }else{

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY estado_cita ASC, fecha_cita ASC");

            $stmt -> execute();

            return $stmt -> fetchAll();

        }

    }


    /* ====================================
    REGISTRO DE CITA
    ==================================== */

    static public function mdlIngresarCita($tabla, $datos) {

        $conexion = Conexion::conectar();
    
        // Verificar si el correo ya existe

        $stmt = $conexion->prepare("SELECT COUNT(*) FROM $tabla WHERE correo_cita = :correo_cita");

        $stmt->bindParam(":correo_cita", $datos["correo_cita"], PDO::PARAM_STR);

        $stmt->execute();

        $correoExiste = $stmt->fetchColumn();
    
        if ($correoExiste > 0) {

            return "correo_existente";

        }
    
        // Verificar si el teléfono ya existe

        $stmt = $conexion->prepare("SELECT COUNT(*) FROM $tabla WHERE telefono_cita = :telefono_cita");

        $stmt->bindParam(":telefono_cita", $datos["telefono_cita"], PDO::PARAM_STR);

        $stmt->execute();

        $telefonoExiste = $stmt->fetchColumn();
    
        if ($telefonoExiste > 0) {

            return "telefono_existente";

        }
    
        // Insertar el nuevo usuario
        $stmt = $conexion->prepare("INSERT INTO $tabla(nombre_cita, correo_cita, telefono_cita, asunto_cita, fecha_cita, hora_cita) VALUES(:nombre_cita, :correo_cita, :telefono_cita, :asunto_cita, :fecha_cita, :hora_cita)");
        
        $stmt->bindParam(":nombre_cita", $datos["nombre_cita"], PDO::PARAM_STR);
        $stmt->bindParam(":correo_cita", $datos["correo_cita"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono_cita", $datos["telefono_cita"], PDO::PARAM_STR);
        $stmt->bindParam(":asunto_cita", $datos["asunto_cita"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_cita", $datos["fecha_cita"], PDO::PARAM_STR);
        $stmt->bindParam(":hora_cita", $datos["hora_cita"], PDO::PARAM_STR);
    
        if ($stmt->execute()) {

            return "ok";

        } else {

            return "error";

        }
    }
    
    /* ====================================
    ACTUALIZAR CITA
    ==================================== */

    static public function mdlActualizarCita($tabla, $item1, $valor1, $item2, $valor2){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

        $stmt->bindParam(":".$item1, $valor1, PDO::PARAM_STR);
        $stmt->bindParam(":".$item2, $valor2, PDO::PARAM_STR);

        if($stmt -> execute()){

            return "ok";

        }else{

            return "error";

        }

    }

    /* ====================================
    EDITAR CITA
    ==================================== */

    static public function mdlEditarCita($tabla, $datos){

        $conexion = Conexion::conectar();
    
        // Verificar si el correo ya existe para otro usuario
        $stmt = $conexion->prepare("SELECT COUNT(*) FROM $tabla WHERE correo_cita = :correo_cita AND id_cita != :id_cita");
        $stmt->bindParam(":correo_cita", $datos["correo_cita"], PDO::PARAM_STR);
        $stmt->bindParam(":id_cita", $datos["id_cita"], PDO::PARAM_INT);

        $stmt->execute();

        $correoExiste = $stmt->fetchColumn();
    
        if ($correoExiste > 0) {

            return "correo_existente";

        }
    
        // Verificar si el teléfono ya existe para otro usuario
        $stmt = $conexion->prepare("SELECT COUNT(*) FROM $tabla WHERE telefono_cita = :telefono_cita AND id_cita != :id_cita");
        $stmt->bindParam(":telefono_cita", $datos["telefono_cita"], PDO::PARAM_STR);
        $stmt->bindParam(":id_cita", $datos["id_cita"], PDO::PARAM_INT);
        
        $stmt->execute();

        $telefonoExiste = $stmt->fetchColumn();
    
        if ($telefonoExiste > 0) {

            return "telefono_existente";

        }
    
        // Actualizar el usuario
        $stmt = $conexion->prepare("UPDATE $tabla SET nombre_cita = :nombre_cita, correo_cita = :correo_cita, telefono_cita = :telefono_cita, asunto_cita = :asunto_cita, fecha_cita = :fecha_cita, hora_cita = :hora_cita WHERE id_cita = :id_cita");
        
        $stmt->bindParam(":nombre_cita", $datos["nombre_cita"], PDO::PARAM_STR);
        $stmt->bindParam(":correo_cita", $datos["correo_cita"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono_cita", $datos["telefono_cita"], PDO::PARAM_STR);
        $stmt->bindParam(":asunto_cita", $datos["asunto_cita"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_cita", $datos["fecha_cita"], PDO::PARAM_STR);
        $stmt->bindParam(":hora_cita", $datos["hora_cita"], PDO::PARAM_STR);
        $stmt->bindParam(":id_cita", $datos["id_cita"], PDO::PARAM_INT);
    
        if ($stmt->execute()) {

            return "ok";

        } else {

            return "error";

        }
    }
    
    /* ====================================
    BORRAR CITA
    ==================================== */

    static public function mdlBorrarCita($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_cita = :id_cita");

        $stmt->bindParam(":id_cita", $datos, PDO::PARAM_INT);

        if($stmt -> execute()){

            return "ok";

        }else{

            return "error";

        }

    }
    

}
