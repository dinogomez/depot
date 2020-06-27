<?php

  require_once 'db/connection.php';


  session_start();

  // CODE SOURCED FROM PHP-INFO TOLEDO-BRANCH
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);

  try {


    if (!$username || !$password) {
      throw new Exception('Incomplete credentials');
    }


    $dbError = mysqli_connect_errno();
    if ($dbError) {
      throw new Exception('Could not connect to the database.');
    }


    $sql = "SELECT * FROM users WHERE username ='$username'";

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if ($count<= 0) {
      throw new Exception("Account does not exist.");

    }

    //retrieving name from database for session storage
    $sql = "SELECT * FROM users WHERE username ='$username'";
    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      //setting values
      $hash                   = $row['password'];
      $_SESSION['uid']        = $row['id'];
      $_SESSION['firstName']  = $row['firstName'];
      $_SESSION['middleName'] = $row['middleName'];
      $_SESSION['lastName']   = $row['lastName'];
      $_SESSION['suffix']     = $row['suffix'];
      //concatenate names
   }
   if (password_verify($password,$hash)) {
     $_SESSION['username'] = $username;
     $_SESSION['fullName'] = $_SESSION['firstName'].' '.$_SESSION['lastName'];
     // LOG
     require_once 'process-log.php';
     $type = "login";
     logfile($_SERVER['REMOTE_ADDR'],$username,$type);
     if (isset($_POST['pid'])) {
      header('location:../frontend/products.php?id='.$_POST['pid'].'&qty='.$_POST['qty']);
    } else {
      header('location:../frontend/index.php');

    }

   } else {
     session_destroy();
     throw new Exception("Incorrect Credentials! Try Again.");

   }
  } catch(Exception $e) {
    header('Location: ../frontend/login.php?error='.$e->getMessage());
  }


 ?>
