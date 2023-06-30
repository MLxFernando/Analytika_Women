<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Analytika Women</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

  </head>

<body>


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                    <img src="assets/images/logo.png" alt="Analytika-Women" style="height: 85%; width: 100%;margin-top: 0px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav" style="height: 1%; width: 75%; block">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#services">Servicios</a></li>
                            <li class="scroll-to-section"><a href="#courses">Cursos</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="/about">Acerca De</a></li>
                                    <li><a href="/service">Servicios</a></li>
                                    <li><a href="/contact">Contactos</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#testimonials">Testimonios</a></li>
                            <li class="scroll-to-section"><a href="#contact-section">Contactos</a></li>
                            @if (Route::has('login'))
                                @auth
                                    <li style="height:20%; width: 10%;">
                                      <x-app-layout>

                                      </x-app-layout>

                                    </li>
                                @else
                                    <li><a href="{{ route('login') }}" class="">Log in</a></li>
                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}" class="">Register</a></li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                        <a class='menu-trigger'>
                          <span>Menu</span>
                        </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Bienvenido a Analytika Women</h6>
            <h2>El Mejor Lugar Para La Toma De Decisiones. <em>Compruébalo!</em></h2>
            <div class="main-button-gradient">
              <div class="scroll-to-section"><a href="#contact-section">Únete Ahora!</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/banner-right-image.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Nuestros Servicios</h6>
            <h4>Servicios <em>Prestados</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Análisis y procesamiento de datos</h4>
                <p>mediante el uso de programas y
                herramientas informáticas para desarrollar
                proyecciones, escenarios, modelaciones,
                entre otros.
                </p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-02.png" alt="">
                </div>
                <h4>Metodologías de estudios</h4>
                <p>cuantitativa y
                cualitativa enfocados en temas de desarrollo
                territorial y de mercado.
                </p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-03.png" alt="">
                </div>
                <h4>Asesoría técnica</h4>
                <p>para la implementación
                de buenas prácticas y proyectos de
                cooperación internacional para el desarrollo
                local
              </p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-04.png" alt="">
                </div>
                <h4>Capacitación</h4>
                <p>en temáticas relacionadas con
                análisis estadístico social a través de software
                especializado.
                </p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Gestión del cambio</h4>
                <p>mediante el diseño y
                ejecución de proyectos y procesos de mejora
                continua.
                </p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-02.png" alt="">
                </div>
                <h4>Manejo de modelos de acción participativa</h4>
                <p>monitoreo y evaluación aplicados a grupos
                sociales en entornos rurales.
                </p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-03.png" alt="">
                </div>
                <h4>Servicios de asesoría y consultoría empresarial e institucional</h4>
                <p>de acuerdo a los
                requerimientos de nuestros clientes, como la
                elaboración de estudios de factibilidad
                financiera de los proyectos.
                </p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-04.png" alt="">
                </div>
                <h4>Elaboración de instrumentos de
                    planificación territorial</h4>
                <p>Planificación
                  estratégica y operativa institucional. Plan de
                  Desarrollo y Ordenamiento Territorial (PDOT),
                  Planes de Uso y Gestión de Suelo (PUGS).
                </p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Elaboración de instrumentos de
                    planificación</h4>
                <p> Plan estratégico, POA. PAC.
                    Clasificadores de presupuestos.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-02.png" alt="">
                </div>
                <h4>Capacitaciones</h4>
                <p>contamos con un equipo
                multidisciplinario preparado para desarrollar
                capacitaciones de acuerdo a las necesidades
                de instituciones en el sector público, privado y
                ONG, según las áreas de actividad de la
                institución.
                </p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-03.png" alt="">
                </div>
                <h4>Construcción y diseño de política pública</h4>
                <p>: de
                  acuerdo a la dinámica sectorial y territorial,
                  enfocada en lo social, innovación, inclusión
                  social, económica, seguridad ciudadana,
                  intercultural, intergeneracional, interseccional y
                  con enfoque de género.
                  </p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-04.png" alt="">
                </div>
                <h4>Asesoría Política en</h4>
                <p>Manejo de Política
                Digital. Marketing Político-Electoral. Manejo y
                creación de Imagen Pública. Análisis Electoral.
                Investigación. Estudios de Opinión Pública y
                Administración Político- Financiera. Manejo de
                imagen política con enfoque de género.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>NUESTROS CURSOS</h6>
            <h4>¿Deseas Aprender? <em>Ahora Puedes!</em></h4>
            <p>Analytika Women tambien ofrece cursos para crecimiento y desarrollo personal</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="active gradient-border"><span>Curso 1</span></div>
                    <div class="gradient-border"><span>Curso 2</span></div>
                    <div class="gradient-border"><span>Curso 3</span></div>
                    <div class="gradient-border"><span>Curso 4</span></div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-01.jpg" alt="">
                          <div class="price"><h6>$128</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>Curso 1</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam perspiciatis labore error nihil inventore voluptas iure odio temporibus eos.  
                          <br><br> Explicabo, sapiente laborum! Deleniti quas, adipisci nam illo molestias laborum libero?</p>
                          <span>36 Horas</span>
                          <span>4 semanas</span>
                          <span class="last-span">3 Certificados</span>
                          <div class="text-button">
                            <a href="/contact">Empezar Curso</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-02.jpg" alt="">
                          <div class="price"><h6>$156</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>Curso 2</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam perspiciatis labore error nihil inventore voluptas iure odio temporibus eos.  
                          <br><br> Explicabo, sapiente laborum! Deleniti quas, adipisci nam illo molestias laborum libero?</p>
                          <span>48 Horas</span>
                          <span>6 Semanas</span>
                          <span class="last-span">1 Certificado</span>
                          <div class="text-button">
                            <a href="contact-us.html">Empezar Curso</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-03.jpg" alt="">
                          <div class="price"><h6>$184</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>Curso 3</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam perspiciatis labore error nihil inventore voluptas iure odio temporibus eos.  
                          <br><br> Explicabo, sapiente laborum! Deleniti quas, adipisci nam illo molestias laborum libero?</p>
                          <span>48 Horas</span>
                          <span>6 Semanas</span>
                          <span class="last-span">1 Certificado</span>
                          <div class="text-button">
                            <a href="/contact">Empezar Curso</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-04.jpg" alt="">
                          <div class="price"><h6>$76</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>Curso 4</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam perspiciatis labore error nihil inventore voluptas iure odio temporibus eos.  
                          <br><br> Explicabo, sapiente laborum! Deleniti quas, adipisci nam illo molestias laborum libero?</p>
                          <span>48 Horas</span>
                          <span>4 Semanas</span>
                          <span class="last-span">2 Certificado</span>
                          <div class="text-button">
                            <a href="/contact">Empezar Curso</a>
                          </div>
                        </div>
                      </div>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 offset-lg-1">
          <div class="left-image">
            <img src="assets/images/cta-left-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h6>APROVECHA!</h6>
          <h4>Te damos 50% de descuento si compras +1 curso </h4>
          <p>"Los grandes logros de
            cualquier persona,
            generalmente dependen de
            muchas manos, corazones y
            mentes."
          </p>
          <div class="white-button">
            <a href="/contact">Ver Cursos</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Testimonios</h6>
            <h4>Nuestro clientes <em>Opinan</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit."</p>
                <h4>Catherine Walk</h4>
                <span>CEO &amp; Founder</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit."</p>
                <h4>David Martin</h4>
                <span>CTO of Tech Company</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit."</p>
                <h4>Sophia Whity</h4>
                <span>CEO and Co-Founder</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit."</p>
                <h4>Helen Shiny</h4>
                <span>Tech Officer</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>George Soft</h4>
                <span>Gadget Reviewer</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Andrew Hall</h4>
                <span>Marketing Manager</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Maxi Power</h4>
                <span>Fashion Designer</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Olivia Too</h4>
                <span>Creative Designer</span>
                <img src="assets/images/quote.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-heading">
            <h6>Ubicación</h6>
          </div>
          <div id="map">
          
            <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3989.2859053825514!2d-78.61470581220452!3d-0.93603270867266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sec!4v1686604290418!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="row">
              <div class="col-lg-4 offset-lg-1">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Telefono</h4>
                  <span>0999785416</span>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Telefono</h4>
                  <span>0990902380</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Contáctanos</h6>
                  <h4>Hola <em>Bienvenido</em></h4>
                  <p>Deja tus datos y nos contáctaremos contigo.</p>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Nombres y Apellidos" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Correo" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Mensaje"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-gradient-button">Enviar Mensaje</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <p class="copyright">Copyright © 2023 Analytika Women, All Rights Reserved. 
        </div>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>