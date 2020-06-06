<?php


session_start();
//prepared statement variables
//change these settings to match with your database.
/*since ginagamit ko is hosted phpmyadmin sa office, I have a current account for the db
  so i used "gtech.dp" as my user,

  for regular phpmyadmin using XAMPP or WAMPP, the default user and pass is

        user = "root"
        pass = ""

        "" = means no password,

        replace $dbuser and $dbpass to your phpmyadmin settings

*/
/*

SET SERVER SETTINGS CONFIG
-----------------------------
SET N TO 0 FOR OTSO CONNECTION
SET N TO 1 FOR @POL CONNECTION
(╯°□°）╯︵ ┻━┻

*/

$N = 1;

if ($N == 1) {

  $server = "localhost";
  $dbuser = "gtech.dp";
  $dbpass = "dp";
  $dbname = "paulodb";

  $conn = mysqli_connect($server, $dbuser, $dbpass, $dbname);

  if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
  }

} elseif ($N == 0) {

    $server = "localhost";
    $dbuser = "root";
    $dbpass = "";

    $dbname = "otso";

    $conn = mysqli_connect($server, $dbuser, $dbpass, $dbname);

    //if connection fails disconnect
    if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
    }
  }


 ?>
