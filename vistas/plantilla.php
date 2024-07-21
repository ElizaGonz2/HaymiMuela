<?php

session_start();


include "modulos/layouts/head.php";

if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {

    include "modulos/admin/header.php";


    if (isset($_GET["ruta"])) {

        if (
            $_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "usuarios" ||
            $_GET["ruta"] == "citas" ||
            $_GET["ruta"] == "sobreNosotros" ||
            $_GET["ruta"] == "servicios" ||
            $_GET["ruta"] == "productos" ||
            $_GET["ruta"] == "contactos" ||
            $_GET["ruta"] == "salir"
        ) {

            include "modulos/admin/" . $_GET["ruta"] . ".php";
        }
    } else {

        include "modulos/admin/inicio.php";
    }



} else {

    include "modulos/header.php";

    if (isset($_GET["ruta"])) {

        if (
            $_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "sobreNosotros" ||
            $_GET["ruta"] == "servicios" ||
            $_GET["ruta"] == "productos" ||
            $_GET["ruta"] == "contactos"
        ) {

            include "modulos/" . $_GET["ruta"] . ".php";
        }
    } else {

        include "modulos/inicio.php";
    }


    include "modulos/footer.php";
}



include "modulos/layouts/footer.php";
