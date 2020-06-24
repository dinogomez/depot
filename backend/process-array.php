<?php
require_once 'db/connection.php';


function addQty($array, $search, $qty,$id){
  global $conn;

    for($i = count($array)-1; $i >= 0; $i--){
        if($array[$i][0] == $search){

            echo "1st:".$array[$i][1];
            $array[$i][1] = $array[$i][1]  + $qty;
            echo "adding new qty to duplicate";
            echo "2nd:".$array[$i][1];



            $serialized = serialize($array);

            echo $serialized ;

            $sql = "UPDATE cart SET products = '$serialized' WHERE id = '$id'";
            if ($conn->query($sql) === TRUE) {
              header('location:../frontend/cart.php');
              } else {
                echo "Error updating record: " . $conn->error;
              }
            return true;
        } else {
            return false;
        }
    }
}


 ?>
