<?php

  session_start();

   if(!isset($_SESSION['authenticate']) || $_SESSION['authenticate'] != 'SIM'){
       header('Location: index.php?login=erro2');
  }


 ?>


