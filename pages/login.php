<?php require_once 'view/header.php' ?>


    <main>
      <div class="d-flex justify-content-center">
        <div class="container login-container col-4">


            <div class="jumbotron ">
              <div class="text-center border-bottom border-primary" style="margin-top:-5%;">
                <h1 class="display-4"><span class="purple-nav">.</span>DEPOT</h1>
              </div>

              <form class="mt-3">
                <div class="form-group shadow mt-4">
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username">
                </div>
                <div class="form-group shadow mt-4">
                  <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password">
                </div>

              </form>
              <hr class="my-4">
              <div class="text-center">
                <!-- <p>.DEPOT is not affiliated with STEAM.</p> -->
                <p class="lead">
                  <a class="btn btn-primary w-100" href="#">Login</a>
                  <a class="btn btn-success mt-3 w-100" href="#">Register</a>


                </p>
              </div>

            </div>

          </div>
      </div>



    </main>

<?php require_once 'view/footer.php' ?>
