<?php
    require "php_acciones/seguridad.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="recursos/css/style.css">
  <title>AC servicios finacieros</title>
</head>
<body>
  <div class="conten_gen">
  <?php
    include "php_includes/head.php";
    ?>
  
  <div class="contenedor1">
    <?php
    include "php_includes/menu.php";
    ?>
  <div class="cont_panel">
    <h3>Perfil</h3>
    <div class="datos_perfil">
      <div class="foto_perfil">
        <img src="" alt="foto de perfil">
      </div>
      <div class="info_perfil">
        <div class="dato">
        <p class="negritas">Nombre:</p>
        <p class="negritas">Correo:</p>
        </div>
        <div class="ddato">
          <p></p>
          <p></p>
          <p></p>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
    
</body>
</html>