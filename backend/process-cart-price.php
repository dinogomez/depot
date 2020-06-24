<?php

    @session_start();



    function getSubTotal()
    {
        $subtotal = 0;
      for ($i=0; $i < count($_SESSION['total']) ; $i++) {
        $subtotal += $_SESSION['total'][$i];
      }


      return $subtotal;
    }

    function getTax()
    {
      $tax = getSubTotal() * 0.05;

      return $tax;
    }

    function getTotal()
    {
      $subtotal = getSubTotal();


      //5% Trading Tax
      $totalprice = $subtotal + getTax();

      return $totalprice;
    }







 ?>
