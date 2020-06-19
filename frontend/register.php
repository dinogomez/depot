<?php require_once 'view/header.php'; ?>
<?php require_once '../backend/process-check-login.php'; ?>
<?php isLogin(); ?>


?>
    <main>
      <div class="d-flex justify-content-center mt-5">
        <div class="container outer col-4" style="width:150%">


            <div class="border px-5 pt-5 pb-2 " >
              <div class="text-center  border-bottom" style="margin-top:-5%;">
                <div class="d-flex justify-content-center box">
                  <a href="index.php"><img class="img-logo mr-1"src="img/depot-favicon.png" alt=""></a>
                    <a href="index.php"><span class="font-logo">DEPOT</span></a>

                </div>
              </div>

              <!--
              <div class="alert alert-danger text-center" role="alert">
                  <strong>Wizerd</strong> is not a unique username.
              </div> -->
              <?php   if (isset($_POST['verification'])){
              echo "<div class='alert alert-success text-center' role='alert'>
                  <strong>Wizerd</strong> is a valid username.
              </div>";
              } ?>

              <form class="mt-3" action="../backend/process-registration.php" method="POST">
                <div class="input-group shadow">
                  <input type="text" class="form-control" name="username" placeholder="Username" maxlength="15" required >
                  <!-- <div class="input-group-append">
                    <a href="../backend/process-username-verify.php"class="btn btn-success" type="button" name="verify">Verify</a>
                  </div> -->


                </div>
                <div class="form-group shadow mt-4">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" minlength ="8" required>
                </div>

                <div class="form-group shadow mt-4">
                  <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                </div>
                <div class="form-group shadow mt-4">
                  <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name">
                </div>
                <div class="form-group shadow mt-4">
                  <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                </div>
                <div class="form-group shadow mt-4">
                  <input type="text" class="form-control" id="suffix" name="suffix" placeholder="Suffix">
                </div>


              <hr class="">
                <!-- <p>.DEPOT is not affiliated with STEAM.</p> -->
                <div class="text-center mt-2 mb-3" >
                  <input class="g-btn g-btn--purple w-100" type="submit" name="register" value="Register" >

                </div>




                </form>



          </div>
          <div class="text-center font Raleway card-footer border" style="width:">
            <span class="">Already have an Account? <a class="purple-nav"href="login.php">Login!</a></span>
          </div>
      </div>





    </main>
    <?php require_once 'view/footer.php' ?>
