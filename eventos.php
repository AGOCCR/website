<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once './php/head.php' ?>
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
              ¡Descubrí <br>
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

  <?php require_once './php/footer.php' ?>





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