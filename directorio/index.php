<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once '../path.php';
  require_once '../php/head.php';
  ?>
  <link rel="stylesheet" href="./index.css" />
</head>

<body style="height: 100vh; overflow: hidden" id="top">

  <!--- #PRELOADER -->
  <?php require_once '../php/preloader.php' ?>

  <main class="main">
    <div class="content">
      <div class="directorio-header">
        <div class="directorio-header-left">
          <a style="height: 100%" href=<?php echo DEFAULT_URL ?>>
            <img class="directorio-logo" src="../assets/images/logo_blanco.png" draggable="false" />
          </a>
          <div class="title-description-container">
            <h3 class="directorio-title">Directorio</h3>
            <p class="description">¡Explora las distintas opciones!</p>
          </div>
        </div>
        <div class="directorio-header-right">
          <div class="preferences-container">
            <button id="preferences-button" class="preferences-button">Preferencias <ion-icon name="chevron-down"></ion-icon></button>
            <form id="preferences-form" class="preferences-form"></form>
          </div>
          <div class="container-option">
            <label for="search" class="search-label">
              <ion-icon class="search-icon" name="search"></ion-icon>
            </label>
            <input id="search" placeholder="Buscar" type="text" class="search-input" />
          </div>
        </div>
      </div>
      <div class="directorio-buttons">
        <button id="prev-restaurants" class="slider-btn">
          <ion-icon name="chevron-back"></ion-icon>
        </button>
        <button id="next-restaurants" class="slider-btn">
          <ion-icon name="chevron-forward"></ion-icon>
        </button>
      </div>
      <div id="restaurants-container" class="restaurants"></div>
      <svg id="restaurant-loader" class="restaurant-loader" version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
        <path d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
          <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite" />
        </path>
      </svg>
    </div>
  </main>





  <!--
    - custom js link
  -->

  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/helpers.js"></script>
  <script src="./index.js" type="module"></script>
  <script>
    addTransitionBackground(
      document.querySelector(".main"),
      ["../assets/images/hero-slider-1.jpg", "../assets/images/hero-slider-2.jpg", "../assets/images/hero-slider-3.jpg"], {
        opacity: .6,
        transitionTimeout: 1500
      });
  </script>
  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>