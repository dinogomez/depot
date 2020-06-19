<?php

@ require_once 'db/connection.php';
$badgeclass;
$badgetype;
 function badge($class,$type)
{
  global $badgeclass;
  global $badgetype;
  switch ($class) {
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
        default:
           $badgetype= "badge-scout";
          break;
      }
}

function listProducts(){
  global $conn;
  $sql = "SELECT * FROM products ORDER BY RAND()";


  $result = mysqli_query($conn,$sql);

  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  $count = mysqli_num_rows($result);


  $result = mysqli_query($conn,$sql);

  //initial opening card div
  echo "<div class='card-deck my-3'>";

  $i = 1;
  while($row = $result->fetch_assoc()){
    if ($i!=5) {

      global $badgeclass;
      global $badgetype;

      badge($row['class'], $row['type']);

      echo "
      <div class='card x-200 bg-primary'>
        <div class='card-header img-200 w-100'>
          <span class='primary'><strong>$</strong>".$row['price']."</span>
          <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
              <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
        </div>
        <div class='card-body text-center'>
          <span class='card-title card-text font'>".$row['name']."</span><br>
          <span class='badge badge-pill ".$badgeclass." badge-md'>".$row['class']."</span>
          <span class='badge badge-pill ".$badgetype." badge-md'>".$row['type']."</span>
        </div>
          <a class='btn btn-primary w-100'href='#'>BUY</a>
      </div>";
      $i++;

    } elseif ($i == 5) {
      global $badgeclass;
      global $badgetype;

      badge($row['class'], $row['type']);
      echo "
      <div class='card x-200 bg-primary'>
        <div class='card-header img-200 w-100'>
          <span class='primary'><strong>$</strong>".$row['price']."</span>
          <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
          <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
        </div>
        <div class='card-body text-center'>
          <span class='card-title card-text font'>".$row['name']."</span><br>
          <span class='badge badge-pill ".$badgeclass." badge-md'>".$row['class']."</span>
          <span class='badge badge-pill ".$badgetype." badge-md'>".$row['type']."</span>
        </div>
          <a class='btn btn-primary w-100'href='#'>BUY</a>
      </div>
      </div>
      <div class='card-deck my-3'>";
      $i=1;
    }
  }
  while ($i != 5) {
    global $badgeclass;
    global $badgetype;

    badge($row['class'], $row['type']);
    echo "
    <div class='card x-200 bg-primary' style='visibility: hidden;'>
      <div class='card-header img-200 w-100'>
        <span class='primary'><strong>$</strong>".$row['price']."</span>
        <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
            <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
      </div>
      <div class='card-body text-center'>
        <span class='card-title card-text font'>".$row['name']."</span><br>
        <span class='badge badge-pill ".$badgeclass." badge-md'>".$row['class']."</span>
        <span class='badge badge-pill ".$badgetype." badge-md'>".$row['type']."</span>
      </div>
        <a class='btn btn-primary w-100'href='#'>BUY</a>
    </div>";
    $i++;
  }
  if ($i==5) {
    global $badgeclass;
    global $badgetype;

    badge($row['class'], $row['type']);
    echo "
    <div class='card x-200 bg-primary' style='visibility: hidden;'>
      <div class='card-header img-200 w-100'>
        <span class='primary'><strong>$</strong>".$row['price']."</span>
        <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
            <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
      </div>
      <div class='card-body text-center'>
        <span class='card-title card-text font'>".$row['name']."</span><br>
        <span class='badge badge-pill ".$badgeclass." badge-md'>".$row['class']."</span>
        <span class='badge badge-pill ".$badgetype." badge-md'>".$row['type']."</span>
      </div>
        <a class='btn btn-primary w-100'href='#'>BUY</a>
    </div>";
  }

}

function listSearch($search)
{

    global $conn;
    $searchInput = $search;
    $query = 'SELECT * FROM products WHERE name LIKE ? OR class LIKE ? OR type LIKE ? ORDER BY RAND()';
    $pStatement = $conn->prepare($query);
    $searchInput = '%'.$searchInput.'%';
    $pStatement->bind_param('sss', $searchInput, $searchInput,$searchInput);

      while (strlen($searchInput) > 0 ) {
        $pStatement->bind_param('sss', $searchInput, $searchInput,$searchInput);

        $pStatement->execute();
        $result = $pStatement->get_result();
        if($result->num_rows > 0){
          break;
        }
        $searchInput = substr($searchInput,0,-1);


      }
      if ($result->num_rows == 0) {
        echo "<div class='alert alert-danger' role='alert'>
    <strong>Oh snap!</strong> we havent found anything.
  </div>";
  die();
      }




    $i = 1;
    echo "<div class='card-deck my-3'>";

    while($row = $result->fetch_assoc()){
      if ($i!=5) {
        global $badgeclass;
        global $badgetype;

        badge($row['class'], $row['type']);

        echo "
        <div class='card x-200 bg-primary'>
          <div class='card-header img-200 w-100'>
            <span class='primary'><strong>$</strong>".$row['price']."</span>
            <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
                <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
          </div>
          <div class='card-body text-center'>
            <span class='card-title card-text font'>".$row['name']."</span><br>
            <span class='badge badge-pill ".$badgeclass." badge-md'>".$row['class']."</span>
            <span class='badge badge-pill ".$badgetype." badge-md'>".$row['type']."</span>
          </div>
            <a class='btn btn-primary w-100'href='#'>BUY</a>
        </div>";
        $i++;

      } elseif ($i == 5) {
        global $badgeclass;
        global $badgetype;

        badge($row['class'], $row['type']);
        echo "
        <div class='card x-200 bg-primary'>
          <div class='card-header img-200 w-100'>
            <span class='primary'><strong>$</strong>".$row['price']."</span>
            <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
            <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
          </div>
          <div class='card-body text-center'>
            <span class='card-title card-text font'>".$row['name']."</span><br>
            <span class='badge badge-pill ".$badgeclass." badge-md'>".$row['class']."</span>
            <span class='badge badge-pill ".$badgetype." badge-md'>".$row['type']."</span>
          </div>
            <a class='btn btn-primary w-100'href='#'>BUY</a>
        </div>
        </div>
        <div class='card-deck my-3'>";
        $i=1;
      }
    }
    while ($i != 5) {
      global $badgeclass;
      global $badgetype;

      badge($row['class'], $row['type']);
      echo "
      <div class='card x-200 bg-primary' style='visibility: hidden;'>
        <div class='card-header img-200 w-100'>
          <span class='primary'><strong>$</strong>".$row['price']."</span>
          <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
              <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
        </div>
        <div class='card-body text-center'>
          <span class='card-title card-text font'>".$row['name']."</span><br>
          <span class='badge badge-pill ".$badgeclass." badge-md'>".$row['class']."</span>
          <span class='badge badge-pill ".$badgetype." badge-md'>".$row['type']."</span>
        </div>
          <a class='btn btn-primary w-100'href='#'>BUY</a>
      </div>";
      $i++;
    }
    if ($i==5) {
      global $badgeclass;
      global $badgetype;

      badge($row['class'], $row['type']);
      echo "
      <div class='card x-200 bg-primary' style='visibility: hidden;'>
        <div class='card-header img-200 w-100'>
          <span class='primary'><strong>$</strong>".$row['price']."</span>
          <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
              <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
        </div>
        <div class='card-body text-center'>
          <span class='card-title card-text font'>".$row['name']."</span><br>
          <span class='badge badge-pill ".$badgeclass." badge-md'>".$row['class']."</span>
          <span class='badge badge-pill ".$badgetype." badge-md'>".$row['type']."</span>
        </div>
          <a class='btn btn-primary w-100'href='#'>BUY</a>
      </div>";
    }




   }

   function filterSearch($class,$type,$sort) {

     global $conn;
     global $sql;
     global $badgeclass;
     global $badgetype;
      $sql = "SELECT * FROM products ";
      if($class !="") {
        $sql .= "WHERE class='$class'";
      }
      if($type !="") {
        if ($class !="") {
          $sql .= " AND type='$type'";
        } else {
          $sql .= " WHERE type='$type'";
        }

      }

      if ($sort !="") {
        $sql .= " ORDER BY ".$sort;
      }




        $result = $conn->query($sql);


       if ($result->num_rows == 0) {

         echo "<div class='alert alert-danger text-center' role='alert'>
                 <strong>Oh snap!</strong> we havent found anything.
               </div>".$sql;
               die();
       }




       $i = 1;
       echo "<div class='card-deck my-3'>";

       while($row = $result->fetch_assoc()){
         if ($i!=5) {

           global $badgeclass;
           global $badgetype;

           badge($row['class'], $row['type']);
           echo "
           <div class='card x-200 bg-primary'>
             <div class='card-header img-200 w-100'>
               <span class='primary'><strong>$</strong>".$row['price']."</span>
               <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
                   <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
             </div>
             <div class='card-body text-center'>
               <span class='card-title card-text font'>".$row['name']."</span><br>
               <span class='badge badge-pill ".$badgeclass." badge-md'>".$row['class']."</span>
               <span class='badge badge-pill ".$badgetype." badge-md'>".$row['type']."</span>
             </div>
               <a class='btn btn-primary w-100'href='#'>BUY</a>
           </div>";
           $i++;

         } elseif ($i == 5) {
           global $badgeclass;
           global $badgetype;

           badge($row['class'], $row['type']);
           echo "
           <div class='card x-200 bg-primary'>
             <div class='card-header img-200 w-100'>
               <span class='primary'><strong>$</strong>".$row['price']."</span>
               <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
               <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
             </div>
             <div class='card-body text-center'>
               <span class='card-title card-text font'>".$row['name']."</span><br>
               <span class='badge badge-pill ".$badgeclass." badge-md'>".$row['class']."</span>
               <span class='badge badge-pill ".$badgetype." badge-md'>".$row['type']."</span>
             </div>
               <a class='btn btn-primary w-100'href='#'>BUY</a>
           </div>
           </div>
           <div class='card-deck my-3'>";
           $i=1;
         }
       }
       while ($i != 5) {
         global $badgeclass;
         global $badgetype;

         badge($row['class'], $row['type']);
         echo "
         <div class='card x-200 bg-primary' style='visibility: hidden;'>
           <div class='card-header img-200 w-100'>
             <span class='primary'><strong>$</strong>".$row['price']."</span>
             <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
                 <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
           </div>
           <div class='card-body text-center'>
             <span class='card-title card-text font'>".$row['name']."</span><br>
             <span class='badge badge-pill ".$badgeclass." badge-md'>".$row['class']."</span>
             <span class='badge badge-pill ".$badgetype." badge-md'>".$row['type']."</span>
           </div>
             <a class='btn btn-primary w-100'href='#'>BUY</a>
         </div>";
         $i++;
       }
       if ($i==5) {
         global $badgeclass;
         global $badgetype;

         badge($row['class'], $row['type']);
         echo "
         <div class='card x-200 bg-primary' style='visibility: hidden;'>
           <div class='card-header img-200 w-100'>
             <span class='primary'><strong>$</strong>".$row['price']."</span>
             <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
                 <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
           </div>
           <div class='card-body text-center'>
             <span class='card-title card-text font'>".$row['name']."</span><br>
             <span class='badge badge-pill ".$badgeclass." badge-md'>".$row['class']."</span>
             <span class='badge badge-pill ".$badgetype." badge-md'>".$row['type']."</span>
           </div>
             <a class='btn btn-primary w-100'href='#'>BUY</a>
         </div>";
       }



      }


   ?>
