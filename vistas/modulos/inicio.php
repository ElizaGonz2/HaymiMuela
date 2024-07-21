<!-- SLIDER HERO -->
<div class="th-hero-wrapper hero-7" id="hero">
    <div class="swiper th-slider" id="heroSlide7" data-slider-options='{"effect":"fade","autoHeight":true}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="shape-mockup jump shape-1" data-top="12%" data-left="5%">
                        <img src="vistas/assets/img/hero/hero_shape_8_1.svg" alt="shape" />
                    </div>
                    <div class="th-hero-bg" data-bg-src="vistas/assets/img/hero/hero_bg_7_1.jpg"></div>
                    <div class="container">
                        <div class="hero-style7">
                            <span class="sub-title4" data-ani="slideinup" data-ani-delay="0.2s"><img src="vistas/assets/img/theme-img/title_icon.svg" alt="shape" />Elevando sonrisas</span>
                            <h1 class="hero-title">
                                <span class="title1" data-ani="slideinup" data-ani-delay="0.3s">Explorando el mundo de</span>
                                <span class="title2" data-ani="slideinup" data-ani-delay="0.4s">Odontología Estética</span>
                            </h1>
                            <div class="hero-feature-wrap" data-ani="slideinup" data-ani-delay="0.5s">
                                <div class="hero-feature">
                                    <div class="box-icon">
                                        <img src="vistas/assets/img/hero/hero_shape_7_1.svg" alt="icon" />
                                    </div>
                                    <h3 class="box-title">Blanqueado<br />de dientes</h3>
                                </div>
                                <div class="hero-feature">
                                    <div class="box-icon">
                                        <img src="vistas/assets/img/hero/hero_shape_7_2.svg" alt="icon" />
                                    </div>
                                    <h3 class="box-title">Cambio de<br />imagen de sonrisa</h3>
                                </div>
                            </div>
                            <div class="btn-group justify-content-center" data-ani="slideinup" data-ani-delay="0.6s">
                                <a href="contactos" class="th-btn shadow-1">Contacto</a>
                                <a href="servicios" class="th-btn style2 shadow-1">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="hero-img" data-ani="slideinright" data-ani-delay="0.5s">
                        <img src="vistas/assets/img/hero/hero_7_1.png" alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-appointment-wrap">
        <div class="container">
            <form action="https://html.themeholy.com/mediax/demo/mail.php" method="POST" class="hero-appointment">
                <div class="row">
                    <div class="form-group col-lg-3 col-sm-6">

                    </div>
                    <div class="form-group col-lg-3 col-sm-6">
                        <select name="subject" id="subject" class="form-select">
                            <option value disabled="disabled" selected="selected" hidden>

                        </select>
                        <i class="fal fa-chevron-down"></i>
                    </div>
                    <div class="form-group col-lg-3 col-sm-6">

                    </div>
                    <div class="form-btn col-lg-3 col-sm-6">

                    </div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
            </form>
        </div>
    </div>
</div>

<!-- SOBRE NOSOTROS -->
<?php
$item = null;
$valor = null;

$sobreNosotros = ControladorSobreNosotros::ctrMostrarSobreNosotros($item, $valor);

foreach ($sobreNosotros as $sn) {
?>
    <div class="space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="img-box8">
                        <img src="vistas/assets/img/normal/about_6_1.png" alt="About" />
                    </div>
                </div>
                <div class="col-xl-6 mt-30 mt-xl-0 text-center text-xl-start">
                    <div class="title-area mb-32">
                        <span class="sub-title4"><img src="vistas/assets/img/theme-img/title_icon.svg" alt="shape" />Acerca de Hay mi muela</span>
                        <h2 class="sec-title"><?php echo $sn["titulo_sn"] ?></h2>
                        <p class="sec-text">
                            <?php echo $sn["descripcion_sn"] ?>
                        </p>
                    </div>
                    <div class="mb-35 mt-n1">
                        <div class="checklist style2 list-two-column">
                            <ul>
                                <li>
                                    <i class="fas fa-tooth"></i> Instalaciones dentales avanzadas
                                </li>
                                <li>
                                    <i class="fas fa-tooth"></i> Soluciones innovadoras en odontología
                                </li>
                                <li>
                                    <i class="fas fa-tooth"></i> Nuestro enfoque centrado en el paciente
                                </li>
                                <li>
                                    <i class="fas fa-tooth"></i> Mantener una salud bucal óptima
                                </li>
                                <li>
                                    <i class="fas fa-tooth"></i> Nuestro compromiso con la excelencia
                                </li>
                                <li>
                                    <i class="fas fa-tooth"></i>Accesibilidad del personal de apoyo
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div><a href="sobreNosotros" class="th-btn style4">Ver más</a></div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
<!-- NUESTROS SERVICIOS -->
<section class="space" id="service-sec" data-bg-src="vistas/assets/img/bg/service_bg_7.jpg">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title4"><img src="vistas/assets/img/theme-img/title_icon.svg" alt="shape" />NUESTROS SERVICIOS</span>
            <h2 class="sec-title">Servicios de odontología estética</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="serviceSlider4" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="service-element">
                            <div class="box-icon">
                                <img src="vistas/assets/img/icon/service_element_1.svg" alt="Icon" />
                            </div>
                            <h3 class="box-title">
                                <a href="service-details.html">BLANQUEAMIENTO DENTAL </a>
                            </h3>
                            <p class="box-text"></p>
                            <a href="servicios" class="th-btn btn-sm style2">Ver más</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="service-element">
                            <div class="box-icon">
                                <img src="vistas/assets/img/icon/service_element_2.svg" alt="Icon" />
                            </div>
                            <h3 class="box-title">
                                <a href="service-details.html">CARILLAS DE PORCELANA</a>
                            </h3>
                            <p class="box-text"></p>
                            <a href="servicios" class="th-btn btn-sm style2">Ver más</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-element">
                            <div class="box-icon">
                                <img src="vistas/assets/img/icon/service_element_3.svg" alt="Icon" />
                            </div>
                            <h3 class="box-title">
                                <a href="service-details.html">BRACKETS ORTODONCIA</a>
                            </h3>
                            <p class="box-text"></p>
                            <a href="servicios" class="th-btn btn-sm style2">Ver más</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-element">
                            <div class="box-icon">
                                <img src="vistas/assets/img/icon/service_element_1.svg" alt="Icon" />
                            </div>
                            <h3 class="box-title">
                                <a href="service-details.html">BLANQUEAMIENTO DENTAL</a>
                            </h3>
                            <p class="box-text"></p>
                            <a href="servicios" class="th-btn btn-sm style2">Ver más</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-element">
                            <div class="box-icon">
                                <img src="vistas/assets/img/icon/service_element_2.svg" alt="Icon" />
                            </div>
                            <h3 class="box-title">
                                <a href="service-details.html">CARILLAS DE PORCELANA</a>
                            </h3>
                            <p class="box-text"></p>
                            <a href="servicios" class="th-btn btn-sm style2">Ver más</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-element">
                            <div class="box-icon">
                                <img src="vistas/assets/img/icon/service_element_3.svg" alt="Icon" />
                            </div>
                            <h3 class="box-title">
                                <a href="service-details.html">BRACKETS ORTODONCIA</a>
                            </h3>
                            <p class="box-text"></p>
                            <a href="servicios" class="th-btn btn-sm style2">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            <button data-slider-prev="#serviceSlider4" class="slider-arrow slider-prev">
                <i class="far fa-arrow-left"></i>
            </button>
            <button data-slider-next="#serviceSlider4" class="slider-arrow slider-next">
                <i class="far fa-arrow-right"></i>
            </button>
        </div>
    </div>
</section>

<!-- CANTIDAD DE PERSONAS -->
<div class="z-index-common" data-pos-for="#service-sec" data-sec-pos="top-half">
    <div class="container">
        <div class="counter-card-wrap rounded-20" data-bg-src="vistas/assets/img/bg/counter_bg_5.jpg" data-overlay="title" data-opacity="9">
            <div class="counter-card">
                <h2 class="box-number">
                    <span class="number"><span class="counter-number">69</span>k</span><span class="plus">+</span>
                </h2>
                <p class="box-text">Pacientes satisfechos</p>
            </div>
            <div class="divider"></div>
            <div class="counter-card">
                <h2 class="box-number">
                    <span class="number"><span class="counter-number">2</span></span><span class="plus">+</span>
                </h2>
                <p class="box-text">Médicos Profesionales</p>
            </div>
            <div class="divider"></div>
            <div class="counter-card">
                <h2 class="box-number">
                    <span class="number"><span class="counter-number">19</span>k</span><span class="plus">+</span>
                </h2>
                <p class="box-text">Cirugias ambulatorias</p>
            </div>
            <div class="divider"></div>
            <div class="counter-card">
                <h2 class="box-number">
                    <span class="number"><span class="counter-number">100</span></span><span class="plus">+</span>
                </h2>
                <p class="box-text">Servicios sociales</p>
            </div>
            <div class="divider"></div>
        </div>
    </div>
</div>

<!-- GALERIA -->
<div class="space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title4"><img src="vistas/assets/img/theme-img/title_icon.svg" alt="shape" />Casos de cartera</span>
            <h2 class="sec-title">Nuestra galería de sonrisas</h2>
        </div>
        <div class="row gy-4 masonary-active gallery-row2">
            <div class="filter-item col-xl-auto col-md-6">
                <div class="gallery-card style2">
                    <div class="box-img">
                        <img src="vistas/assets/img/gallery/gallery_2_1.jpg" alt="gallery image" />
                        <div class="shape">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                    </div>
                    <div class="box-content">
                        <a href="vistas/assets/img/gallery/gallery_2_1.jpg" class="icon-btn style2 popup-image"><i class="far fa-eye"></i></a>
                        <h3 class="box-title">Aparatos Dentales</h3>
                        <p class="box-text">
                            Los aparatos dentales son diseñados para corregir,tipos de anomalías
                            relacionadas con la incorrecta distribución de las piezas dentales.

                        </p>
                    </div>
                </div>
            </div>
            <div class="filter-item col-xl-auto col-md-6">
                <div class="gallery-card style2">
                    <div class="box-img">
                        <img src="vistas/assets/img/gallery/gallery_2_2.jpg" alt="gallery image" />
                        <div class="shape">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                    </div>
                    <div class="box-content">
                        <a href="vistas/assets/img/gallery/gallery_2_2.jpg" class="icon-btn style2 popup-image"><i class="far fa-eye"></i></a>
                        <h3 class="box-title">Blanqueamiento Dental</h3>
                        <p class="box-text">
                            En la odontología estética,el blanqueamiento dental es un tratamiento que logra
                            reducir varios tonos amarillentos,dejando los dientes más blancos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="filter-item col-xl-auto col-md-6">
                <div class="gallery-card style2">
                    <div class="box-img">
                        <img src="vistas/assets/img/gallery/gallery_2_3.jpg" alt="gallery image" />
                        <div class="shape">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                    </div>
                    <div class="box-content">
                        <a href="vistas/assets/img/gallery/gallery_2_3.jpg" class="icon-btn style2 popup-image"><i class="far fa-eye"></i></a>
                        <h3 class="box-title">Canal Raíz</h3>
                        <p class="box-text">
                            Se refiere al tejido blando dentro de un diente, que generalmente contiene los nervios del diente.
                            Este tejido se encuentra principalmente debajo de la encía en las «raíces» del diente.
                        </p>
                    </div>
                </div>
            </div>
            <div class="filter-item col-xl-auto col-md-6">
                <div class="gallery-card style2">
                    <div class="box-img">
                        <img src="vistas/assets/img/gallery/gallery_2_4.jpg" alt="gallery image" />
                        <div class="shape">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                    </div>
                    <div class="box-content">
                        <a href="vistas/assets/img/gallery/gallery_2_4.jpg" class="icon-btn style2 popup-image"><i class="far fa-eye"></i></a>
                        <h3 class="box-title">Limpieza Dental</h3>
                        <p class="box-text">
                            La limpieza dental es parte de la higuiene oral e involucra la remocion del sarro
                            de los dientes y prevenir enfermedades peridontales.
                        </p>
                    </div>
                </div>
            </div>
            <div class="filter-item col-xl-auto col-md-6">
                <div class="gallery-card style2">
                    <div class="box-img">
                        <img src="vistas/assets/img/gallery/gallery_2_5.jpg" alt="gallery image" />
                        <div class="shape">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                    </div>
                    <div class="box-content">
                        <a href="vistas/assets/img/gallery/gallery_2_5.jpg" class="icon-btn style2 popup-image"><i class="far fa-eye"></i></a>
                        <h3 class="box-title">Empaste Dental</h3>
                        <p class="box-text">
                            El empaste dental,es el procedimiento que se realiza para tratar una caries en su
                            fase inicial.Se elimina la caries de la pieza afectada se limpia y rellena con el empaste.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- HACER UNA CITA -->
<div class="bg-smoke space" data-bg-src="vistas/assets/img/bg/pattern_bg_8.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="pe-xxl-5 mb-40 mb-xl-0">
                    <div class="comparison-dental">
                        <div class="comparison-img">
                            <div class="img background-img" data-bg-src="vistas/assets/img/normal/before_2.jpg"></div>
                            <div class="img foreground-img" data-bg-src="vistas/assets/img/normal/after_2.jpg"></div>
                            <input type="range" min="1" max="100" value="50" class="compslider" name="compslider" id="compslider" />
                            <div class="slider-button" style="left: calc(50% - 28px)"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-6">

                <form class="faq-form2" id="form_cita_cliente">
                    <h4 class="box-title text-center">Haga una cita</h4>
                    <div class="row">

                        <!-- Ingreso de nombre -->
                        <div class="form-group col-12">
                            <input type="text" class="form-control" name="ing_nombre_cita" id="ing_nombre_cita" placeholder="Tu nombre" />
                            <i class="fal fa-user"></i>
                        </div>
                        <small class="text-danger" id="ec_nombre_cita"></small>

                        <!-- Ingreso de correo -->
                        <div class="form-group col-12">
                            <input type="text" class="form-control" name="ing_correo_cita" id="ing_correo_cita" placeholder="Correo electrónico" />
                            <i class="fal fa-envelope"></i>
                        </div>
                        <small class="text-danger" id="ec_correo_cita"></small>

                        <!-- Ingreso de telefono -->
                        <div class="form-group col-12">
                            <input type="text" class="form-control" name="ing_telefono_cita" id="ing_telefono_cita" placeholder="Teléfono" />
                            <i class="fal fa-phone"></i>
                        </div>
                        <small class="text-danger" id="ec_telefono_cita"></small>

                        <!-- Ingreso de asunto -->
                        <div class="form-group col-12">
                            <select name="subject" id="ing_asunto_cita" class="form-select">
                                <option value="">Seleccionar asunto</option>
                                <option value="limpieza">Limpieza Dental</option>
                                <option value="revision">Revisión General</option>
                                <option value="ortodoncia">Consulta de Ortodoncia</option>
                                <option value="blanqueamiento">Blanqueamiento Dental</option>
                                <option value="implante">Implante Dental</option>
                                <option value="endodoncia">Endodoncia</option>
                                <option value="emergencia">Emergencia Dental</option>
                                <option value="otro">Otro</option>
                            </select>

                            <i class="fal fa-chevron-down"></i>
                        </div>
                        <small class="text-danger" id="ec_asunto_cita"></small>

                        <!-- Ingreso de fecha -->
                        <div class="form-group col-6">
                            <input type="text" class="date-pick form-control" name="date" id="ing_fecha_cita" placeholder="Fecha" />
                            <i class="fal fa-calendar"></i>
                        </div>
                        <small class="text-danger" id="ec_fecha_cita"></small>

                        <!-- Ingreso de la hora -->
                        <div class="form-group col-6">
                            <input type="text" class="time-pick form-control" name="time" id="ing_hora_cita" placeholder="Hora" />
                            <i class="fal fa-clock"></i>
                        </div>
                        <small class="text-danger" id="ec_hora_cita"></small>

                        <!-- Boton para guardar la cita -->
                        <div class="form-btn col-12">
                            <button class="th-btn btn-fw" id="btn_guardar_cita_cliente">RESERVAR UNA CITA</button>
                        </div>

                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- DENTISTAS -->
<section class="space">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md">
                <div class="title-area text-center text-md-start">
                    <span class="sub-title4"><img src="vistas/assets/img/theme-img/title_icon.svg" alt="shape" />Nuestro equipo de experiencia</span>
                    <h2 class="sec-title">Conozca a nuestro Dentista</h2>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="sec-btn">
                    <a href="https://www.google.com/search?q=los+20+mjores+dentistas+de+lima&sca_esv=5be91180a9a77bb4&sca_upv=1&hl=es&ei=F0qUZt6DNtOIwbkPpOu1wAM&ved=0ahUKEwie68u8w6eHAxVTRDABHaR1DTgQ4dUDCA8&oq=los+20+mjores+dentistas+de+lima&gs_lp=Egxnd3Mtd2l6LXNlcnAiH2xvcyAyMCBtam9yZXMgZGVudGlzdGFzIGRlIGxpbWEyBBAhGApI71dQ_gtYgElwAHgCkAEAmAGSA6ABmh-qAQgyLTEyLjIuMbgBDMgBAPgBAZgCCaAC6hDCAgQQABhHwgIGEAAYBxgewgIIEAAYgAQYogSYAwDiAwUSATEgQIgGAZAGCJIHBzEuMC42LjKgB4Y8&sclient=gws-wiz-serp" class="th-btn style4" target="_blank">Ver más dentistas</a>
                </div>
            </div>
        </div>

        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="teamSlider4" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":2},"992":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide d-flex justify-content-center">
                        <div class="th-team team-block style2 text-center">
                            <div class="box-img">
                                <img src="vistas/assets/img/team/doctor2.jpg" alt="Team" />
                            </div>
                            <div class="team-social">
                                <div class="social-links">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <button class="icon-btn">
                                    <i class="fas fa-link"></i>
                                </button>
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">
                                    <a href="team-details.html">Dr.Jorge Torres</a>
                                </h3>
                                <p class="box-text">Especialista Ortodoncista</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#teamSlider4" class="slider-arrow slider-prev">
                <i class="far fa-arrow-left"></i>
            </button>
            <button data-slider-next="#teamSlider4" class="slider-arrow slider-next">
                <i class="far fa-arrow-right"></i>
            </button>
        </div>


    </div>
</section>

<!-- TESTIMONIOS -->
<section class="space d-flex justify-content-center align-items-center" id="testi-sec" data-bg-src="vistas/assets/img/bg/testi_bg_6.jpg" style="min-height: 100vh;">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="pe-xxl-5 mb-40 mb-xl-0">
                    <div class="title-area mb-32">
                        <span class="sub-title4">
                            <img src="vistas/assets/img/theme-img/title_icon.svg" alt="shape" />
                            "HAY MI MUELA"
                        </span>
                        <h2 class="sec-title text-white">Casi creativo presenta:</h2>
                        <p class="sec-text text-white">
                            Embárcate en un viaje fantástico en donde aprenderás la importancia de conocer
                            tu boca y los cuidados que debes tener para evitar enfermedades periodentales.
                            Nuestros pacientes son la razón de nuestra satisfacción, es por ello que queremos
                            verlos con una gran sonrisa.
                        </p>
                    </div>
                    <div class="btn-group justify-content-center">
                        <div class="icon-box">
                            <div class="th-video about-video">
                                <img src="vistas/assets/img/normal/about_1_4.jpg" alt="video">
                                <a href="https://www.youtube.com/watch?v=BSPIH1mlNJs" class="play-btn popup-video">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- SLIDER DE MARCAS O ENTIDADES -->
<div class="z-index-common" data-pos-for="#testi-sec" data-sec-pos="top-half">
    <div class="container">
        <div class="brand-box-wrap" data-bg-src="vistas/assets/img/bg/pattern_bg_2.png">
            <div class="swiper th-slider" id="brandSlider2" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"420":{"slidesPerView":"3"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"5"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="vistas/assets/img/brand/brand_2_1.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="vistas/assets/img/brand/brand_2_2.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="vistas/assets/img/brand/brand_2_3.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="vistas/assets/img/brand/brand_2_4.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="vistas/assets/img/brand/brand_2_5.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="vistas/assets/img/brand/brand_2_6.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="vistas/assets/img/brand/brand_2_7.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="vistas/assets/img/brand/brand_2_8.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="vistas/assets/img/brand/brand_2_1.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="vistas/assets/img/brand/brand_2_2.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="vistas/assets/img/brand/brand_2_3.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="vistas/assets/img/brand/brand_2_4.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="vistas/assets/img/brand/brand_2_5.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="vistas/assets/img/brand/brand_2_6.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="vistas/assets/img/brand/brand_2_7.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="vistas/assets/img/brand/brand_2_8.svg" alt="Brand Logo" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- PREGUNTAS COMUNES -->
<div class="space" id="faq-sec">
    <div class="container">
        <div class="row gy-40 align-items-center">
            <div class="col-xl-6">
                <div class="pe-xxl-5">
                    <div class="faq-img2">
                        <img src="vistas/assets/img/normal/faq_2_2.jpg" alt="faq" />

                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="title-area text-center text-xl-start">
                    <span class="sub-title4"><img src="vistas/assets/img/theme-img/title_icon.svg" alt="shape" />Preguntas comunes</span>
                    <h2 class="">
                        Preguntas sobre estética dental y salud bucal.
                    </h2>
                </div>
                <div class="accordion active-white" id="faqAccordion6">
                    <div class="accordion-card active">
                        <div class="accordion-header" id="collapse-item-1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                ¿Por qué debería elegir nuestro Consultorio Dental?
                            </button>
                        </div>
                        <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion6">
                            <div class="accordion-body">
                                <p class="faq-text">
                                    Nuestro consultorio se dedica a brindar servicios excepcionales de odontología estética con un enfoque directo con el paciente.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                ¿Qué servicios de odontología estética ofrecen?
                            </button>
                        </div>
                        <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion6">
                            <div class="accordion-body">
                                <p class="faq-text">
                                    Ofrecemos una amplia gama de servicios de odontología estética, incluyendo blanqueamiento dental, carillas y más.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                ¿Cuánto tiempo dura un blanqueamieno dental?
                            </button>
                        </div>
                        <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion6">
                            <div class="accordion-body">
                                <p class="faq-text">
                                    La duración de un blanqueamiento dental puede variar según el estado de las piezas dentales.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                ¿Cómo puedo programar una cita?
                            </button>
                        </div>
                        <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion6">
                            <div class="accordion-body">
                                <p class="faq-text">
                                    Puedes programar una cita llamando a nuestro consultorio,visitando nuestro sitio web, o pasando al consultorio en el horario de atención.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Agregar más tarjetas de preguntas aquí si es necesario -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- NOTICIAS DE BLOG -->
<section class="blog-sec7 space-bottom" id="blog-sec">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-center align-items-center">
            <div class="col-lg">
                <div class="title-area text-center text-lg-start">
                    <span class="sub-title"><img src="vistas/assets/img/theme-img/title_icon.svg" alt="shape" />Nuestras noticias y blog</span>
                    <h2 class="">Noticias y consejos sobre odontología estética</h2>
                </div>
            </div>
            <div class="col-lg-auto d-none d-lg-block">
                <div class="sec-btn">
                    <a href="#" class="th-btn">Ver todas las publicaciones</a>
                </div>
            </div>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="blogSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":2},"992":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="vistas/assets/img/blog/blog_6_1.jpg" alt="Imagen del blog" />
                                <a href="blog.html" class="blog-dete1"><span class="date">15</span>Mar</a>
                            </div>
                            <div class="blog-content">
                                <h3 class="box-title">
                                <a href="blog-details.html">¿QUÉ COMER PARA TENER UNA SONRISA SALUDABLE?  Descubre </a>
                                </h3>
                                <a href="https://haymimuela.blogspot.com/p/que-comer-para-tener-una-sonrisa.html" class="th-btn btn-sm">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="vistas/assets/img/blog/blog_6_2.jpg" alt="Imagen del blog" />
                                <a href="blog.html" class="blog-dete1"><span class="date">16</span>Mar</a>
                            </div>
                            <div class="blog-content">
                                <h3 class="box-title">
                                    <a href="blog-details.html">8 CONSEJOS PRÁCTICOS PARA CUIDAR TUS DIENTES</a>
                                </h3>
                                <a href="https://haymimuela.blogspot.com/p/8-consejos-practicos-para-cuidar-tus.html" class="th-btn btn-sm">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="vistas/assets/img/blog/blog_6_3.jpg" alt="Imagen del blog" />
                                <a href="blog.html" class="blog-dete1"><span class="date">17</span>Mar</a>
                            </div>
                            <div class="blog-content">
                                <h3 class="box-title">
                                    <a href="blog-details.html">CUIDA LOS DIENTES DE TUS HIJOS </a>
                                </h3>
                                <a href="https://haymimuela.blogspot.com/p/cuida-los-dientes-de-tus-hijos-es.html" class="th-btn btn-sm">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="vistas/assets/img/blog/blog_6_1.jpg" alt="Imagen del blog" />
                                <a href="blog.html" class="blog-dete1"><span class="date">19</span>Mar</a>
                            </div>
                            <div class="blog-content">
                                <h3 class="box-title">
                                    <a href="blog-details.html">Cual es la manera de cuidar mis dientes siendo adulto</a>
                                </h3>
                                <a href="https://haymimuela.blogspot.com/p/cual-es-la-mejor-manera-de-cuidar-mis.html" class="th-btn btn-sm">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="vistas/assets/img/blog/blog_6_2.jpg" alt="Imagen del blog" />
                                <a href="blog.html" class="blog-dete1"><span class="date">15</span>Mar</a>
                            </div>
                            <div class="blog-content">
                                <h3 class="box-title">
                                    <a href="blog-details.html">Estrategias contra la intrusión corporativa en la atención médica</a>
                                </h3>
                                <a href="blog-details.html" class="th-btn btn-sm">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="vistas/assets/img/blog/blog_6_3.jpg" alt="Imagen del blog" />
                                <a href="blog.html" class="blog-dete1"><span class="date">16</span>Mar</a>
                            </div>
                            <div class="blog-content">
                                <h3 class="box-title">
                                    <a href="blog-details.html">Transforma tu nutrición con comidas orgánicas</a>
                                </h3>
                                <a href="blog-details.html" class="th-btn btn-sm">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button data-slider-prev="#blogSlider1" class="slider-arrow slider-prev">
                <i class="far fa-arrow-left"></i>
            </button>
            <button data-slider-next="#blogSlider1" class="slider-arrow slider-next">
                <i class="far fa-arrow-right"></i>
            </button>
        </div>
    </div>
</section>