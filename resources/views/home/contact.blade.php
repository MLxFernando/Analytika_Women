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
            <h4>Bienvenido</h4>
            <h1>Deja tus datos y nos contáctaremos contigo.</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="more-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
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
        </div>
        <div class="col-lg-6 offset-lg-1 align-self-center">
          <div class="row">
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">125</div>
                <div class="count-title">Proyectos Terminados</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">1</div>
                <div class="count-title">Año De Experiencia</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">25</div>
                <div class="count-title">Clientes Felices</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">2</div>
                <div class="count-title">Premios Ganados</div>
              </div>
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