<?php

  $class = $_POST['class'];
  $type = $_POST['type'];
  $sort = $_POST['sort'];

  header('Location:../frontend/index.php?class='.$class.'&type='.$type.'&sort='.$sort);

 ?>
