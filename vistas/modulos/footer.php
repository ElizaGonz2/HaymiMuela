<footer class="footer-wrapper footer-layout1 footer-layout4" data-bg-src="vistas/assets/img/bg/footer_bg_4_1.jpg">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                <a href="home-medical-clinic.html"><img src="vistas/assets/img/logo-blanco.png" alt="Clínica Dental" /></a>
                            </div>
                            <p class="about-text">
                                Suscríbase hoy a nuestro boletín informativo para recibir las últimas noticias y consejos sobre salud dental.
                            </p>
                            <p class="footer-info">
                                <i class="fal fa-location-dot"></i> Av.Central cdra.5 Nro.1421-Mariscal Caceres
                            </p>
                            <p class="footer-info">
                                <i class="fal fa-envelope"></i>
                                <a href="mailto:info@consultorio-dental.com" class="info-box_link">info@Hay mi muela-dental.com</a>
                            </p>
                            <p class="footer-info">
                                <i class="fal fa-phone"></i>
                                <a href="tel:+(051) 019090122" class="info-box_link">+(051) 019090122</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Enlaces Rápidos</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="about.html">Sobre Nosotros</a></li>
                                <li><a href="about.html">Términos de Uso</a></li>
                                <li><a href="service.html">Nuestros Servicios</a></li>
                                <li><a href="faq.html">Ayuda y Preguntas Frecuentes</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="about.html">Política de Privacidad</a></li>
                                <li><a href="contact.html">Contáctenos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Servicios Populares</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="service-details.html">Blanqueamiento dental</a></li>
                                <li><a href="service-details.html">Control y cuidado de los Brackets</a></li>
                                <li><a href="service-details.html">Cuidado de la salud bucal</a></li>
                                <li><a href="service-details.html">Departamento de consultas</a></li>
                                <li><a href="service-details.html">Descarte de halitosis</a></li>
                                <li><a href="service-details.html">Limpieza dental</a></li>
                                <li><a href="service-details.html">Servicios varios</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Mantente en Contacto</h3>
                        <div class="newsletter-widget">
                            <p class="footer-text">Suscríbete a nuestro boletín</p>
                            <form action="#" class="newsletter-form">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Ingresa tu Correo" required />
                                </div>
                                <button type="submit" class="simple-icon">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </button>
                            </form>
                            <div class="form-group">
                                <input type="checkbox" id="checkbox" name="checkbox" />
                                <label for="checkbox">Estoy de acuerdo con los términos y condiciones</label>
                            </div>
                            <div class="btn-group">
                                <a href="https://play.google.com/" class="img-btn"><img src="vistas/assets/img/normal/apple_store.png" alt="icon" /></a>
                                <a href="https://play.google.com/" class="img-btn"><img src="vistas/assets/img/normal/play_store.png" alt="icon" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row gy-2 align-items-center">
                <div class="col-md-7">
                    <p class="copyright-text">
                        Copyright <i class="fal fa-copyright"></i> 2024
                        <a href="inicio">Consultaoria dental "Hay mi muela"</a>.
                        Todos los derechos reservados.
                    </p>
                </div>
                <div class="col-md-5 text-center text-md-end">
                    <div class="th-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="chatbox" class="position-fixed bottom-0 end-0 p-3" style="z-index: 1050;">
  <div class="card">
    <div class="card-header">
      Chat
      <button type="button" class="btn-close float-end" aria-label="Close"></button>
    </div>
    <div id="chat-messages" class="card-body">
      <!-- Mensajes del chat se añadirán aquí -->
    </div>
    <div class="card-footer">
      <form id="chat-form">
        <div class="input-group">
          <input type="text" id="chat-input" class="form-control" placeholder="Escribe un mensaje...">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {

    // Manejo del botón de cerrar
    $('#chatbox .btn-close').click(function() {
      $('#chatbox').hide();
    });

    // Función para enviar mensaje
    $('#chat-form').submit(function(e) {
      e.preventDefault();
      var message = $('#chat-input').val().trim();
      if (message !== '') {
        addMessage('Usuario', message);
        setTimeout(function() {
          respondToUser(message);
        }, 1000); // Simular respuesta después de 1 segundo
        $('#chat-input').val('');
      }
    });

    // Función para añadir mensaje al chatbox
    function addMessage(sender, message) {
      var messageHtml = '<div class="mb-2"><strong>' + sender + ':</strong> ' + message + '</div>';
      $('#chat-messages').append(messageHtml);
      scrollToBottom();
    }

    // Función para responder al usuario (respuesta simulada)
    function respondToUser(message) {
      var response = getResponse(message);
      addMessage('bot', response);
    }

    // Función para obtener una respuesta simulada
    function getResponse(message) {
      message = message.toLowerCase();
      if (message.includes('hola')) {
        return '¡Hola! ¿Cómo puedo ayudarte?';
      } else if (message.includes('precio')) {
        return 'El precio depende del proyecto. Detalles, por favor.';
      } else if (message.includes('adiós')) {
        return '¡Hasta luego! Buen día.';
      } else if (message.includes('cita')) {
        return 'Puedes pedir cita llamando o en nuestro sitio web.';
      } else if (message.includes('horarios')) {
        return 'De lunes a viernes 8 AM - 6 PM, sábados 8 AM - 1 PM.';
      } else if (message.includes('seguros')) {
        return 'Sí, aceptamos la mayoría de seguros dentales.';
      } else if (message.includes('limpieza dental')) {
        return 'Desde [precio base] la limpieza dental.';
      } else if (message.includes('emergencia dental')) {
        return 'Servicio de emergencias fuera de horario disponible.';
      } else if (message.includes('ortodoncia')) {
        return 'Varía según el caso, entre [X meses] y [X años].';
      } else if (message.includes('miedo al dentista')) {
        return 'Ofrecemos sedación y un ambiente amigable.';
      } else if (message.includes('tecnologías')) {
        return 'Utilizamos tecnología avanzada como [nombrar tecnologías].';
      } else if (message.includes('financiamiento')) {
        return 'Planes de financiamiento disponibles.';
      } else if (message.includes('revisión dental')) {
        return 'Recomendamos cada 6 meses.';
      } else if (message.includes('dolor de muelas')) {
        return 'Llámanos para una evaluación.';
      } else if (message.includes('higiene dental')) {
        return 'Cepilla 2 veces, usa hilo dental y evita azúcares.';
      } else if (message.includes('primera visita al dentista')) {
        return 'Recomendamos tan pronto salgan los primeros dientes o al año de edad.';
      } else if (message.includes('diente roto')) {
        return 'Guarda el fragmento y llama para instrucciones.';
      } else if (message.includes('tratamientos cosméticos')) {
        return 'Ofrecemos carillas e implantes para mejorar estética.';
      } else if (message.includes('quiero contactar con alguien')) {
        return 'Aquí te dejo el numero de teléfono: +(051) 019090122 y el correo haymimuela@gmail.com';
      } else if (message.includes('seguridad y limpieza')) {
        return 'Estrictos estándares de esterilización y limpieza.';
      } else if (message.includes('gracias')) {
        return '¡De nada! Aquí para ayudarte.';
      } else {
        return 'Disculpa, no entendí. ¿Puedes ser más específico?';
      }


    }

    // Función para desplazarse automáticamente al final del chat
    function scrollToBottom() {
      $('#chat-messages').scrollTop($('#chat-messages')[0].scrollHeight);
    }
  });
</script>
