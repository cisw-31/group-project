<?php
    //grabs function files
    include("functions.php");

    session_start();

    if (isset($_POST['submit']))

    {
        $prod_id = $_GET["value"];
        addToCart($prod_id);
    }

    if(isset($_POST["update_quantity"])) {
        if(isset($_SESSION["shopping_cart"])) {

            $targetProduct = $_POST["item_to_update"];
            $newQty = $_POST["update_quantity"];

            $tempSession = [];

            foreach($_SESSION["shopping_cart"] as $item) {
                if($item["product_name"] == $targetProduct) {
                    $item["quantity"] = $newQty;
                }
                array_push($tempSession, $item);
            }
            session_unset();
            // session_start();
            $_SESSION["shopping_cart"] = $tempSession;
        }
    }

    if(isset($_POST["delete"])) {
        // delete_cart_item($_POST["item"]);
        if(isset($_SESSION["shopping_cart"])) {

            $cart_contents = [];

            foreach($_SESSION["shopping_cart"] as $cart_item) {
              if($cart_item["product_name"] !== $_POST["item"]) {
                array_push($cart_contents, $cart_item);
                }
              }

              session_unset();
              // session_start();
              $_SESSION["shopping_cart"] = $cart_contents;

          } else {
            echo "not set?";
          }
    }

    make_header();



    // if items are in the cart, show items
    if(isset($_SESSION["shopping_cart"]) && count($_SESSION["shopping_cart"]) > 0) {
        //display cart items
    ?>
        <div class="container">
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:50%">Product</th>
                        <th style="width:10%">Price</th>
                        <th style="width:8%">Quantity</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                <tbody>

                <?php

                foreach ($_SESSION["shopping_cart"] as $item) {
                    if($item["quantity"] > 0) {
                        display_cart_item($item);
                    }
                };

                ?>


                </tbody>
                <tfoot>
                    <tr class="visible-xs">

                    </tr>
                    <tr>
                        <td><a href="/" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-center"><strong><?php calculate_cart_total(); ?></strong></td>
                        <td><a href="checkout.php" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                    </tr>
                </tfoot>
            </table>
        </div>





        <!-- <a href="/checkout.php">
            <button type="button" class="btn btn-primary btn-lg">Checkout</button>
        </a>
        <a href="/">
            <button type="button" class="btn btn-secondary btn-lg">Keep Shopping</button>
        </a> -->

        <?php
    } else {
        //else show "no items in cart"
        ?>
        <div class="container">
            <div class="alert alert-warning" role="alert">
                There are no items in your shopping cart!
            </div>
            <a href="/">
                <button type="button" class="btn btn-secondary btn-lg">Keep Shopping</button>
            </a>
        </div>
        <?php
    }

    ?>



    <?php


    //creates html footer (see functions.php)
    make_footer();

?>
