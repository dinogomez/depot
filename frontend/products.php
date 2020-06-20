<?php require_once 'view/header.php' ?>

<?php require_once 'view/nav-main.php' ?>



<?php require_once '../backend/process-load-product.php';

 if (isset($_GET['id'])) {
   loadProduct($_GET['id']);



} else {
  echo "<div class='alert alert-danger text-center' role='alert'>
          <strong>YIKES!</strong> You didnt select any product</div>";
}

?>




  </body>
</html>


  </body>
</html>
