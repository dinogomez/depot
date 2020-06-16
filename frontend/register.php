<?php require_once 'view/header.php' ?>
<?php require_once 'view/nav-main.php' ?>


    <main>

      <div class="d-flex justify-content-center mt-5">
        <div class="container  col-4">



            <div class="jumbotron">
              <div class="text-center border-bottom border-primary" style="margin-top:-5%;">
                <h1 class="display-4"><span class="purple-nav">.</span>DEPOT</h1>
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
                  <input type="text" class="form-control" name="username" placeholder="Username" required >
                  <div class="input-group-append">
                    <a href="../backend/process-username-verify.php"class="btn btn-success" type="button" name="verify">Verify</a>
                  </div>


                </div>
                <div class="form-group shadow mt-4">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" minlength ="8" required>
                </div>

                <div class="form-group shadow mt-4">
                  <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                </div>
                <div class="form-group shadow mt-4">
                  <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name" required>
                </div>
                <div class="form-group shadow mt-4">
                  <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                </div>
                <div class="form-group shadow mt-4">
                  <input type="text" class="form-control" id="suffix" name="suffix" placeholder="Suffix">
                </div>


              <hr class="">
                <!-- <p>.DEPOT is not affiliated with STEAM.</p> -->
                <div class="text-center mt-3">
                  <input class="btn btn-primary" type="submit" name="register" value="Register">

                </div>




                </form>
            </div>


      </div>
    </div>



    </main>

<?php require_once 'view/footer.php' ?>
