<?php

  function navbarIsLogin()
  {
    session_start();
    if (isset($_SESSION['username'])) {
      echo "
      <div class='dropdown'>
        <button class='btn btn-45 font-15 font dropdown-toggle ml-2'
              type='button' id='dropdownMenu1' data-toggle='dropdown'
              aria-haspopup='true' aria-expanded='false'>".$_SESSION['username']."

        </button>
        <div class='dropdown-menu'>
          <div class='text-center full-name'>
            <span class='dropdown-item text-uppercase'>".$_SESSION['fullName']."</span>
          </div>
          <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='#!'>Cart</a>
          <a class='dropdown-item' href='../backend/process-logout.php'>Logout</a>
        </div>
      </div>";
    } else {
      session_destroy();
      echo "<a class='btn btn-success ml-2 btn-45' href='login.php'>Login</a>";
    }
  }
  function isLogin(){
    session_start();
    if (isset($_SESSION['username'])) {
      header('Location:index.php');
    }
  }



 ?>
