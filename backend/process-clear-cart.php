<?php
require_once 'db/connection.php';


    require_once 'process-log.php';
    $type = "checkout";
    $username = $_SESSION['username'];

    logfile($_SERVER['REMOTE_ADDR'],$username,$type);
    global $id;
    $sql = "SELECT * FROM cart";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      //@POL
      //unhash
      while($row = $result->fetch_assoc()) {
        if (password_verify($_SESSION['username'],$row['username'])) {
          $id = $row['id'];

        }
      }



      $query = "SELECT * FROM cart WHERE id = '$id'";
      $result = $conn->query($query) or die($conn->error);
      if ($result->num_rows > 0) {
        //adding new record to array
      while($row = $result->fetch_assoc()) {


                  $sql = "DELETE FROM cart WHERE id = '$id'";
                  $result = $conn->query($sql);
                  header('location:../frontend/index.php');


                }




            } else {
              header('location:../frontend/index.php');
            }

          }

 ?>
