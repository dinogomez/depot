<?php

@ require_once 'db/connection.php';

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
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

    if ($i!=5) {
      // switch ($class) {
      //   case 'value':
      //     // code...
      //     break;
      //
      //   default:
      //     // code...
      //     break;
      // }
      echo "
      <div class='card x-200 bg-primary'>
        <div class='card-header img-200 w-100'>
          <span class='primary'><strong>$</strong>".$row['price']."</span>
          <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
              <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
        </div>
        <div class='card-body text-center'>
          <span class='card-title card-text font'>".$row['name']."</span><br>
          <span class='badge badge-pill badge-warning badge-md'>".$row['class']."</span>
          <span class='badge badge-pill badge-warning badge-md'>".$row['type']."</span>
        </div>
          <a class='btn btn-primary w-100'href='#'>BUY</a>
      </div>";
      $i++;

    } elseif ($i == 5) {
      echo "
      <div class='card x-200 bg-primary'>
        <div class='card-header img-200 w-100'>
          <span class='primary'><strong>$</strong>".$row['price']."</span>
          <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
          <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
        </div>
        <div class='card-body text-center'>
          <span class='card-title card-text font'>".$row['name']."</span><br>
          <span class='badge badge-pill badge-warning badge-md'>".$row['class']."</span>
          <span class='badge badge-pill badge-warning badge-md'>".$row['type']."</span>
        </div>
          <a class='btn btn-primary w-100'href='#'>BUY</a>
      </div>
      </div>
      <div class='card-deck my-3'>";
      $i=1;
    }


 }

 // SPACE FILL IF LESS THAN 5 , FILLS THE CARD DECK WITH HIDDEN CARDS
 while ($i != 5) {
   echo "
   <div class='card x-200 bg-primary' style='visibility: hidden;'>
     <div class='card-header img-200 w-100'>
       <span class='primary'><strong>$</strong>".$row['price']."</span>
       <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
           <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
     </div>
     <div class='card-body text-center'>
       <span class='card-title card-text font'>".$row['name']."</span><br>
       <span class='badge badge-pill badge-warning badge-md'>".$row['class']."</span>
       <span class='badge badge-pill badge-warning badge-md'>".$row['type']."</span>
     </div>
       <a class='btn btn-primary w-100'href='#'>BUY</a>
   </div>";
   $i++;
 }
 if ($i==5) {
   echo "
   <div class='card x-200 bg-primary' style='visibility: hidden;'>
     <div class='card-header img-200 w-100'>
       <span class='primary'><strong>$</strong>".$row['price']."</span>
       <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
           <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
     </div>
     <div class='card-body text-center'>
       <span class='card-title card-text font'>".$row['name']."</span><br>
       <span class='badge badge-pill badge-warning badge-md'>".$row['class']."</span>
       <span class='badge badge-pill badge-warning badge-md'>".$row['type']."</span>
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
        echo "
        <div class='card x-200 bg-primary'>
          <div class='card-header img-200 w-100'>
            <span class='primary'><strong>$</strong>".$row['price']."</span>
            <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
                <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
          </div>
          <div class='card-body text-center'>
            <span class='card-title card-text font'>".$row['name']."</span><br>
            <span class='badge badge-pill badge-warning badge-md'>".$row['class']."</span>
            <span class='badge badge-pill badge-warning badge-md'>".$row['type']."</span>
          </div>
            <a class='btn btn-primary w-100'href='#'>BUY</a>
        </div>";
        $i++;

      } elseif ($i == 5) {
        echo "
        <div class='card x-200 bg-primary'>
          <div class='card-header img-200 w-100'>
            <span class='primary'><strong>$</strong>".$row['price']."</span>
            <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
            <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
          </div>
          <div class='card-body text-center'>
            <span class='card-title card-text font'>".$row['name']."</span><br>
            <span class='badge badge-pill badge-warning badge-md'>".$row['class']."</span>
            <span class='badge badge-pill badge-warning badge-md'>".$row['type']."</span>
          </div>
            <a class='btn btn-primary w-100'href='#'>BUY</a>
        </div>
        </div>
        <div class='card-deck my-3'>";
        $i=1;
      }
    }
    while ($i != 5) {
      echo "
      <div class='card x-200 bg-primary' style='visibility: hidden;'>
        <div class='card-header img-200 w-100'>
          <span class='primary'><strong>$</strong>".$row['price']."</span>
          <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
              <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
        </div>
        <div class='card-body text-center'>
          <span class='card-title card-text font'>".$row['name']."</span><br>
          <span class='badge badge-pill badge-warning badge-md'>".$row['class']."</span>
          <span class='badge badge-pill badge-warning badge-md'>".$row['type']."</span>
        </div>
          <a class='btn btn-primary w-100'href='#'>BUY</a>
      </div>";
      $i++;
    }
    if ($i==5) {
      echo "
      <div class='card x-200 bg-primary' style='visibility: hidden;'>
        <div class='card-header img-200 w-100'>
          <span class='primary'><strong>$</strong>".$row['price']."</span>
          <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
              <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
        </div>
        <div class='card-body text-center'>
          <span class='card-title card-text font'>".$row['name']."</span><br>
          <span class='badge badge-pill badge-warning badge-md'>".$row['class']."</span>
          <span class='badge badge-pill badge-warning badge-md'>".$row['type']."</span>
        </div>
          <a class='btn btn-primary w-100'href='#'>BUY</a>
      </div>";
    }



   }

   function filterSearch($class,$type,$sort) {

     global $conn;
     global $sql;
      $sql = "SELECT * FROM products ";
      if($class !="") {
        $sql .= "WHERE class='$class'";
      }
      if($type !="") {
        $sql .= "AND type='$type'";
      }

      if ($sort !="") {
        $sql .= " ORDER BY ".$sort;
      }




        $result = $conn->query($sql);


       if ($result->num_rows == 0) {

         echo "<div class='alert alert-danger text-center' role='alert'>
                 <strong>Oh snap!</strong> we havent found anything.
               </div>";
               die();
       }




       $i = 1;
       echo "<div class='card-deck my-3'>";

       while($row = $result->fetch_assoc()){
         if ($i!=5) {
           echo "
           <div class='card x-200 bg-primary'>
             <div class='card-header img-200 w-100'>
               <span class='primary'><strong>$</strong>".$row['price']."</span>
               <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
                   <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
             </div>
             <div class='card-body text-center'>
               <span class='card-title card-text font'>".$row['name']."</span><br>
               <span class='badge badge-pill badge-warning badge-md'>".$row['class']."</span>
               <span class='badge badge-pill badge-warning badge-md'>".$row['type']."</span>
             </div>
               <a class='btn btn-primary w-100'href='#'>BUY</a>
           </div>";
           $i++;

         } elseif ($i == 5) {
           echo "
           <div class='card x-200 bg-primary'>
             <div class='card-header img-200 w-100'>
               <span class='primary'><strong>$</strong>".$row['price']."</span>
               <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
               <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
             </div>
             <div class='card-body text-center'>
               <span class='card-title card-text font'>".$row['name']."</span><br>
               <span class='badge badge-pill badge-warning badge-md'>".$row['class']."</span>
               <span class='badge badge-pill badge-warning badge-md'>".$row['type']."</span>
             </div>
               <a class='btn btn-primary w-100'href='#'>BUY</a>
           </div>
           </div>
           <div class='card-deck my-3'>";
           $i=1;
         }
       }
       while ($i != 5) {
         echo "
         <div class='card x-200 bg-primary' style='visibility: hidden;'>
           <div class='card-header img-200 w-100'>
             <span class='primary'><strong>$</strong>".$row['price']."</span>
             <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
                 <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
           </div>
           <div class='card-body text-center'>
             <span class='card-title card-text font'>".$row['name']."</span><br>
             <span class='badge badge-pill badge-warning badge-md'>".$row['class']."</span>
             <span class='badge badge-pill badge-warning badge-md'>".$row['type']."</span>
           </div>
             <a class='btn btn-primary w-100'href='#'>BUY</a>
         </div>";
         $i++;
       }
       if ($i==5) {
         echo "
         <div class='card x-200 bg-primary' style='visibility: hidden;'>
           <div class='card-header img-200 w-100'>
             <span class='primary'><strong>$</strong>".$row['price']."</span>
             <span class='float-right primary'><strong>STOCK:</strong>".$row['stock']."</span>
                 <img class='card-img-top' src='img/main/class/".$row['class']."/".$row['url'].".png' alt='Card image cap' >
           </div>
           <div class='card-body text-center'>
             <span class='card-title card-text font'>".$row['name']."</span><br>
             <span class='badge badge-pill badge-warning badge-md'>".$row['class']."</span>
             <span class='badge badge-pill badge-warning badge-md'>".$row['type']."</span>
           </div>
             <a class='btn btn-primary w-100'href='#'>BUY</a>
         </div>";
       }



      }


   ?>
