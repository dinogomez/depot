<?php


session_start();


$N = 0;
// OFFICE SETTINGS
if ($N == 1) {
  //paulo.gtechdev.net officeintranet domain
  $server = "localhost";
  $dbuser = "gtech.dp";
  $dbpass = "dp";
  $dbname = "depot";

  $conn = mysqli_connect($server, $dbuser, $dbpass, $dbname);

  if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
  }

//localdefault settings
} elseif ($N == 0) {

    $server = "localhost";
    $dbuser = "root";
    $dbpass = "";

    $dbname = "depot";

    $conn = mysqli_connect($server, $dbuser, $dbpass, $dbname);

    //if connection fails disconnect
    if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
    }
  }


 ?>
