<?php

  function delete_cart_item($productName) {
    if(isset($_SESSION["shopping_cart"][$productName])) {
      unset($_SESSION["shopping_cart"][$productName]);
      $message = "item deleted";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
  };


?>
