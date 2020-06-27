<?php
if (@ $_SERVER['HTTPS'] != 'on') {
   header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
   exit;
 }

 ?>

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
              <div class="text-center mt-1 text-uppercase">
                <?php if (isset($_GET['error'])) { ?>
                  <div class="alert alert-danger">
                    <?php echo $_GET['error']; ?>
                  </div>
                <?php } ?>
                <?php if(isset($_GET['rdr']))
                echo "<div class='text-center mt-1 text-uppercase'><div class='alert alert-success'>".$_GET['rdr']."</div></div>";
                ?>
              </div>



              <form class="mt-3 needs-validation" action="../backend/process-login.php" novalidate="" method="POST">
                <?php if(isset($_GET['rdr'])) {
                  echo "<input type='hidden' class='form-control' id='username'  name='pid' value=".$_GET['pid'].">";
                  echo "<input type='hidden' class='form-control' id='username'  name='qty' value=".$_GET['qty'].">";


                }
                ?>
                <div class="form-group shadow mt-4">
                  <input type="text" class="form-control" id="username"  name="username" placeholder="Username" required="">
                  <div class="invalid-feedback">
                    Username is required.
                  </div>
                </div>

                <div class="form-group shadow mt-4">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
                  <div class="invalid-feedback">
                    Password is required.
                  </div>
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

    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>

    <?php require_once 'view/footer.php' ?>
