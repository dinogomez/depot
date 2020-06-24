<?php

require_once 'db/connection.php';



  global $conn;
  $id = $_GET['id'];

  $query = "SELECT * FROM cart";
  $result = $conn->query($query) or die($conn->error);
  if ($result->num_rows > 0) {
    //@POL
    //unhash
    while($row = $result->fetch_assoc()) {
      if (password_verify($_SESSION['username'],$row['username'])) {
        $username = $row['username'];
        $products = unserialize($row['products']);
        echo 'Original:<pre>'; print_r($products); echo '</pre>';

        for($i = count($products)-1; $i >= 0; $i--){
            if($products[$i][0] == $id){
              array_splice($products, $i, 1);
              echo 'SPliced:<pre>'; print_r($products); echo '</pre>';

            }
        }

      }
    }

    $serialized = serialize($products);
    $sql = "UPDATE cart SET products = '$serialized' WHERE username = '$username'";
    if ($conn->query($sql) === TRUE) {
      header('location:../frontend/cart.php');
      } else {
        echo "Error updating record: " . $conn->error;
      }
}








 ?>
