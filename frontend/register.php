<?php require_once 'view/header.php';
if (@ $_SERVER['HTTPS'] != 'on') {
   header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
   exit;
 }?>
<?php require_once '../backend/process-check-login.php';

restrictLogin();
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

              <form class="mt-3 needs-validation" action="../backend/process-registration.php" method="POST" novalidate="">
                <div class="input-group shadow">
                  <input type="text" class="form-control" name="username" placeholder="Username" maxlength="15" required="" >
                  <!-- <div class="input-group-append">
                    <a href="../backend/process-username-verify.php"class="btn btn-success" type="button" name="verify">Verify</a>
                  </div> -->
                  <div class="invalid-feedback">
                    Username is required.
                  </div>

                </div>
                <div class="form-group shadow mt-4">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" minlength ="8" required="">
                  <div class="invalid-feedback">
                    Password is required. 8 Charachters
                  </div>
                </div>

                <div class="form-group shadow mt-4">
                  <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required="">
                  <div class="invalid-feedback">
                    First Name is required.
                  </div>
                </div>
                <div class="form-group shadow mt-4">
                  <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name">
                </div>
                <div class="form-group shadow mt-4">
                  <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required="">
                  <div class="invalid-feedback">
                    Last Name is required.
                  </div>
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


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Checkout example for Bootstrap_files/jquery-3.2.1.slim.min.js.download" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./Checkout example for Bootstrap_files/popper.min.js.download"></script>
    <script src="./Checkout example for Bootstrap_files/bootstrap.min.js.download"></script>
    <script src="./Checkout example for Bootstrap_files/holder.min.js.download"></script>
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
