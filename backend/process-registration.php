
<?php require_once 'db/connection.php' ?>
<!-- VIEWS -->
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
              <?php

                // REGISTRATION VARs
                $username   =  $_POST['username'];
                $password   =  $_POST['password'];
                $firstName  =  $_POST['firstName'];
                $middleName =  $_POST['middleName'];
                $lastName   =  $_POST['lastName'];
                $suffix     =  $_POST['suffix'];
                if(isset($username)){
                  $sql = "SELECT * FROM users WHERE username ='$username'";

                  $result = mysqli_query($conn,$sql);

                  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                  $count = mysqli_num_rows($result);
                  if ($count > 0) {
                    echo "<div class='alert alert-danger text-center mb-3' role='alert'>
                        Duplicate Username '<strong>".$username."</strong>', Try Again.
                        </div>  <div class='text-center'>
                        <a class='btn btn-primary' href='../frontend/register.php'>Back</a>

                      </div>";
                    die();
                  }
                  }
                try {
                  if (!$username   || !$password || !$firstName
                   || !$lastName  ) {

                    throw new Exception('Input is not complete');
                  }

                  // @ $db = new mysqli('localhost', 'root', '', 'testdp');

                  $dbError = mysqli_connect_errno();
                  if ($dbError) {
                    throw new Exception('Could not connect to database. Error: '.$dbError);
                  }


                  $query = "insert into users (username, password, firstName, middleName, lastName, suffix ) values (?, ?, ?, ?, ?, ?)";
                  $stmt = $conn->prepare($query);

                  // Using PHP 5.5's 'password_hash' function instead of 'hash'
                  // PASSWORD_DEFAULT algorithm uses 60+ charachter capacity.
                  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                  $stmt->bind_param("ssssss", $username, $hashedPassword, $firstName, $middleName, $lastName,$suffix);
                  $stmt->execute();
                  echo "<div class='alert alert-success text-center mb-3' role='alert'>
                      <strong>".$username."</strong> is successfully registered.
                  </div>  <div class='text-center'>
                      <a class='btn btn-primary' href='../frontend/login.php'>Login</a>

                    </div>";
                  $stmt->close();

                } catch (Exception $e) {
                  echo $e->getMessage();
                }

               ?>

            </div>


      </div>
    </div>



    </main>

<?php require_once 'view/footer.php' ?>
