<?php require_once 'view/header.php' ?>
<?php require_once 'view/nav-main.php' ?>
<?php require_once '../backend/process-list-products.php'; ?>



    <hr>
    <?php

      if (isset($_GET['search'])) {
        listSearch($_GET['search']);
      } else {
        listProducts();
      }

    ?>



  </body>
</html>
