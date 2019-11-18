<?php
    //grabs function files 
    include("functions.php");

    session_start();

    //creates html header (see functions.php)
    make_header();


    // if items are in the cart, show items
    if($_SESSION['cart'].length > 0) {
        //display cart items
        ?> 
        <h2>cart items here</h2>
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

    
    //show button for checkout, continue shopping, etc.
    ?>
    
    <?php


    //creates html footer (see functions.php)
    make_footer();

?>

