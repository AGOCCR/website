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

        <span class="span"> AGOC, San Ramón, Alajuela, CR </span>
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
      <a href="#inicio" class="logo">
        <img src="./assets/images/logo_blanco.png" width="160" height="50" alt="AGOC - Home" />
      </a>

      <nav class="navbar" data-navbar>
        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./assets/images/logo.svg" width="160" height="50" alt="Grilli - Home" />
        </a>

        <ul class="navbar-list">
          <li class="navbar-item">
            <a href="#home" class="navbar-link hover-underline active">
              <div class="separator"></div>

              <span class="span">Inicio</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#servicios" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Servicios</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#ruta" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Ruta Gastronómica</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#tips" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Tips</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#productos" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Productos</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#eventos" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Eventos</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#paquetes" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Paquetes</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link hover-underline">
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
            San Ramón, Alajuela,<br />
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
              <img src="./assets/images/hero-slider-1.jpg" width="1880" height="950" alt="" class="img-cover" />
            </div>

            <p class="label-2 section-subtitle slider-reveal">
              Tecnología y gastronomía
            </p>

            <h1 class="display-1 hero-title slider-reveal">
              ¡Descubrí <br />
              AGOC!
            </h1>

            <p class="body-2 hero-text slider-reveal">
              La plataforma líder en soluciones tecnológicas gastronómicas<br />
              que transformará por completo tu negocio.
            </p>

            <a href="#about" class="btn btn-primary slider-reveal">
              <span class="text text-1">Sobre Nosotros</span>

              <span class="text text-2" aria-hidden="true">Sobre Nosotros</span>
            </a>
          </li>

          <li class="slider-item" data-hero-slider-item>
            <div class="slider-bg">
              <img src="./assets/images/hero-slider-2.jpg" width="1880" height="950" alt="" class="img-cover" />
            </div>

            <p class="label-2 section-subtitle slider-reveal">
              Viví la esperiencia completa
            </p>

            <h1 class="display-1 hero-title slider-reveal">
              ¡Explorá nuestro<br />
              directorio comercial!
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Descubrí un mundo de oportunidades<br />
              para tu negocio.
            </p>

            <a href="#servicios" class="btn btn-primary slider-reveal">
              <span class="text text-1">Nuestros Servicios</span>

              <span class="text text-2" aria-hidden="true">Nuestros Sevicios</span>
            </a>
          </li>

          <li class="slider-item" data-hero-slider-item>
            <div class="slider-bg">
              <img src="./assets/images/hero-slider-3.jpg" width="1880" height="950" alt="" class="img-cover" />
            </div>

            <p class="label-2 section-subtitle slider-reveal">
              Crece y avanza
            </p>

            <h1 class="display-1 hero-title slider-reveal">
              ¡Potencia<br />
              tu negocio!
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Alcanzá nuevos niveles de éxito con nuestras herramientas
              tecnológicas especializadas.
            </p>

            <a href="#paquetes" class="btn btn-primary slider-reveal">
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
          <img src="./assets/images/hero-icon.png" width="48" height="48" alt="booking icon" />

          <span class="label-2 text-center span">Unirse a la familia</span>
        </a>
      </section>

      <!--
        - #SERVICE
      -->

      <section class="section service bg-black-10 text-center" aria-label="service" id="servicios">
        <div class="container">
          <p class="section-subtitle label-2">La tecnología de tu lado</p>

          <h2 class="headline-1 section-title">
            Nuestros servicios estrella
          </h2>

          <p class="section-text">
            Descubrí los servicios que AGOC diseñó para vos.
          </p>

          <ul class="grid-list">
            <li>
              <div class="service-card">
                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336">
                    <img src="./assets/images/service-1.jpg" width="285" height="336" loading="lazy" alt="Breakfast" class="img-cover" />
                  </figure>
                </a>

                <div class="card-content">
                  <h3 class="title-4 card-title">
                    <a href="#">Asesorías</a>
                  </h3>

                  <a href="#" class="btn-text hover-underline label-2">Saber Más</a>
                </div>
              </div>
            </li>

            <li>
              <div class="service-card">
                <a href="./directorio" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336">
                    <img src="./assets/images/service-2.jpg" width="285" height="336" loading="lazy" alt="Appetizers" class="img-cover" />
                  </figure>
                </a>

                <div class="card-content">
                  <h3 class="title-4 card-title">
                    <a href="./directorio">Directorio</a>
                  </h3>

                  <a href="./directorio" class="btn-text hover-underline label-2">Saber Más</a>
                </div>
              </div>
            </li>

            <li>
              <div class="service-card">
                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336">
                    <img src="./assets/images/service-3.jpg" width="285" height="336" loading="lazy" alt="Drinks" class="img-cover" />
                  </figure>
                </a>

                <div class="card-content">
                  <h3 class="title-4 card-title">
                    <a href="#">Software</a>
                  </h3>

                  <a href="#" class="btn-text hover-underline label-2">Saber Más</a>
                </div>
              </div>
            </li>
          </ul>

          <img src="./assets/images/shape-1.png" width="246" height="412" loading="lazy" alt="shape" class="shape shape-1 move-anim" />
          <img src="./assets/images/shape-2.png" width="343" height="345" loading="lazy" alt="shape" class="shape shape-2 move-anim" />
        </div>
      </section>

      <!--
        - #Ruta Gastronómica
      -->

      <section class="special-dish text-center" aria-labelledby="dish-label" id="ruta">
        <div class="special-dish-banner">
          <img src="./assets/images/special-dish-banner.jpg" width="940" height="900" loading="lazy" alt="special dish" class="img-cover" />
        </div>

        <div class="special-dish-content bg-black-10">
          <div class="container">
            <img src="./assets/images/badge-1.png" width="28" height="41" loading="lazy" alt="badge" class="abs-img" />

            <p class="section-subtitle label-2">Sabores Ilimitados</p>

            <h2 class="headline-1 section-title">Ruta Gastronómica</h2>

            <p class="section-text">
              La Ruta Gastronómica de AGOC es la guía definitiva para
              descubrir los mejores negocios gastronómicos en una experiencia
              culinaria única.
            </p>

            <a href="ruta.php" class="btn btn-primary">
              <span class="text text-1">Saber Más</span>

              <span class="text text-2" aria-hidden="true">Saber Más</span>
            </a>
          </div>
        </div>

        <img src="./assets/images/shape-4.png" width="179" height="359" loading="lazy" alt="" class="shape shape-1" />

        <img src="./assets/images/shape-9.png" width="351" height="462" loading="lazy" alt="" class="shape shape-2" />
      </section>

      <!--
        - #Tips
      -->

      <section class="special-dish text-center" aria-labelledby="dish-label" id="tips" style="margin-top: 40px">
        <div class="special-dish-banner">
          <img src="./assets/images/special-dish-banner.jpg" width="940" height="900" loading="lazy" alt="special dish" class="img-cover" />
        </div>

        <div class="special-dish-content bg-black-10">
          <div class="container">
            <img src="./assets/images/badge-1.png" width="28" height="41" loading="lazy" alt="badge" class="abs-img" />

            <p class="section-subtitle label-2">Aprende y Deléitate</p>

            <h2 class="headline-1 section-title">Tips</h2>

            <p class="section-text">
              La sección de Tips de AGOC es tu fuente de conocimiento y
              consejos expertos para mejorar tus habilidades en el mundo
              gastronómico.
            </p>

            <a href="tips.php" class="btn btn-primary">
              <span class="text text-1">Saber Más</span>

              <span class="text text-2" aria-hidden="true">Saber Más</span>
            </a>
          </div>
        </div>

        <img src="./assets/images/shape-4.png" width="179" height="359" loading="lazy" alt="" class="shape shape-1" />

        <img src="./assets/images/shape-9.png" width="351" height="462" loading="lazy" alt="" class="shape shape-2" />
      </section>

      <!--
        - #Productos
      -->

      <section class="special-dish text-center" aria-labelledby="dish-label" id="productos" style="margin-top: 40px">
        <div class="special-dish-banner">
          <img src="./assets/images/special-dish-banner.jpg" width="940" height="900" loading="lazy" alt="special dish" class="img-cover" />
        </div>

        <div class="special-dish-content bg-black-10">
          <div class="container">
            <img src="./assets/images/badge-1.png" width="28" height="41" loading="lazy" alt="badge" class="abs-img" />

            <p class="section-subtitle label-2">
              Descubre nuestras soluciones
            </p>

            <h2 class="headline-1 section-title">Productos</h2>

            <p class="section-text">
              La sección de Productos de AGOC es tu escaparate virtual para
              mostrar y promocionar tus productos gastronómicos.
            </p>

            <a href="productos.php" class="btn btn-primary">
              <span class="text text-1">Saber Más</span>

              <span class="text text-2" aria-hidden="true">Saber Más</span>
            </a>
          </div>
        </div>

        <img src="./assets/images/shape-4.png" width="179" height="359" loading="lazy" alt="" class="shape shape-1" />

        <img src="./assets/images/shape-9.png" width="351" height="462" loading="lazy" alt="" class="shape shape-2" />
      </section>

      <!--
        - #Eventos
      -->

      <section class="special-dish text-center" aria-labelledby="dish-label" id="eventos" style="margin-top: 40px">
        <div class="special-dish-banner">
          <img src="./assets/images/special-dish-banner.jpg" width="940" height="900" loading="lazy" alt="special dish" class="img-cover" />
        </div>

        <div class="special-dish-content bg-black-10">
          <div class="container">
            <img src="./assets/images/badge-1.png" width="28" height="41" loading="lazy" alt="badge" class="abs-img" />

            <p class="section-subtitle label-2">Emoción y conocimiento</p>

            <h2 class="headline-1 section-title">Eventos</h2>

            <p class="section-text">
              La sección de Eventos de AGOC es el lugar perfecto para promover
              y organizar eventos gastronómicos emocionantes.
            </p>

            <a href="eventos.php" class="btn btn-primary">
              <span class="text text-1">Saber Más</span>

              <span class="text text-2" aria-hidden="true">Saber Más</span>
            </a>
          </div>
        </div>

        <img src="./assets/images/shape-4.png" width="179" height="359" loading="lazy" alt="" class="shape shape-1" />

        <img src="./assets/images/shape-9.png" width="351" height="462" loading="lazy" alt="" class="shape shape-2" />
      </section>

      <!--
        - #Paquetes
      -->

      <section class="section event bg-black-10" aria-label="event" id="paquetes">
        <div class="container">
          <p class="section-subtitle label-2 text-center">Descubre</p>

          <h2 class="section-title headline-1 text-center">
            Nuestros paquetes
          </h2>

          <ul class="grid-list">
            <li>
              <div class="event-card has-before hover:shine">
                <div class="card-banner img-holder" style="--width: 350; --height: 450">
                  <img src="./assets/images/event-1.jpg" width="350" height="450" loading="lazy" alt="Flavour so good you’ll try to eat with your eyes." class="img-cover" />

                  <time class="publish-date label-2">₡15.000</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">
                    Paquete Básico
                  </p>

                  <h3 class="card-title title-2 text-center">
                    Forma parte de la Familia AGOC.
                  </h3>
                </div>
              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">
                <div class="card-banner img-holder" style="--width: 350; --height: 450">
                  <img src="./assets/images/event-2.jpg" width="350" height="450" loading="lazy" alt="Flavour so good you’ll try to eat with your eyes." class="img-cover" />

                  <time class="publish-date label-2">₡25.000</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">
                    Paquete Intermedio
                  </p>

                  <h3 class="card-title title-2 text-center">
                    Potencia tu negocio, automatiza procesos.
                  </h3>
                </div>
              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">
                <div class="card-banner img-holder" style="--width: 350; --height: 450">
                  <img src="./assets/images/event-3.jpg" width="350" height="450" loading="lazy" alt="Flavour so good you’ll try to eat with your eyes." class="img-cover" />

                  <time class="publish-date label-2">₡75.000</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">
                    Paquete de Fidelización
                  </p>

                  <h3 class="card-title title-2 text-center">
                    Es para los que saben, es para vos.
                  </h3>
                </div>
              </div>
            </li>
          </ul>

          <a href="paquetes.php" class="btn btn-primary">
            <span class="text text-1">Saber más</span>

            <span class="text text-2" aria-hidden="true">Saber más</span>
          </a>
        </div>
      </section>

      <!--
        - #ABOUT
      -->

      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">
          <div class="about-content">
            <p class="label-2 section-subtitle" id="about-label">
              Soobre Nosotros
            </p>

            <h2 class="headline-1 section-title">AGOC</h2>

            <p class="section-text">
              AGOC es tu socio estratégico en el mundo gastronómico,
              brindándote soluciones tecnológicas de vanguardia. Nuestra
              plataforma está diseñada para optimizar tus operaciones y
              mejorar la experiencia de tus clientes. Desde sistemas de
              gestión de pedidos en línea hasta herramientas de
              automatización, AGOC te proporciona las soluciones adecuadas
              para llevar tu negocio gastronómico al siguiente nivel. Nuestro
              equipo de expertos estará contigo en cada paso del camino,
              brindándote asesoramiento personalizado para aprovechar al
              máximo el potencial de la tecnología. Únete a AGOC y descubre
              cómo nuestras soluciones tecnológicas avanzadas pueden impulsar
              tu éxito en la industria gastronómica.
            </p>

            <div class="contact-label">Llámanos</div>

            <a href="tel:+804001234567" class="body-1 contact-number hover-underline">+506 0000-0000</a>

            <a href="nosotros.php" class="btn btn-primary">
              <span class="text text-1">Saber Más</span>

              <span class="text text-2" aria-hidden="true">Saber Más</span>
            </a>
          </div>

          <figure class="about-banner">
            <img src="./assets/images/about-banner.jpg" width="570" height="570" loading="lazy" alt="about banner" class="w-100" data-parallax-item data-parallax-speed="1" />

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="./assets/images/about-abs-image.jpg" width="285" height="285" loading="lazy" alt="" class="w-100" />
            </div>
          </figure>

          <img src="./assets/images/shape-3.png" width="197" height="194" loading="lazy" alt="" class="shape" />
        </div>
      </section>

      <!--
        - #TESTIMONIALS
      -->

      <section class="section testi text-center has-bg-image" style="background-image: url('./assets/images/testimonial-bg.jpg')" aria-label="testimonials">
        <div class="container">
          <div class="quote">”</div>

          <p class="headline-2 testi-text">
            Dejá tu testimonio y hazle al mundo saber como AGOC marca la
            diferencia en tu negocio.
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <div class="profile">
            <img src="./assets/images/testi-avatar.jpg" width="100" height="100" loading="lazy" alt="Sam Jhonson" class="img" />

            <p class="label-2 profile-name">Tu Nombre</p>
          </div>
        </div>
      </section>
    </article>
  </main>

  <!--
    - #FOOTER
  -->

  <footer class="footer section has-bg-image text-center" style="background-image: url('./assets/images/footer-bg.jpg')">
    <div class="container">
      <section id="contact">
        <div class="footer-top grid-list">
          <div class="footer-brand has-before has-after">
            <a href="#" class="logo">
              <img src="./assets/images/logo_blanco.png" width="160" height="50" loading="lazy" alt="AGOC" />
            </a>

            <address class="body-4">San Ramón, Alajuela, Cr</address>

            <a href="mailto:booking@grilli.com" class="body-4 contact-link">info@agoccr.com</a>

            <a href="tel:+88123123456" class="body-4 contact-link">Programá una cita : +506 0000-0000</a>

            <p class="body-4">Horario : 09:00 am - 04:00 pm</p>

            <div class="wrapper">
              <div class="separator"></div>
              <div class="separator"></div>
              <div class="separator"></div>
            </div>

            <p class="title-1">Recibí Noticias y Ofertas</p>

            <p class="label-1">
              Suscribíte ahora y obtené
              <span class="span">beneficios únicos.</span>
            </p>

            <form action="" class="input-wrapper">
              <div class="icon-wrapper">
                <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

                <input type="email" name="email_address" placeholder="Tu correo" autocomplete="off" class="input-field" />
              </div>

              <button type="submit" class="btn btn-secondary">
                <span class="text text-1">Subscribirse</span>

                <span class="text text-2" aria-hidden="true">Subscribirse</span>
              </button>
            </form>
          </div>

          <ul class="footer-list">
            <li>
              <a href="#home" class="label-2 footer-link hover-underline">Inicio</a>
            </li>

            <li>
              <a href="#servicios" class="label-2 footer-link hover-underline">Servicios</a>
            </li>

            <li>
              <a href="#ruta" class="label-2 footer-link hover-underline">Ruta Gastronómica</a>
            </li>

            <li>
              <a href="#tips" class="label-2 footer-link hover-underline">tips</a>
            </li>

            <li>
              <a href="#productos" class="label-2 footer-link hover-underline">Productos</a>
            </li>

            <li>
              <a href="#eventos" class="label-2 footer-link hover-underline">Eventos</a>
            </li>

            <li>
              <a href="#paquetes" class="label-2 footer-link hover-underline">Paquetes</a>
            </li>

            <li>
              <a href="#about" class="label-2 footer-link hover-underline">Nosotros</a>
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
          &copy; 2022 AGOC CR. Todos los derechos reservados | Base creada
          por:
          <a href="https://github.com/codewithsadee" target="_blank" class="link">codewithsadee</a>
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