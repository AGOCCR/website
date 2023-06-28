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
    <form class="login-form">
      <div class="header-form">
        <img class="logo-form" src="../assets/images/logo_blanco.png" />
      </div>
      <div class="form-content">
        <label for="usuario" class="form-label">Usuario</label>
        <input id="usuario" type="text" />
        <label for="password" class="form-label">Contraseña</label>
        <input id="password" type="password" />
        <div class="register-link-container">
          <p>No tienes una cuenta ? Registrate&nbsp;</p>
          <a class="register-link">aquí</a>
        </div>
      </div>
      <button type=" submit">Enviar</button>
    </form>
  </main>





  <!--
    - custom js link
  -->

  <script src="../assets/js/script.js"></script>
  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>