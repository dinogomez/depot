<?php require_once 'view/header.php';
if (@ $_SERVER['HTTPS'] != 'on') {
   header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
   exit;
 } ?>
<?php require_once '../backend/process-check-login.php';
  isLogin();
 ?>
<?php require_once 'view/nav-main.php' ?>
<script type="text/javascript">
$(document).ready(function(){
$(".marker").tooltip({placement: 'right'});
});
</script>


<style>
input[type="text"], textarea,input[type="email"] {

background-color : rgb(25,25,25);
color: white;

}

input[type="date"], textarea,input[type="date"] {

  background-color : rgb(25,25,25);
  color: white;

}
input[type="date"]:focus{
  background-color : rgb(25,25,25);
  color: white;

}

  .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
    background-color : rgb(97,60,280);
  }
  .custom-control-input:checked~.custom-control-label::before {
      color: #fff;
      background-color : rgb(97,60,280);
  }

}

.glyphicon {color: white !important;}

</style>
<div class="">
  <h3 class="text-danger float-right"><a class="font btn btn-danger rounded"href="cart.php">Return</a></h3>

</div>
<div class="container pt-5">
  <div class="text-center mb-5">

    <div class="text-center">
      <h2 class="purple-nav">Checkout form</h2>
      <p class="lead">Please fill up the following transaction details.</p>
    </div>


  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="font">Your cart</span>
        <?php
        require_once '../backend/process-cart-price.php';
        require_once '../backend/process-load-product.php';
        ?>
        <span class="badge badge-success badge-pill text-center"><?php echo getCount(); ?></span>
      </h4>
      <ul class="list-group mb-3">

        <?php


        global $discount;

        loadCheckout();
        if (isset($_GET['promo'])) {
          if ($_GET['promo'] == "DEPOT25") {
            $discount = 25.00;
             echo "  <li class='list-group-item d-flex justify-content-between lh-condensed container-depot'>
                <div class=''>
                  <h6 class='my-0 purple-nav'>PROMO</h6>
                  <small class='text-muted'>Discount</small>
                </div>
                <span class='text-muted'>-$25</span>
              </li>";
          }

        }
        $subtotal = getSubTotal() - $discount;
        $total = getTotal();
        $tax = getTax();

         ?>
         <li class="list-group-item d-flex justify-content-between container-depot small">

           <span>SUBTOTAL</span>
           <strong class="font">$<?php echo round($subtotal,2); ?></strong>
         </li>

         <li class="list-group-item d-flex justify-content-between container-depot  small">

           <span>TAX</span>
           <strong class="font">$<?php echo round($tax,2); ?></strong>
         </li>

        <li class="list-group-item d-flex justify-content-between container-depot font ">

          <span>TOTAL</span>
          <strong class="font">$<?php echo round($total,2); ?></strong>
        </li>
      </ul>

      <form autocomplete="off" class="card p-2 container-depot" action="../backend/process-promo.php" method="POST">
        <div class="input-group">
          <input type="text" class="form-control" name="promo" placeholder="Promo code">
          <div class="input-group-append">
            <input type="submit" class="btn btn-danger" value="Submit">
          </div>
        </div>
      </form>
    </div>
    <?php if (isset($_GET['msg'])) {
      echo $_GET['msg'];
    }
      $id = $_SESSION['uid'];
      $query = "SELECT * FROM checkout WHERE uid = ?";
      $pStatement = $conn->prepare($query);
      $pStatement->bind_param('i', $id );
      $pStatement->execute();
      $result = $pStatement->get_result();

      $firstn = "";
      $lastn = "";
      $email = "";
      $steam = "";


      while($row = $result->fetch_assoc()){

        $firstn = $row['firstName'];
        $lastn = $row['lastName'];
        $email = $row['email'];
        $steam = $row['steamUser'];

      }


     ?>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Trade Details</h4>
      <form class="needs-validation" novalidate="" action="../backend/process-checkout.php" method="POST" autocomplete="off">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName" class="text-muted">First name</label>

            <input type="text" class="form-control" id="firstName" name="firstname" placeholder="" required=""
            value="<?php echo $firstn; ?>"            >
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName" class="text-muted">Last name</label>

            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="" required=""
            value="<?php echo $lastn; ?>"            >
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username" class="text-muted">Steam Account</label>
          <div class="input-group">
            <div class="">
              <span class="input-group-text font">@</span>
            </div>
            <input type="text" class="form-control" id="username" name="steam" placeholder="Username" required=""
            value="<?php echo $steam; ?>"            >
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email" class="text-muted">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required="" value="<?php echo $email; ?>">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>




        <hr class="mb-4">

        <div class="custom-control custom-checkbox ">
          <input type="checkbox" class="custom-control-input" name="savei" value=1 id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="paypal">Paypal</label>

          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name" class="text-muted">Name on card</label>
            <input type="text" class="form-control" id="cc-name" name="cc-name" placeholder="" required="">
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number" class="text-muted">Credit card number</label>
            <input type="text" class="form-control" name="cc" id="cc-number" placeholder="" required="">
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration" name="expire" class="text-muted">Expiration</label>
            <input type="date" class="form-control font" id="cc-expiration" placeholder=" " required="" name="cc-date" style="width:180px;">
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-expiration" name="cvv" class="text-muted">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" name="cc-ccv" required="">
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <input  class="btn btn-primary btn-lg btn-block" type="submit" name="" value="Confirm Purchase">
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 purple-nav text-center text-small">
    <p class="mb-1">© 2020-2021 Potted Plant</p>

  </footer>
</div>

<?php if (isset($_GET['checkout'])) {
    echo "  <script>$(document).ready(function(){ $('#myModal').modal('show'); });</script>

          <div class='modal fade' id='myModal' role='dialog'>
              <div class='modal-dialog modal-lg'>
                <div class='modal-content'>
                  <div class='modal-body'>
                    <ul class='list-group mb-3'>";


                      global $discount;

                      loadCheckout();
                      if (isset($_GET['promo'])) {
                        if ($_GET['promo'] == 'DEPOT25') {
                          $discount = 25.00;
                           echo  "  <li class='list-group-item d-flex justify-content-between lh-condensed container-depot'>
                              <div class=''>
                                <h6 class='my-0 purple-nav'>PROMO</h6>
                                <small class='text-muted'>Discount</small>
                              </div>
                              <span class='text-muted'>-$25</span>
                            </li>";
                        }

                      }
                      $subtotal = getSubTotal() - $discount;
                      $total = getTotal();
                      $tax = getTax();


                 echo "<li class='list-group-item d-flex justify-content-between container-depot small'>

                    <span>SUBTOTAL</span>
                    <strong class='font'>$".$subtotal."</strong>
                  </li>

                  <li class='list-group-item d-flex justify-content-between container-depot  small'>

                    <span>TAX</span>
                    <strong class='font'>$".$tax."</strong>
                  </li>

                 <li class='list-group-item d-flex justify-content-between container-depot font '>

                   <span>TOTAL</span>
                   <strong class='font'>$".$total."</strong>
                 </li>
               </ul>
             </div>
                 <div class=''>

                         <button type='button' class='my-3 mr-3 btn btn-danger float-right' data-dismiss='modal'>Leave</button>
                           <a class='my-3 mr-3 btn btn-primary float-right' href='checkout.php?confirm=y'>Confirm</a>

                 </div>
             </div>
         </div>
     </div>"; }  ?>

     <?php if (isset($_GET['confirm'])) {
         echo "  <script>$(document).ready(function(){ $('#myModal').modal('show'); });</script>

               <div class='modal fade' id='myModal' role='dialog'>
                   <div class='modal-dialog modal-lg'>
                     <div class='modal-content'>
                       <div class='modal-body'>

                       <div class='text-center mt-5'>
                       <h1 class='font'>Purchase Confirmed!</h1>
                       </div>
                  </div>
                      <div class=''>


                                <a class='my-3 mr-3 btn btn-primary float-right' href='../backend/process-clear-cart.php'>Confirm</a>

                      </div>
                  </div>
              </div>
          </div>"; }  ?>




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

  </body>
</html>
