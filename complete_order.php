<?php 
// refreshes the session because the order is now complete
    include("functions.php");
    session_unset();
    @session_start();
    $_SESSION["shopping_cart"] = [];
    
    make_header();

// this function prints checkout form data if it exists
function print_if_set($field) {
    if(isset($_POST[$field])) {
        echo $_POST[$field]." ";
    }
}
?>

<div class="container-lg d-flex justify-content-center">
    <img src="success_plant.png"/>
</div>

<div class="container-md d-flex justify-content-center">
    <h1>Thank You!</h1>
</div>

<div class="container-md d-flex justify-content-center">
    <h3>Your order is on it's way.</h3>
</div>


<br/>
<div class="container-lg w-100">
    <div class="container-sm w-50 pl-5">
        <h3>Order Details</h3>
        <?php $order_number= rand(9999999,99999999)?>
        <h4 class="text-success"><?php echo "Order Number: ".$order_number ?></h4>
        <h5><?php echo $_POST["first-name"]." ". $_POST["last-name"] ?></h5>
        <h5><?php echo $_POST["address"]." ".$_POST["address-2"]?></h5>
        <h5><?php echo $_POST["city"].", ".$_POST["state"]." ".$_POST["zip"] ?></h5>
    </div>
    <br/>

    <?php

    // this checks whether shipping info exists
    // and prints if it does from print_shipping_info.php
    if(strlen($_POST["ship_first_name"]) > 0) {
        print_shipping_info();
    }
    ?>

</div>

<div class="container-md d-flex justify-content-center mt-5">
    <h6>For questions about your email please contact orders@jejeti.com</h6>
</div>




<?php
make_footer();
?>