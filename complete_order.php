<?php 
    include("functions.php");
    
    
    make_header();
?>


<div class="container completed-order">

    <div class="row completed-order-header ">
     
        <div class="col-6">
            <h1>Order Summary</h1>
        </div>
   

    </div>
    <div class="row completed-order-date">
        <?php echo date('l jS \of F Y h:i:s A'); ?>
    </div>

    <div class="row completed-order-details">
        <div class="col completed-order-shipping">
            <ul><?php echo $_POST["first-name"]." ". $_POST["last-name"] ?> </ul>
            <ul><?php echo $_POST["address"]." ".$_POST["address-2"]?> </ul>
            <ul><?php echo $_POST["city"].", ".$_POST["state"]." ".$_POST["zip"] ?></ul>
        </div>
    </div>

</div>



<?php

make_footer();
?>