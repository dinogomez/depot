<?php require_once 'view/header.php' ?>
<?php require_once 'view/nav-main.php' ?>


    <main>
      <div class="d-flex justify-content-center mt-5">
        <div class="container login-container col-4">


            <div class="jumbotron  ">
              <div class="text-center border-bottom border-primary" style="margin-top:-5%;">
                <h1 class="display-4"><span class="purple-nav">.</span>DEPOT</h1>
              </div>

              <form class="mt-3" action="../backend/process-login.php" method="POST">
                <div class="form-group shadow mt-4">
                  <input type="text" class="form-control" id="username"  name="username" placeholder="Username">
                </div>

                <div class="form-group shadow mt-4">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>

              <hr class="my-4">
              <div class="text-center">
                <!-- <p>.DEPOT is not affiliated with STEAM.</p> -->
                <p class="lead">
                  <input class="btn btn-primary w-100" type="submit" name="login" value="Login">
                  <a class="btn btn-success mt-3 w-100" href="register.php">Register</a>


                </p>
              </form>

              </div>

            </div>

          </div>
      </div>



    </main>

<?php require_once 'view/footer.php' ?>
