<?php

if (@ $_SERVER['HTTPS'] != 'on') {
   header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
   exit;
 }

 ?>
<?php require_once 'view/header.php' ?>
<?php require_once 'view/nav-main.php' ?>
<?php require_once '../backend/process-list-search-products.php';


?>


  <div class="container-fluid  p-2 pt-5" style="margin-top:-5%">
    <?php

      if (isset($_GET['search'])) {
        listSearch($_GET['search']);
      } elseif (isset($_GET['class']) and isset($_GET['type']) and isset($_GET['sort'])) {
        filterSearch($_GET['searchFilter'],$_GET['class'],$_GET['type'],$_GET['sort']);

      } else {
        listProducts();

      }

    ?>
  </div>





  </body>
</html>
