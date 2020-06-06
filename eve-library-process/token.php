<?php
include "connection.php";
include 'gencode.php';
function authenticate(){

  $key = token_keygen(15,6);
  echo "$key";

  $username = $_SESSION['temp_username'];
  $password=  $_SESSION['temp_password'];

  //if username_POST data and password_POST data matches data in the database
  //continue to welcome.php with status ?login=success
  if($username!="" && $password!=""){
    //sql statment to be queried
    $sql = "SELECT * FROM users WHERE username ='$username' AND password = '$password'";
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



        //standard href redireton
        if ($count==1) {
          header("Location:welcome.php?login=success#");
        } else {
          header("Location:error.php");
        }
  }


}

// Generate token
