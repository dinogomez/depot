<?php
require_once 'db/connection.php';

  session_start();

  echo '<pre>'; print_r($_SESSION['total']); echo '</pre>';


  echo $_SESSION['total'][0];


 ?>
