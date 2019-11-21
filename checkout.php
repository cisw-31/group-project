<?php 
include("functions.php");
session_start();

make_header();

//if the cart is empty
    //display "cart is empty"
    //continue shopping button
if(count($_SESSION["cartItems"]) < 1) {
    ?>
        <h3>Your cart is empty</h3>
        <a href="/">
            <button type="button" class="btn btn-secondary btn-lg">Keep Shopping</button>
        </a>
    <?php
} else {
// gets contents of shopping cart from SESSION and displays them in summary table
    //foreach product id in $_SESSION["cartItems"]
        //SELECT title, img, price
        //display in summary table





//form action = purchase.php displays form to fill out order details
display_order_form();


//checkbox
    //if checkbox is checked
        //copy info from order form to shipping form
        //display completed form
    //else
        //display empty shipping form


//button to submit form


}








make_footer();

?>