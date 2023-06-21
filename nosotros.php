<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--
    - primary meta tags
  -->
  <title>AGOC - Tu aliado gastronómico y estratégico</title>
  <meta name="title" content="Grilli - Amazing & Delicious Food">
  <meta name="description" content="This is a Restaurant html template made by codewithsadee">

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-3.jpg">

</head>

<body id="top">

  <!--
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">AGOC</p>
  </div>





  <!--
    - #TOP BAR
  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          AGOC, San Ramón, Alajuela, CR
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Horario : 8.00 am a 4.00 pm</span>
      </div>

      <a href="tel:+11234567890" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">+506 0000-0000</span>
      </a>

      <div class="separator"></div>

      <a href="mailto:info@agoccr.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">info@agoccr.com</span>
      </a>

    </div>
  </div>





  <!--
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="index.php#inicio" class="logo">
        <img src="./assets/images/logo_blanco.png" width="160" height="50" alt="AGOC - Home">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./assets/images/logo.svg" width="160" height="50" alt="Grilli - Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="index.php#home" class="navbar-link hover-underline active">
              <div class="separator"></div>

              <span class="span">Inicio</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="index.php#servicios" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Servicios</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="index.php#ruta" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Ruta Gastronómica</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="index.php#tips" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Tips</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="index.php#productos" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Productos</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="index.php#eventos" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Eventos</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="index.php#paquetes" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Paquetes</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="index.php#about" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Nosotros</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#contact" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Contacto</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Visitános</p>

          <address class="body-4">
            San Ramón, Alajuela,<br>
            CR
          </address>

          <p class="body-4 navbar-text">Open: 8.00 am - 4.00pm</p>

          <a href="mailto:booking@grilli.com" class="body-4 sidebar-link">info@agoccr.com</a>

          <div class="separator"></div>

          <p class="contact-label">Contacto</p>

          <a href="tel:+88123123456" class="body-1 contact-number hover-underline">
            +506 0000-0000
          </a>
        </div>

      </nav>

      <a href="#" class="btn btn-secondary">
        <span class="text text-1">Unirse</span>

        <span class="text text-2" aria-hidden="true">Unirse</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!--
        - #HERO
      -->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/hero-slider-1.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Tecnología y gastronomía</p>

            <h1 class="display-1 hero-title slider-reveal">
              ¡Descubrí  <br>
              AGOC!
            </h1>

            <p class="body-2 hero-text slider-reveal">
               La plataforma líder en soluciones tecnológicas gastronómicas<br>
              que transformará por completo tu negocio.
            </p>

            <a href="index.php#about" class="btn btn-primary slider-reveal">
              <span class="text text-1">Sobre Nosotros</span>

              <span class="text text-2" aria-hidden="true">Sobre Nosotros</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/hero-slider-2.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Viví la esperiencia completa</p>

            <h1 class="display-1 hero-title slider-reveal">
              ¡Explorá nuestro<br>
              directorio comercial!
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Descubrí un mundo de oportunidades<br>
              para tu negocio.
            </p>

            <a href="index.php#servicios" class="btn btn-primary slider-reveal">
              <span class="text text-1">Nuestros Servicios</span>

              <span class="text text-2" aria-hidden="true">Nuestros Sevicios</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/hero-slider-3.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Crece y avanza</p>

            <h1 class="display-1 hero-title slider-reveal">
              ¡Potencia<br>
              tu negocio!
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Alcanzá nuevos niveles de éxito con nuestras herramientas tecnológicas especializadas.
            </p>

            <a href="index.php#paquetes" class="btn btn-primary slider-reveal">
              <span class="text text-1">Nuestros Paquetes</span>

              <span class="text text-2" aria-hidden="true">Nuestros Paquetes</span>
            </a>

          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="#" class="hero-btn has-after">
          <img src="./assets/images/hero-icon.png" width="48" height="48" alt="booking icon">

          <span class="label-2 text-center span">Unirse a la familia</span>
        </a>

      </section>





    </article>
  </main>





  <!--
    - #FOOTER
  -->

  <footer class="footer section has-bg-image text-center"
    style="background-image: url('./assets/images/footer-bg.jpg')">
    <div class="container">

      <section id="contact">
        <div class="footer-top grid-list">

          <div class="footer-brand has-before has-after">

            <a href="#" class="logo">
              <img src="./assets/images/logo_blanco.png" width="160" height="50" loading="lazy" alt="AGOC">
            </a>

            <address class="body-4">
              San Ramón, Alajuela, Cr
            </address>

            <a href="mailto:booking@grilli.com" class="body-4 contact-link">info@agoccr.com</a>

            <a href="tel:+88123123456" class="body-4 contact-link">Programá una cita : +506 0000-0000</a>

            <p class="body-4">
              Horario : 09:00 am - 04:00 pm
            </p>

            <div class="wrapper">
              <div class="separator"></div>
              <div class="separator"></div>
              <div class="separator"></div>
            </div>

            <p class="title-1">Recibí Noticias y Ofertas</p>

            <p class="label-1">
              Suscribíte ahora y obtené <span class="span">beneficios únicos.</span>
            </p>

            <form action="" class="input-wrapper">
              <div class="icon-wrapper">
                <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

                <input type="email" name="email_address" placeholder="Tu correo" autocomplete="off" class="input-field">
              </div>

              <button type="submit" class="btn btn-secondary">
                <span class="text text-1">Subscribirse</span>

                <span class="text text-2" aria-hidden="true">Subscribirse</span>
              </button>
            </form>

          </div>

          <ul class="footer-list">

            <li>
              <a href="index.php#home" class="label-2 footer-link hover-underline">Inicio</a>
            </li>

            <li>
              <a href="index.php#servicios" class="label-2 footer-link hover-underline">Servicios</a>
            </li>

            <li>
              <a href="index.php#ruta" class="label-2 footer-link hover-underline">Ruta Gastronómica</a>
            </li>

            <li>
              <a href="index.php#tips" class="label-2 footer-link hover-underline">tips</a>
            </li>

            <li>
              <a href="index.php#productos" class="label-2 footer-link hover-underline">Productos</a>
            </li>

            <li>
              <a href="index.php#eventos" class="label-2 footer-link hover-underline">Eventos</a>
            </li>

            <li>
              <a href="index.php#paquetes" class="label-2 footer-link hover-underline">Paquetes</a>
            </li>

            <li>
              <a href="index.php#about" class="label-2 footer-link hover-underline">Nosotros</a>
            </li>

            <li>
              <a href="#contact" class="label-2 footer-link hover-underline">Contacto</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <a href="#" class="label-2 footer-link hover-underline">Facebook</a>
            </li>

            <li>
              <a href="#" class="label-2 footer-link hover-underline">Instagram</a>
            </li>

            <li>
              <a href="#" class="label-2 footer-link hover-underline">Twitter</a>
            </li>

            <li>
              <a href="#" class="label-2 footer-link hover-underline">Youtube</a>
            </li>

            <li>
              <a href="#" class="label-2 footer-link hover-underline">Google Map</a>
            </li>

          </ul>

        </div>
      </section>


      <div class="footer-bottom">

        <p class="copyright">
          &copy; 2022 AGOC CR. Todos los derechos reservados | Base creada por: <a href="https://github.com/codewithsadee"
            target="_blank" class="link">codewithsadee</a>
        </p>

      </div>

    </div>
  </footer>





  <!--
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
