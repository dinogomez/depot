<?php require_once 'view/header.php'; ?>
<?php require_once '../backend/process-check-login.php'; ?>

<?php restrictLogin(); ?>

    <main>
      <div class="d-flex justify-content-center mt-5">
        <div class="container login-container col-4">


            <div class="border  px-5 pt-5 pb-2 shadow" style="width:110%">
              <div class="text-center  border-bottom" style="margin-top:-5%;">
                <div class="d-flex justify-content-center box">
                  <a href="index.php"><img class="img-logo mr-1"src="img/depot-favicon.png" alt=""></a>
                    <a href="index.php"><span class="font-logo">DEPOT</span></a>

                </div>
              </div>
              <div class="text-center mt-1">
                <?php if (isset($_GET['error'])) { ?>
                  <div class="alert alert-danger">
                    <?php echo $_GET['error']; ?>
                  </div>
                <?php } ?>
              </div>

              <form class="mt-3" action="../backend/process-login.php" method="POST">
                <div class="form-group shadow mt-4">
                  <input type="text" class="form-control" id="username"  name="username" placeholder="Username">
                </div>

                <div class="form-group shadow mt-4">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <!-- <div class="text-center">
                  <a class="font Raleway"href="#"><strong>Forgot Password?</strong></a>
                </div> -->

              <div class="text-center">
                <!-- <p>.DEPOT is not affiliated with STEAM.</p> -->
                  <input class="g-btn g-btn--purple w-100 mt-1" type="submit" name="login" value="Login">



              </form>
                <hr >


              </div>

            </div>
            <div class="text-center font Raleway card-footer border shadow" style="width:110%">
              <span class="">Don't have an Account? <a class="purple-nav"href="register.php">Join Depot!</a></span>
            </div>


          </div>
      </div>



    </main>
    <?php require_once 'view/footer.php' ?>
