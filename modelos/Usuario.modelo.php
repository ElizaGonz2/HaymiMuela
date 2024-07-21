<?php

require_once "Conexion.php";

class ModeloUsuario{

    /* ====================================
    MOSTRAR USUARIO
    ==================================== */

    static public function mdlMostrarUsuarios($tabla, $item, $valor){

        if($item != null){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt -> fetch();

        }else{

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt -> execute();

            return $stmt -> fetchAll();

        }

    }


    /* ====================================
    REGISTRO DE USUARIO
    ==================================== */

    static public function mdlIngresarUsuario($tabla, $datos) {

        $conexion = Conexion::conectar();
    
        // Verificar si el correo ya existe

        $stmt = $conexion->prepare("SELECT COUNT(*) FROM $tabla WHERE correo_usuario = :correo_usuario");

        $stmt->bindParam(":correo_usuario", $datos["correo_usuario"], PDO::PARAM_STR);

        $stmt->execute();

        $correoExiste = $stmt->fetchColumn();
    
        if ($correoExiste > 0) {
            return "correo_existente";
        }
    
        // Verificar si el teléfono ya existe

        $stmt = $conexion->prepare("SELECT COUNT(*) FROM $tabla WHERE telefono_usuario = :telefono_usuario");

        $stmt->bindParam(":telefono_usuario", $datos["telefono_usuario"], PDO::PARAM_STR);

        $stmt->execute();

        $telefonoExiste = $stmt->fetchColumn();
    
        if ($telefonoExiste > 0) {

            return "telefono_existente";

        }
    
        // Insertar el nuevo usuario
        $stmt = $conexion->prepare("INSERT INTO $tabla(nombre_usuario, telefono_usuario, perfil_usuario, correo_usuario, contrasena_usuario) VALUES(:nombre_usuario, :telefono_usuario, :perfil_usuario, :correo_usuario, :contrasena_usuario)");
        $stmt->bindParam(":nombre_usuario", $datos["nombre_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono_usuario", $datos["telefono_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":perfil_usuario", $datos["perfil_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":correo_usuario", $datos["correo_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":contrasena_usuario", $datos["contrasena_usuario"], PDO::PARAM_STR);
    
        if ($stmt->execute()) {

            return "ok";

        } else {

            return "error";

        }
    }
    
    /* ====================================
    ACTUALIZAR USUARIO
    ==================================== */

    static public function mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2){

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
    EDITAR USUARIO
    ==================================== */

    static public function mdlEditarUsuario($tabla, $datos){

        $conexion = Conexion::conectar();
    
        // Verificar si el correo ya existe para otro usuario
        $stmt = $conexion->prepare("SELECT COUNT(*) FROM $tabla WHERE correo_usuario = :correo_usuario AND id_usuario != :id_usuario");
        $stmt->bindParam(":correo_usuario", $datos["correo_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);

        $stmt->execute();

        $correoExiste = $stmt->fetchColumn();
    
        if ($correoExiste > 0) {

            return "correo_existente";

        }
    
        // Verificar si el teléfono ya existe para otro usuario
        $stmt = $conexion->prepare("SELECT COUNT(*) FROM $tabla WHERE telefono_usuario = :telefono_usuario AND id_usuario != :id_usuario");
        $stmt->bindParam(":telefono_usuario", $datos["telefono_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);
        
        $stmt->execute();

        $telefonoExiste = $stmt->fetchColumn();
    
        if ($telefonoExiste > 0) {

            return "telefono_existente";

        }
    
        // Actualizar el usuario
        $stmt = $conexion->prepare("UPDATE $tabla SET nombre_usuario = :nombre_usuario, telefono_usuario = :telefono_usuario, perfil_usuario = :perfil_usuario, correo_usuario = :correo_usuario, contrasena_usuario = :contrasena_usuario WHERE id_usuario = :id_usuario");
        $stmt->bindParam(":nombre_usuario", $datos["nombre_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono_usuario", $datos["telefono_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":perfil_usuario", $datos["perfil_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":correo_usuario", $datos["correo_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":contrasena_usuario", $datos["contrasena_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);
    
        if ($stmt->execute()) {

            return "ok";

        } else {

            return "error";

        }
    }
    
    /* ====================================
    BORRAR USUARIO
    ==================================== */

    static public function mdlBorrarUsuario($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_usuario = :id_usuario");

        $stmt->bindParam(":id_usuario", $datos, PDO::PARAM_INT);

        if($stmt -> execute()){

            return "ok";

        }else{

            return "error";

        }

    }
    

}
