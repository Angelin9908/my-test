<?php
  $host="localhost";
  $user="root";
  $pass="";
  $bd="financiera";
  
  $conectar=mysqli_connect($host,$user,$pass,$bd);

  if(!$conectar){
    echo 
    "<script>
      alert('No se pudo conectar a la base de datos.');
    </script>";
  }

  ?>