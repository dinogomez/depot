<?php
    @require_once 'db/connection.php';
      global $conn;

      $firstName = $_POST['firstname'];
      $lastName = $_POST['lastname'];
      $steam = $_POST['steam'];
      $email = $_POST['email'];
      $paymentMethod  = $_POST['paymentMethod'];
      $ccname  = $_POST['cc-name'];
      $ccdate = $_POST['cc-date'];
      $ccnumber = $_POST['cc'];
      $ccv = $_POST['cc-ccv'];
      $save = $_POST['savei'];
      if (empty($save)) {
      $save = 0;
      }

      $uid = $_SESSION['uid'];

      echo $firstName."<br>";
      echo $lastName."<br>";
      echo $save."<br>";
      echo $uid."<br>";


      $msg = "";

      if($save == 1){
        $sql = "SELECT * FROM checkout WHERE uid ='$uid'";

        $result = mysqli_query($conn,$sql);

        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);
        if ($count > 0) {

          echo "Matched UID";
          echo $firstName;
          $sql = "UPDATE checkout SET firstName = '$firstName' ,  lastName = '$lastName' , email = '$email' , steamUser = '$steam' , save = '$save'  WHERE uid = '$uid'";

            if ($conn->query($sql) === TRUE) {
              header('Location:../frontend/checkout.php?checkout=Y');

            } else {
              echo "Error updating record: " . $conn->error;
            }
          $msg = "<strong>NICE!</strong>, SAVED NEW TRADE DETAILS";


        } else {
          $query = "INSERT INTO checkout (uid,firstName, lastName, email, steamUser, save ) VALUES (?, ?, ?, ?, ?, ?)";
          $stmt = $conn->prepare($query);


          $stmt->bind_param("issssi", $uid, $firstName, $lastName, $email, $steam,$save);
          $stmt->execute();

          $stmt->close();




          $msg = "<strong>NICE!</strong>, SAVED TRADE DETAILS";

          header('Location:../frontend/checkout.php?checkout=Y');



        }


        }





 ?>
