<?php

require_once "../controladores/Sobre.nosotros.controlador.php";
require_once "../modelos/Sobre.nosotros.modelo.php";


class AjaxSobreNosotros{


    /* ====================================
    EDITAR SOBRE NOSOTROS
    ==================================== */

    public $idSn;

    public function ajaxEditaSobreNosotros(){

        $item = "id_sobre_sn";

        $valor = $this->idSn;

        $respuesta = ControladorSobreNosotros::ctrMostrarSobreNosotros($item, $valor);

        echo json_encode($respuesta);

    }


}

/* GUARDAR SOBRE NOSOTROS */

if(isset($_POST["titulo_sn"])){

    $crear = new ControladorSobreNosotros();

    $crear->ctrCrearSobreNosotros();

}

/* EDITAR SOBRE NOSOTROS */

elseif(isset($_POST["idSn"])){

    $editar = new AjaxSobreNosotros();

    $editar->idSn = $_POST["idSn"];

    $editar->ajaxEditaSobreNosotros();

}

/* ACTUALIZAR SOBRE NOSOTROS */

elseif (isset($_POST["edit_id_sobre_sn"])) {

    $actualizar = new ControladorSobreNosotros();

    $actualizar -> ctrEditarSobreNosotros();
    
}

/* ELIMINAR SOBRE NOSOTROS */

elseif (isset($_POST["eliminarIdSn"])) {
    
    $eliminar = new ControladorSobreNosotros();

    $eliminar -> ctrBorrarSobreNosotros();

}

/* MOSTRAR SOBRE NOSOTROS */

else{

    $item = null;

    $valor = null;

    $sobreNosotros = ControladorSobreNosotros::ctrMostrarSobreNosotros($item, $valor);

    $tblSobreNosotros = array();

    foreach($sobreNosotros as $sn){

        $fila = array(
            'id_sobre_sn' => $sn["id_sobre_sn"],
            'titulo_sn' => $sn["titulo_sn"],
            'imagen_sn' => $sn["imagen_sn"],
            'descripcion_sn' => $sn["descripcion_sn"]
        );

        $tblSobreNosotros[] = $fila;

    }

    echo json_encode($tblSobreNosotros);

}
