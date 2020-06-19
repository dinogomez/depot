<?php require_once 'view/header.php' ?>
<?php require_once 'view/nav-main.php' ?>
<?php require_once '../backend/process-list-search-products.php'; ?>




    <?php

      if (isset($_GET['search'])) {
        listSearch($_GET['search']);
      } elseif (isset($_GET['class']) and isset($_GET['type']) and isset($_GET['sort'])) {
        filterSearch($_GET['class'],$_GET['type'],$_GET['sort']);

      } else {
        listProducts();

      }
       
    ?>



  </body>
</html>
