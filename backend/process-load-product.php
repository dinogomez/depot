<?php

@ require_once 'db/connection.php';
$badgeclass;
$badgetype;
 function badge($class,$type)
{
  global $badgeclass;
  global $badgetype;
  switch ($class) {
        case 'All':
          $badgeclass= "badge-all";
          break;
        case 'Demo':
          $badgeclass= "badge-demo";
          break;
        case 'Engineer':
          $badgeclass= "badge-engineer";
          break;
        case 'Heavy':
          $badgeclass= "badge-heavy";
          break;
        case 'Pyro':
          $badgeclass= "badge-pyro";
          break;
        case 'Scout':
          $badgeclass= "badge-scout";
          break;
        case 'Sniper':
          $badgeclass= "badge-sniper";
          break;
        case 'Medic':
          $badgeclass= "badge-medic";
          break;
        case 'Soldier':
          $badgeclass= "badge-soldier";
          break;
        case 'Spy':
          $badgeclass= "badge-spy";
          break;

        default:
          // code...
          break;
      }
      switch ($type) {
        case 'Armor':
          $badgetype= "badge-demo";
          break;
        case 'Weapon':
          $badgetype= "badge-pyro";
          break;
        case 'Face':
          $badgetype= "badge-sniper";
          break;
        case 'Hat':
          $badgetype= "badge-scout";
          break;
        case 'Shoes':
          $badgetype= "badge-heavy";
          break;
        case 'Misc':
          $badgetype= "badge-misc";
          break;
        default:
           $badgetype= "badge-scout";
          break;
      }
}


function loadProduct($id,$quantity){

    global $conn;
    global $badgeclass;
    global $badgetype;
    if (isset($_SESSION['username'])) {
      @$username = $_SESSION['username'];
      @$usernameHash = password_hash($username, PASSWORD_DEFAULT);
    }
    if (empty($quantity)) {
      $quantity = 1;
    }

    $product = $_GET['id'];

    $query = 'SELECT * FROM products WHERE id = ?';
    $pStatement = $conn->prepare($query);
    $pStatement->bind_param('i', $id );
    $pStatement->execute();
    $result = $pStatement->get_result();

    while($row = $result->fetch_assoc()){

      badge($row['class'], $row['type']);

      echo "<div class='jumbotron container-depot' style='padding-bottom:30px; margin:0;'>
         <div class='row '>
         <div class='col-6 '>
         <img class=''src='img/Main/Class/".$row['class']."/".$row['url'].".png' alt=''>

         </div>
           <div class='col-6' style='margin-top:-20px;'>
           <h1 class='font'>".$row['name']."</h1>
           <h5 class='purple-nav'>".$row['level']."</h5>

           <div class='form-inline'>
           <h3><span class='badge badge-pill ".$badgeclass." mt-2 mr-2'>".$row['class']."</span></h3>

           <h3><span class='badge badge-pill ".$badgetype." mt-2 mr-2'>".$row['type']."</span></h3>
           </div>
           <h6 class='text-danger mt-2'>".$row['restriction']."</h6>
           <h6 class='text-plus mt-2'>".$row['stat+']."</h6>
           <h6 class='text-minus mt-2'>".$row['stat-']."</h6>

           <p class='lead'>".$row['description']."</p>
           <p class='lead'>".$row['about']."</p>
              <hr class='hr-grey'>
              <h5>Quantity</h5>
              <form class='ml-2' action='../backend/process-add-to-cart.php' method='post'>

              <input type='hidden' id='username' name='usernameOrg' value=".@$username.">
              <input type='hidden' id='username' name='username' value=".@$usernameHash.">
              <input type='hidden' id='username' name='product' value=".$product.">



              <div class='number' style='margin-top:-5px;'>
              <span class='purple-nav minus' style='font-size:25px'>-</span>
              <input class='font-weight-bolder input-qty' type='text' value='".$quantity."' name='qty' style='width: 50px; text-align: center;'/>
              <span class='purple-nav plus' style='font-size:25px'>+</span>
              </div>
              <div class='d-flex justify-content-end'>
              <input class='btn  btn-primary  mr-2 py-3' style='width:200px;' type='submit' name='cart' value='BUY'  >
              <input class='btn  badge-medic  mr-2 py-3' style='width:200px;' type='submit' name='cart' value='ADD TO CART'  >
              </div>


           </form>






           </div>
         </div>



       </div>
 ";


   }
}

   ?>
