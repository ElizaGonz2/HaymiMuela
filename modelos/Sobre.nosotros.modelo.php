<?php

require_once "Conexion.php";


class ModeloSobreNosotros{

    /* ====================================
    MOSTRAR SOBRE NOSOTROS
    ==================================== */

    static public function mdlMostrarSobreNosotros($tabla, $item, $valor){

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
    REGISTRO DE SOBRE NOSOTROS
    ==================================== */

    static public function mdlIngresarSobreNosotros($tabla, $datos) {

        $conexion = Conexion::conectar();
    
        // Verificar si ya existe un registro en la tabla
        $stmt = $conexion->prepare("SELECT COUNT(*) as total FROM $tabla");

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($result['total'] > 0) {

            return "registro_existe";

        }
    
        // Insertar el nuevo registro solo si no existe ninguno
        $stmt = $conexion->prepare("INSERT INTO $tabla(titulo_sn, imagen_sn, descripcion_sn) VALUES(:titulo_sn, :imagen_sn, :descripcion_sn)");
        
        $stmt->bindParam(":titulo_sn", $datos["titulo_sn"], PDO::PARAM_STR);
        $stmt->bindParam(":imagen_sn", $datos["imagen_sn"], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion_sn", $datos["descripcion_sn"], PDO::PARAM_STR);
    
        if ($stmt->execute()) {

            return "ok";

        } else {

            return "error";
            
        }
    }
    
    
    /* ====================================
    ACTUALIZAR SOBRE NOSOTROS
    ==================================== */

    static public function mdlActualizarSobreNosotros($tabla, $item1, $valor1, $item2, $valor2){

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
    EDITAR SOBRE NOSOTROS
    ==================================== */

    static public function mdlEditarSobreNosotros($tabla, $datos){

        $conexion = Conexion::conectar();
    
        // Actualizar el usuario
        $stmt = $conexion->prepare("UPDATE $tabla SET titulo_sn = :titulo_sn, imagen_sn = :imagen_sn, descripcion_sn = :descripcion_sn WHERE id_sobre_sn = :id_sobre_sn");
        
        $stmt->bindParam(":titulo_sn", $datos["titulo_sn"], PDO::PARAM_STR);
        $stmt->bindParam(":imagen_sn", $datos["imagen_sn"], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion_sn", $datos["descripcion_sn"], PDO::PARAM_STR);
        $stmt->bindParam(":id_sobre_sn", $datos["id_sobre_sn"], PDO::PARAM_INT);

    
        if ($stmt->execute()) {

            return "ok";

        } else {

            return "error";

        }
    }
    
    /* ====================================
    BORRAR SOBRE NOSOTROS
    ==================================== */

    static public function mdlBorrarSobreNosotros($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_sobre_sn = :id_sobre_sn");

        $stmt->bindParam(":id_sobre_sn", $datos, PDO::PARAM_INT);

        if($stmt -> execute()){

            return "ok";

        }else{

            return "error";

        }

    }
    

}
