<?php require_once 'view/header.php' ?>

<?php require_once 'view/nav-main.php' ?>

<script type="">
$(document).ready(function() {
    $('.minus').click(function () {
      var $input = $(this).parent().find('input');
      var count = parseInt($input.val()) - 1;
      count = count < 1 ? 1 : count;
      $input.val(count);
      $input.change();
      return false;
    });
    $('.plus').click(function () {
      var $input = $(this).parent().find('input');
      $input.val(parseInt($input.val()) + 1);
      $input.change();
      return false;
    });
  });

</script>

<?php require_once '../backend/process-load-product.php';

 if (isset($_GET['id'])) {
   if (isset($_GET['qty'])) {
     loadProduct($_GET['id'],$_GET['qty']);
   } else {
     loadProduct($_GET['id'],1);
   }



} else {
  echo "<div class='alert alert-danger text-center' role='alert'>
          <strong>YIKES!</strong> You didnt select any product</div>";
}

?>



  </body>
</html>


  </body>
</html>
