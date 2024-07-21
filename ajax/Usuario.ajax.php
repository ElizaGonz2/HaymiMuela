<?php

require_once "../controladores/Usuario.controlador.php";
require_once "../modelos/Usuario.modelo.php";


class AjaxUsuarios{


    /* ====================================
    EDITAR USUARIO
    ==================================== */

    public $idUsuario;

    public function ajaxEditarUsuario(){

        $item = "id_usuario";

        $valor = $this->idUsuario;

        $respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

        echo json_encode($respuesta);

    }

    /* ====================================
    ACTIVAR USUARIO
    ==================================== */

    public $activarUsuario;

    public $activarId;

    public function ajaxActivarUsuario(){

        $tabla = "usuarios";

        $item1 = "estado_usuario";
        $valor1 = $this->activarUsuario;

        $item2 = "id_usuario";
        $valor2 = $this->activarId;

        $respuesta = ModeloUsuario::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

    }



}

/* GUARDAR USUARIO */

if(isset($_POST["nombre_usuario"])){

    $crearUsuario = new ControladorUsuarios();

    $crearUsuario->ctrCrearUsuario();

}

/* ACTIVAR USUARIO */

elseif(isset($_POST["activarUsuario"])){

    $activarUsuario = new AjaxUsuarios();

    $activarUsuario->activarUsuario = $_POST["activarUsuario"];

    $activarUsuario->activarId = $_POST["activarId"];

    $activarUsuario->ajaxActivarUsuario();

}

/* EDITAR USUARIO */

elseif(isset($_POST["idUsuario"])){

    $editar = new AjaxUsuarios();

    $editar->idUsuario = $_POST["idUsuario"];

    $editar->ajaxEditarUsuario();

}

/* ACTUALIZAR USUARIO */

elseif (isset($_POST["edit_id_usuario"])) {

    $editUsuario = new ControladorUsuarios();

    $editUsuario -> ctrEditarUsuario();
    
}

elseif (isset($_POST["eliminarIdUsuario"])) {
    
    $borrarUsuario = new ControladorUsuarios();

    $borrarUsuario -> ctrBorrarUsuario();

}

/* MOSTRAR USUARIO */

else{

    $item = null;

    $valor = null;

    $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

    $tblUsuarios = array();

    foreach($usuarios as $usuario){

        $fila = array(
            'id_usuario' => $usuario["id_usuario"],
            'nombre_usuario' => $usuario["nombre_usuario"],
            'telefono_usuario' => $usuario["telefono_usuario"],
            'perfil_usuario' => $usuario["perfil_usuario"],
            'correo_usuario' => $usuario["correo_usuario"],
            'contrasena_usuario' => $usuario["contrasena_usuario"],
            'estado_usuario' => $usuario["estado_usuario"]
        );

        $tblUsuarios[] = $fila;

    }

    echo json_encode($tblUsuarios);

}
