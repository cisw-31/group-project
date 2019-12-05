<?php
    //grabs function files 
    include("functions.php");

    session_start();

    

    //creates html header (see functions.php)
    make_header();

    //make page title function and add here


    // if items are in the cart, show items
    if(count($_SESSION["shopping_cart"]) > 0) {
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
                      
                    display_cart_item($item); 
                    
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

