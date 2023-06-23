<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once './php/head.php' ?>
</head>

<body id="top">

  <!--- #PRELOADER -->
  <?php require_once './php/preloader.php' ?>

  <!--- #TOP BAR -->
  <?php require_once './php/topbar.php' ?>

  <!--- #HEADER-->
  <?php require_once './php/header.php' ?>

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


  <!--- #FOOTER -->
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