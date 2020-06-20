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


function loadProduct($id){

    global $conn;
    $query = 'SELECT * FROM products WHERE id = ?';
    $pStatement = $conn->prepare($query);
    $pStatement->bind_param('i', $id );
    $pStatement->execute();
    $result = $pStatement->get_result();

    while($row = $result->fetch_assoc()){

      echo "  <div class='jumbotron container-depot'>
          <div class='row'>
          <div class='col-5'>
          <img class=''src='img/Main/Class/".$row['class']."/".$row['url'].".png' alt=''>

          </div>
            <div class='col-6'>
            <h1 class='font'>".$row['name']."</h1>
            <h3 class='font'>badge here</h3>
            <p class='lead'>Bartender. Scotch, neat. It has been a long day. Oh, is that a piano?<br>[sound of Chopin's Impromptu no. 4 in C sharp minor, ladies swooning]</p>
            <p class='lead'>   The After Dark is a community-created cosmetic item for the Spy. It undoes the lower buttons on the Spy's suit and adds a team-colored vest underneath. It also replaces his necktie for an undone black bow tie, and a loose collar that partially exposes the Spy's bare neck.

               The After Dark was contributed to the Steam Workshop.</p>


            </div>
          </div>


        </div>";


   }
}

   ?>
