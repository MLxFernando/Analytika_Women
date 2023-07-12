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
                        <img src="assets/images/logo.png" alt="Analytika-Women" style="height: 15%; width: 30%;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/">Home</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">¿Quiénes Somos?</a>
                                <ul class="sub-menu">
                                    <li><a href="/about">Acerca De</a></li>
                                    <li><a href="/service">Servicios</a></li>
                                    <li><a href="/contact">Contactos</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#services">Servicios</a></li>
                            <li class="scroll-to-section"><a href="#testimonials">Testimonios</a></li>
                            <li class="scroll-to-section"><a href="#contact-section">Contactos</a></li>
                            @if (Route::has('login'))
                                @auth
                                    <li>
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

  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h4>¿Cómo podemos ayudarte?</h4>
            <h1>Nuestros servicios</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

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
          <div class="service-list">
            <div class="item col-lg-6">
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
            <div class="item col-lg-6">
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
            <div class="item col-lg-6">
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
            <div class="item col-lg-6">
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
            <div class="item col-lg-6">
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
            <div class="item col-lg-6">
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
            <div class="item col-lg-6">
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
            <div class="item col-lg-6">
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
            <div class="item col-lg-6">
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
            <div class="item col-lg-6">
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
            <div class="item col-lg-6">
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
            <div class="item col-lg-6">
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

  <section class="contact-us our-office">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-info">
            <div class="section-heading">
              <h6>Ambiente De Trabajo</h6>
              <h4>Analytika <em>Women</em></h4>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Debitis aliquid necessitatibus ullam beatae nobis facilis 
              quo modi numquam quos aspernatur in voluptas, porro placeat 
              explicabo tempora cumque earum dicta labore?
            </p>
            <ul>
              <li>- Ventaja 1</li>
              <li>- Ventaja 2</li>
              <li>- Ventaja 3</li>
              <li>- Ventaja 4</li>
            </ul>
            <div class="main-button-gradient">
              <a href="/service">Nuestros Servicios</a>
            </div>
          </div>
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