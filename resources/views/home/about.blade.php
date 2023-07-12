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
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="has-sub">
                              <a href="javascript:void(0)">Quiénes somos</a>
                              <ul class="sub-menu">
                                  <li><a href="/about">Acerca De</a></li>
                                  <li><a href="/service">Servicios</a></li>
                                  <li><a href="/contact">Contactos</a></li>
                              </ul>
                          </li>
                            <li class="scroll-to-section"><a href="#services">Servicios</a></li>
                            <li class="scroll-to-section"><a href="#courses">Cursos</a></li>
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
            <h1>Acerca de Nosotros</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="get-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="assets/images/about-left-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h6>Información</h6>
            <h4>¿Quiénes <em> somos?</em></h4>
            <p>Somos una empresa conformada por
                un grupo multidisciplinario de mujeres
                profesionales de diferentes provincias
                del país, con una trayectoria
                importante de trabajo y experiencia en
                empresas públicas y privadas; tenemos
                un recorrido amplio de trabajo social
                con grupos de atención prioritaria.
                Somos multifacéticas y creemos que la
                mujer está preparada para hacer que
                las cosas sucedan.
            </p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="info-item">
                <div class="icon">
                  <img src="assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Misión</h4>
                <p>Transformar data en información mediante conceptos innovadores y ágiles, para que las organizaciones e instituciones públicas y privadas, cuenten con las mejores soluciones en la toma de decisiones a nivel técnico, económico, político y social; considerando enfoques de tipo intergeneracional, intersectorial, intercultural, ambiental, de género y movilidad.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-item">
                <div class="icon">
                  <img src="assets/images/service-icon-02.png" alt="">
                </div>
                <h4>Visión</h4>
                <p>Ser una compañia ecuatoriana referente en el ámbito de la investigación financiera, económica, social y política, aportando al bienestar y desarrollo humano, cumpliendo estándares de calidad, buenas prácticas y aplicando metodologías innovadoras en la investigación y análisis de información. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-team">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Fundadoras</h6>
            <h4>Socias <em>Accionistas</em></h4>
          </div>
        </div>
        <div class="col-lg-10 offset-lg-1">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="active">
                      <img src="assets/images/team-member-thumb-01.png" alt="">
                      <h4>Lider</h4>
                      <span>FUNDADORA</span>
                    </div>
                    <div>
                      <img src="assets/images/team-member-thumb-03.png" alt="">
                      <h4>Ing. Sara Yánez, Msc.</h4>
                      <span>GERENTE GENERAL</span>
                    </div>
                    <div>
                      <img src="assets/images/team-member-thumb-02.png" alt="">
                      <h4>Arq. Carolina Ramos Pinto, Msc.</h4>
                      <span>PRESIDENTA</span>
                    </div>
                    <div>
                      <img src="assets/images/team-member-thumb-04.png" alt="">
                      <h4>Ec. Carmen López Saravia</h4>
                      <span>DIRECTORA FINANCIERA</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-content">
                          <h4>LIDER</h4>
                          <p>Quinoa roof party squid prism sustainable letterpress cray hammock tumeric man bun mixtape tofu subway tile cronut. Deep v ennui subway tile organic seitan kogi freegan bicycle rights try-hard green juice probably.</p>
                          <span><a href="#">Facebook</a></span>
                          <span><a href="#">Twitter</a></span>
                          <span class="last-span"><a href="#">Linkedin</a></span>
                          <div class="text-button">
                            <a href="/contact">Contactar Miembro</a>
                          </div>
                        </div>
                        <div class="right-image">
                          <img src="assets/images/team-member-thumb-01.png" alt="">
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-content">
                          <h4>Luis Oconnell</h4>
                          <p>Quinoa roof party squid prism sustainable letterpress cray hammock tumeric man bun mixtape tofu subway tile cronut. Deep v ennui subway tile organic seitan kogi freegan bicycle rights try-hard green juice probably.</p>
                          <span><a href="#">Facebook</a></span>
                          <span><a href="#">Twitter</a></span>
                          <span class="last-span"><a href="#">Linkedin</a></span>
                          <div class="text-button">
                            <a href="contact-us.html">Contact Member</a>
                          </div>
                        </div>
                        <div class="right-image">
                          <img src="assets/images/team-member-03.jpg" alt="">
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-content">
                          <h4>Jackie Riggs</h4>
                          <p>Quinoa roof party squid prism sustainable letterpress cray hammock tumeric man bun mixtape tofu subway tile cronut. Deep v ennui subway tile organic seitan kogi freegan bicycle rights try-hard green juice probably.</p>
                          <span><a href="#">Facebook</a></span>
                          <span><a href="#">Twitter</a></span>
                          <span class="last-span"><a href="#">Linkedin</a></span>
                          <div class="text-button">
                            <a href="contact-us.html">Contact Member</a>
                          </div>
                        </div>
                        <div class="right-image">
                          <img src="assets/images/team-member-02.jpg" alt="">
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-content">
                          <h4>Alfred Small</h4>
                          <p>Quinoa roof party squid prism sustainable letterpress cray hammock tumeric man bun mixtape tofu subway tile cronut. Deep v ennui subway tile organic seitan kogi freegan bicycle rights try-hard green juice probably.</p>
                          <span><a href="#">Facebook</a></span>
                          <span><a href="#">Twitter</a></span>
                          <span class="last-span"><a href="#">Linkedin</a></span>
                          <div class="text-button">
                            <a href="contact-us.html">Contact Member</a>
                          </div>
                        </div>
                        <div class="right-image">
                          <img src="assets/images/team-member-04.jpg" alt="">
                        </div>
                      </div>
                      </li>
                      <li>
                        <div>
                          <div class="left-content">
                            <h4>Dennis Mitchel</h4>
                            <p>Quinoa roof party squid prism sustainable letterpress cray hammock tumeric man bun mixtape tofu subway tile cronut. Deep v ennui subway tile organic seitan kogi freegan bicycle rights try-hard green juice probably.</p>
                            <span><a href="#">Facebook</a></span>
                            <span><a href="#">Twitter</a></span>
                            <span class="last-span"><a href="#">Linkedin</a></span>
                            <div class="text-button">
                              <a href="contact-us.html">Contact Member</a>
                            </div>
                          </div>
                          <div class="right-image">
                            <img src="assets/images/team-member-05.jpg" alt="">
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
              <a href="our-services.html">Nuestros Servicios</a>
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