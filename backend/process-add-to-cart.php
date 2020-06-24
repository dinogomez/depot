<?php
require_once 'db/connection.php';
require_once 'process-array.php';
  $pid = $_POST['product'];
  $qty = $_POST['qty'];

  if ($_POST['username']!="") {

    $username = $_POST['username'];
    $product = $_POST['product'];
    $products = [];

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


                  $unserialized = unserialize($row['products']);

                  //checks for duplicate items in CART
                  //if duplicate then current qty + new qty
                  if (addQty($unserialized,$product,$qty,$id)) {
                    echo "adding duplicate";
                  } else {

                    echo "adding new to current";
                    $new[] = array($product,$qty);

                    $updated = array_merge($unserialized,$new);

                    echo '<pre>'; print_r($updated); echo '</pre>';

                    $serialized = serialize($updated);

                    echo $serialized ;

                    $sql = "UPDATE cart SET products = '$serialized' WHERE id = '$id'";
                    if ($conn->query($sql) === TRUE) {
                        header('location:../frontend/cart.php');
                      } else {
                        echo "Error updating record: " . $conn->error;
                      }
                  }




                }
              } else {

                echo "creating new";
                $products[] = array($product,$qty);


                $stmt = $conn->prepare("INSERT INTO cart (username, products) VALUES (?, ?)");
                $stmt->bind_param("ss", $username, $serialized);

                // set parameters and execute
                $serialized = serialize($products);
                $username =  $_POST['username'];
                $product = $_POST['product'];
                $qty =  $_POST['qty'];
                $stmt->execute();
                header('location:../frontend/cart.php');


                }



    } else {
          //add to array cart-product
          $products[] = array($product,$qty);


          $stmt = $conn->prepare("INSERT INTO cart (username, products) VALUES (?, ?)");
          $stmt->bind_param("ss", $username, $serialized);

          // set parameters and execute
          $serialized = serialize($products);
          $username =  $_POST['username'];
          $product = $_POST['product'];
          $qty =  $_POST['qty'];
          $stmt->execute();
          header('location:../frontend/cart.php');


    }



    // $stmt = $conn->prepare("INSERT INTO cart (username, productID, qty) VALUES (?, ?, ?)");
    // $stmt->bind_param("ssi", $username, $product, $qty);
    //
    // // set parameters and execute
    // $username =  $_POST['username'];
    // $product = $_POST['product'];
    // $qty =  $_POST['qty'];
    // $stmt->execute();
    //
    //
    //
    // echo "New records created successfully";
    //
    // $stmt->close();
  } else {
    $rdr="<strong>OOF!</strong> Please Login FIRST";
    header('location:../frontend/login.php?rdr='.$rdr.'&pid='.$pid.'&qty='.$_POST['qty']);
  }

 ?>
