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
        foreach ($_SESSION["shopping_cart"] as $item) {
            ?>
                <h4><?php echo $item["product_name"] ?></h4>
                <h4><?php echo $item["product_price"] ?></h4>
                <h4><?php echo $item["quantity"] ?></h4>
            <?php
        };

        ?> 
        <h2>cart items here</h2>
        <a href="/checkout.php">
            <button type="button" class="btn btn-primary btn-lg">Checkout</button>
        </a>
        <a href="/">
            <button type="button" class="btn btn-secondary btn-lg">Keep Shopping</button>
        </a>
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

