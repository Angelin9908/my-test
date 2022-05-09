<?php
session_start();
session_destroy();
echo '
      <script>
        alert("Cerrando sessión");
        location.href="../index.php"
      </script>
      ';

?>