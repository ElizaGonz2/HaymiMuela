<?php

require_once "controladores/Plantilla.controlador.php";

require_once "controladores/Usuario.controlador.php";
require_once "controladores/Cita.controlador.php";
require_once "controladores/Sobre.nosotros.controlador.php";

require_once "modelos/Usuario.modelo.php";
require_once "modelos/Cita.modelo.php";
require_once "modelos/Sobre.nosotros.modelo.php";


$plantilla = new ControladorPlantilla();

$plantilla->ctrPlantilla();
