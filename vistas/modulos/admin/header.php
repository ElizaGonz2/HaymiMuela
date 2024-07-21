<div class="popup-search-box d-none d-lg-block"><button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#"><input type="text" placeholder="Buscar"> <button type="submit"><i class="fal fa-search"></i></button></form>
</div>


<div class="th-menu-wrapper">
    <div class="th-menu-area text-center"><button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo"><a href="home-medical-clinic.html"><img src="vistas/assets/img/logo.png" alt="haymimuela"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li><a href="inicio">Inicio</a></li>
                <li><a href="usuarios">Usuarios</a></li>
                <li><a href="citas">Citas</a>
                </li>
                <li><a href="sobreNosotros">Nosotros</a></li>
                <li><a href="servicios">Servicios</a></li>
                <li><a href="contactos">Contactos</a></li>
                <li class="menu-item-has-children"><a href="#">Más</a>
                    <ul class="sub-menu">
                        <li><a href="clientes">Clientes</a></li>
                        <li><a href="direciones">Direcciones</a></li>
                        <li><a href="doctores">Doctores</a></li>
                        <li><a href="mensajes">Mensajes</a></li>
                        <li><a href="galerias">Galerias</a></li>
                        <li><a href="horario">Horario antención</a></li>
                        <li><a href="redesSociales">Redes sociales</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>


<header class="th-header header-layout1">

    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <div class="logo-bg" data-bg-src="vistas/assets/img/bg/logo_bg_1.png"></div>
                            <a href="inicio"><img src="vistas/assets/img/logo.png" width="200" alt="haymimuela"></a>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-inline-block">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="inicio">Inicio</a></li>
                                <li><a href="usuarios">Usuarios</a></li>
                                <li><a href="citas">Citas</a>
                                </li>
                                <li><a href="sobreNosotros">Nosotros</a></li>
                                <li><a href="servicios">Servicios</a></li>
                                <li><a href="contactos">Contactos</a></li>
                                <li class="menu-item-has-children"><a href="#">Más</a>
                                    <ul class="sub-menu">
                                        <li><a href="clientes">Clientes</a></li>
                                        <li><a href="direciones">Direcciones</a></li>
                                        <li><a href="doctores">Doctores</a></li>
                                        <li><a href="mensajes">Mensajes</a></li>
                                        <li><a href="galerias">Galerias</a></li>
                                        <li><a href="horario">Horario antención</a></li>
                                        <li><a href="redesSociales">Redes sociales</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto">
                        <div class="header-button">
                            <button type="button" class="icon-btn searchBoxToggler d-none d-xl-inline-block"><i class="far fa-search"></i></button>
                            <div class="dropdown d-inline-block">
                                <button class="btn-sm dropdown-toggle th-btn" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php
                                    // Dividir el nombre del usuario en palabras
                                    $nombre_usuario = explode(' ', $_SESSION["nombre_usuario"]);
                                    // Mostrar solo la primera palabra
                                    echo $nombre_usuario[0];
                                ?>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                                    <li><a class="dropdown-item" href="#">Configuración</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="salir">Cerrar Sesión</a></li>
                                </ul>
                            </div>
                            <!-- <button type="button" class="icon-btn sideMenuInfo d-none d-xl-inline-block"><i class="far fa-bars"></i></button>  -->
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
