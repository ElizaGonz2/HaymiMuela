<div class="breadcumb-wrapper" data-bg-src="vistas/assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Sobre Nosotros</h1>
            <ul class="breadcumb-menu">
                <li><a href="inicio">Inicio</a></li>
                <li>Sobre nosotros</li>
            </ul>
        </div>
    </div>
</div>
<div class="overflow-hidden space" id="about-sec">
    <div class="shape-mockup" data-top="0" data-right="0"><img src="vistas/assets/img/shape/pattern_shape_1.png" alt="shape"></div>
    <div class="shape-mockup jump d-none d-xl-none" data-bottom="10%" data-left="2%"><img src="vistas/assets/img/shape/medicine_1.png" alt="shape"></div>

    <?php
    
    $item = null;
    $valor = null;

    $sobreNosotros = ControladorSobreNosotros::ctrMostrarSobreNosotros($item, $valor);
    foreach ($sobreNosotros as $value) {
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="title-area text-center"><span class="sub-title"><img src="vistas/assets/img/theme-img/title_icon.svg" alt="shape">Sobre nuestro consultorio</span>
                    <h2 class=""><?php echo $value["titulo_sn"]?></h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-6 mb-30 mb-xl-0">
                <div class="img-box1">
                    <div class="img1"><img src="<?php echo substr($value["imagen_sn"],3) ?>" alt="About"></div>
                    <div class="about-info style2">
                        <h3 class="box-title">Dr. Jorge Torres</h3>
                        <p class="box-text">Atendemos con dedicación.</p>
                        <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div><a href="tel:+(051) 019090122" class="box-link"><i class="fa-solid fa-phone"></i> +(051) 019090122</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="ps-xxl-4 ms-xl-2 text-center text-xl-start">
                    <div class="title-area mb-32">
                        <p class="sec-text mt-n2">
                            <?php echo $value["descripcion_sn"]?>
                        </p>
                    </div>
                    <div class="mb-25 mt-n1">
                        <div class="checklist style2 list-two-column">
                            <ul>
                                <li><i class="fas fa-heart-pulse"></i> Profesionales médicos</li>
                                <li><i class="fas fa-heart-pulse"></i> Instalaciones y equipos modernos</li>
                                <li><i class="fas fa-heart-pulse"></i> Cuidados de emergencia</li>
                                <li><i class="fas fa-heart-pulse"></i> Consultoría Dental</li>
                            </ul>
                        </div>
                    </div>
                    <div><a href="sobreNosotros" class="th-btn">Más acerca de nosotros</a></div>
                    <div class="about-video-wrap">
                        <div class="th-video about-video"><img src="vistas/assets/img/normal/doctor_3.png" alt="video"> <a href="./VIDEO/NOSOTROS.mp4" class="play-btn popup-video"><i class="fas fa-play"></i></a></div>
                        <div class="box-content">
                            <p class="box-text">Ofrecemos opciones de programación de citas flexibles para adaptarse a tu estilo de vida ocupado. Tu salud y bienestar son nuestras principales prioridades.</p>
                            <div class="about-contact-wrap">
                                <div class="about-contact">
                                    <p class="box-label">Atención:9 a 6pm</p>
                                    <h3 class="box-title"><i class="fal fa-envelope"></i> <a href="mailto:info@Hay mi muela-dental.com">info@Hay mi muela-dental.com</a></h3>
                                </div>
                                <div class="about-contact">
                                    <p class="box-label">Horario en línea</p>
                                    <h3 class="box-title"><i class="fal fa-calendar-alt"></i> <a href="contact.html">Reserva</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>

</div>
<div class="z-index-common" data-pos-for="#why-sec" data-sec-pos="bottom-half">
    <div class="container">
        <div class="counter-card-wrap bg-theme2">
            <div class="counter-card">
                <h2 class="box-number text-white"><span class="number"><span class="counter-number">69</span>k</span><span class="plus">+</span></h2>
                <p class="box-text text-white">Pacientes Satisfechos</p>
            </div>
            <div class="divider"></div>
            <div class="counter-card">
                <h2 class="box-number text-white"><span class="number"><span class="counter-number">2</span></span><span class="plus">+</span></h2>
                <p class="box-text text-white">Médicos Profesionales</p>
            </div>
            <div class="divider"></div>
            <div class="counter-card">
                <h2 class="box-number text-white"><span class="number"><span class="counter-number">19</span>k</span><span class="plus">+</span></h2>
                <p class="box-text text-white">Cirugías Ambulatorias</p>
            </div>
            <div class="divider"></div>
            <div class="counter-card">
                <h2 class="box-number text-white"><span class="number"><span class="counter-number">100</span></span><span class="plus">+</span></h2>
                <p class="box-text text-white">Servicios Sociales</p>
            </div>
            <div class="divider"></div>
        </div>
    </div>
</div>
<section class="why-sec3 space-top" id="why-sec" data-bg-src="vistas/assets/img/bg/why_bg_3.jpg">
    <div class="container pb-5 mb-2">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="title-area text-center"><span class="sub-title"><img src="vistas/assets/img/theme-img/title_icon.svg" alt="shape">Por qué elegirnos</span>
                    <h2 class="">Contamos con 8 años de experiencia en <s></s>servicios Médicos de Salud</h2>
                </div>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-xl-3 col-sm-6">
                <div class="why-feature" data-bg-src="vistas/assets/img/bg/why_feature_bg.png">
                    <div class="box-icon"><img src="vistas/assets/img/icon/choose_feature_1.svg" alt="icon"></div>
                    <h3 class="box-title">Médico con experiencia</h3>
                    <p class="box-text">La experiencia en medicina no se limita a las habilidades
                                        técnicas y cognitivas, sino que también abarca aspectos 
                                        éticos y humanísticos.</p>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="why-feature" data-bg-src="vistas/assets/img/bg/why_feature_bg.png">
                    <div class="box-icon"><img src="vistas/assets/img/icon/choose_feature_2.svg" alt="icon"></div>
                    <h3 class="box-title">Tratamiento indoloro</h3>
                    <p class="box-text">Los pacientes han experimentado el tratamiento indoloro sostenido por un espacio
                                        de tiempo.</p>
                </div>
            </div>
                  
            <div class="col-xl-3 col-sm-6">
                <div class="why-feature" data-bg-src="vistas/assets/img/bg/why_feature_bg.png">
                    <div class="box-icon"><img src="vistas/assets/img/icon/choose_feature_4.svg" alt="icon"></div>
                    <h3 class="box-title">Servicios Médicos</h3>
                    <p class="box-text">Los servicios médicos de prevención,son fundamentales para identificar
                                        y abordar problemas de salud antes de que se conviertan en condiciones graves. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
