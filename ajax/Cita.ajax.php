<?php

require_once "../controladores/Cita.controlador.php";
require_once "../modelos/Cita.modelo.php";


class AjaxCitas{


    /* ====================================
    EDITAR USUARIO
    ==================================== */

    public $idCita;

    public function ajaxEditarCita(){

        $item = "id_cita";

        $valor = $this->idCita;

        $respuesta = ControladorCitas::ctrMostrarCitas($item, $valor);

        echo json_encode($respuesta);

    }

    /* ====================================
    ACTIVAR USUARIO
    ==================================== */

    public $activarCita;

    public $activarId;

    public function ajaxActivarCita(){

        $tabla = "citas";

        $item1 = "estado_cita";
        $valor1 = $this->activarCita;

        $item2 = "id_cita";
        $valor2 = $this->activarId;

        $respuesta = ModeloCita::mdlActualizarCita($tabla, $item1, $valor1, $item2, $valor2);

    }



}

/* GUARDAR CITA */

if(isset($_POST["nombre_cita"])){

    $crearCitas = new ControladorCitas();

    $crearCitas->ctrCrearCita();

}

/* ACTIVAR CITA */

elseif(isset($_POST["activarCita"])){

    $activarCita = new AjaxCitas();

    $activarCita->activarCita = $_POST["activarCita"];

    $activarCita->activarId = $_POST["activarId"];

    $activarCita->ajaxActivarCita();

}

/* EDITAR CITA */

elseif(isset($_POST["idCita"])){

    $editar = new AjaxCitas();

    $editar->idCita = $_POST["idCita"];

    $editar->ajaxEditarCita();

}

/* ACTUALIZAR CITA */

elseif (isset($_POST["edit_id_cita"])) {

    $actualizar = new ControladorCitas();

    $actualizar -> ctrEditarCita();
    
}

/* ELIMINAR CITA */

elseif (isset($_POST["eliminarIdCita"])) {
    
    $eliminar = new ControladorCitas();

    $eliminar -> ctrBorrarCita();

}

/* MOSTRAR CITA */

else{

    $item = null;

    $valor = null;

    $citas = ControladorCitas::ctrMostrarCitas($item, $valor);

    $tblCitas = array();

    foreach($citas as $cita){

        $fila = array(
            'id_cita' => $cita["id_cita"],
            'nombre_cita' => $cita["nombre_cita"],
            'correo_cita' => $cita["correo_cita"],
            'telefono_cita' => $cita["telefono_cita"],
            'asunto_cita' => $cita["asunto_cita"],
            'fecha_cita' => $cita["fecha_cita"],
            'hora_cita' => $cita["hora_cita"],
            'estado_cita' => $cita["estado_cita"]
        );

        $tblCitas[] = $fila;

    }

    echo json_encode($tblCitas);

}
