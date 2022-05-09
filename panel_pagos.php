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
    <h3>Pagos</h3>
    <form class="form_buscar" action="recuperar_pagos" method="POST">
      <input type="search" name="nombre_liente" placeholder="Nombre completo" value="">
      <button type="submit"><img src="recursos/img/lupa.png" alt=""></button>
    </form>
    <div class="fijo">
    <p>Pago semanal: $ </p><p class="monto"></p>
    </div>
    <form action="guarda_pago" class="form_pago" method="POST">
        <p><label for="">Fecha de pago: </label><input type="date" name="fecha" id=""></p>
      <button type="submit">Agregar pago</button> 
    </form>

    <div class="tabla_pagos">
      <table>
        <tr>
          <th class="nombre_tabla" rowspan="2">NOMBRE</th>
          <th class="pago_hecho" colspan="14">SEMANAS PAGADAS</th>
          <th class="saldo_tabla"rowspan="2">SALDO RESTANTE</th>
        </tr>
        <tr>
          <th class="pago_hecho">1</th>
          <th class="pago_hecho">2</th>
          <th class="pago_hecho">3</th>
          <th class="pago_hecho">4</th>
          <th class="pago_hecho">5</th>
          <th class="pago_hecho">6</th>
          <th class="pago_hecho">7</th>
          <th class="pago_hecho">8</th>
          <th class="pago_hecho">9</th>
          <th class="pago_hecho">10</th>
          <th class="pago_hecho">11</th>
          <th class="pago_hecho">12</th>
          <th class="pago_hecho">13</th>
          <th class="pago_hecho">14</th>
        </tr>
        <?php
  include "php_acciones/conexion.php";
  $todos = "SELECT * FROM pagos";
  $resulta = mysqli_query($conectar, $todos);
  $cont=0;
  while($dato = mysqli_fetch_assoc($resulta))
  {
  ?>
        <tr>
          <td <?php if(($cont%2)==0){
            echo "class='azul'";
          } echo "class='blanco'"; ?>>
          </td>
          <td><img src='recursos/img/estrella.png' alt=''></td>
          <td> </td>
              
          <td></td>
        </tr>
        <?php 
    $cont=$cont+1;  
    }
    mysqli_free_result($resulta);
  ?>
      </table> 
    </div>
  </div>
  </div>
  </div>
    
</body>
</html>