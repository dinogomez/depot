<?php
require_once 'db/connection.php';


$sql = "SELECT * FROM cart";
$result = $conn->query($sql);
$match = [];
$_SESSION['total'] = [];

while($row = $result->fetch_assoc()) {


  if (password_verify($_SESSION['username'],$row['username'])) {

    $match = unserialize($row['products']);
  } else {

  }

}

if (isset($match)) {

        for($i = 0; $i <= count($match)-1; $i++){

          $product = $match[$i][0];
          $qty = $match[$i][1];

          $query = 'SELECT * FROM products WHERE id = ?';
          $pStatement = $conn->prepare($query);

          $pStatement->bind_param('s',$product);
          $pStatement->execute();
          $result = $pStatement->get_result();
          while($row = $result->fetch_assoc()){
          $total = $row['price'] * $qty;
          array_push($_SESSION['total'], $total);
            echo "  <tr>

                  <td class='col-sm-8 col-md-6 text-muted'>
                  <div class='media'>
                      <a class='thumbnail mr-5' href='#'> <img class='media-object' src='img/main/class/".$row['class']."/".$row['url'].".png' style='width: 72px; height: 72px;'> </a>
                      <div class='media-body'>
                          <h4 class='media-heading'><a class='font'href='#'>".$row['name']."</a></h4>
                          <h5 class='media-heading'><a class='purple-nav'href='#'>".$row['class']."</a></h5>
                          <span class='font'>Status: </span><span class='text-success'><strong>In Stock</strong></span>
                      </div>
                  </div></td>
                  <td class='col-sm-1 col-md-1' style='text-align: center'>
                    <div class='number' style='margin-top:-5px;'>

                    <input class='font-weight-bolder input-qty text-center' type='number' value='".$qty."' style='width: 30px; text-align: center;' disabled/>

                    </div>
                  </td>
                  <td class='col-sm-1 col-md-1 text-center'><strong>".$row['price']."</strong></td>
                  <td class='col-sm-1 col-md-1 text-center'><strong>".$total."</strong></td>
                  <td class='col-sm-1 col-md-1'>
                  <a class='btn btn-danger' href='../backend/process-remove-item.php?id=".$product."'>REMOVE</a>
                  </td>
              </tr>";

          }

      }
      }

 ?>
