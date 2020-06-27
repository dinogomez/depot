<?php require_once 'view/header.php' ?>
<?php require_once '../backend/process-check-login.php';
  isLogin();
 ?>
<?php require_once 'view/nav-main.php' ?>
<script type="text/javascript">
$(document).ready(function(){
$(".marker").tooltip({placement: 'right'});
});
</script>




            <table class="container-fluid table table-hover table-depot p5">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>

                    <?php require_once '../backend/process-retrieve-cart.php'; ?>
                    <?php require_once '../backend/process-cart-price.php';

                    $subtotal = getSubTotal();
                    $total = getTotal();
                    $tax = getTax();
                    ?>


                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>$<?php echo $subtotal; ?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5><a href="#" class="marker font"
                            title="Transaction tax of 5% of total price.">Tax 5%</a></h5></td>
                        <td class="text-right"><h5><strong>$<?php echo round($tax,2); ?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>$<?php echo round($total,2); ?></strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <a  class="font"href="index.php">Continue Shopping</a>
                        <td>
                        <a  class="btn btn-green"href="checkout.php">Checkout</a>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


  </body>
</html>
