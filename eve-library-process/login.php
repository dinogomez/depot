<?php
include_once '../library-process/gencode.php';
include_once '../library-process/connection.php';



  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);

  if($username!="" && $password!=""){
    //sql statment to be queried
    $sql = "SELECT * FROM users WHERE username ='$username'";
    //mysqli_query is a mysql function that sends a query request to the database
    //it requires two parameters,
    //@1. the mysqli_connect status which is stored in $conn variable found on "connections.php".
    //@2. the sql statement  which is a string stored on the $sql variable
    $result = mysqli_query($conn,$sql);
    //the query result is stored in the $result variable.

    //The fetch_array() / mysqli_fetch_array() function fetches a result row as an associative array, a numeric array,.
    //it requires the query result status and the MYSQLI_ASSOC "MYSQLI_ASSOC = Array items will use the column name as an index key."
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //after fetching row it returns an integer value in which identifies how many matches were found.
    //a match of "1" means a record that matches the input parameter is present marking a correct login
    $count = mysqli_num_rows($result);


    //retrieving name from database for session storage
    $sql = "SELECT firstName,middleName,lastName,permission,password FROM users WHERE username ='$username'";
    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      //setting values
      $_SESSION['firstName'] = $row['firstName'];
      $_SESSION['middleName'] = $row['middleName'];
      $_SESSION['lastName'] = $row['lastName'];
      $_SESSION['permission'] = $row['permission'];
      //concatenate names
      $_SESSION['fullName'] = $_SESSION['firstName'].' '.  $_SESSION['middleName'].' '.$_SESSION['lastName'];
      $hash = $row['password'];

      echo "hash:".$hash;
      echo "password:".$password;
   }


        //setSession to LOGIN
        //standard href redireton
        if ($count==1) {

          if (password_verify($password, $hash)) {
            $_SESSION['username'] = $username;
            $_SESSION['login'] = 1;
            $_SESSION['failedLogin']== 1;



            }
           else {
             $_SESSION['login'] = 0;
             $error_msg = "<div class='login-modal'>Username or password is incorrect</div>";
             $script = "<script> $(document).ready(function(){ $('#exampleModal').modal('show'); }); </script>";

          }

        } else {
          $error_msg = "<div class='login-modal'>Username or password is incorrect</div>";
          $script = "<script> $(document).ready(function(){ $('#exampleModal').modal('show'); }); </script>";
        }
  }



 ?>
