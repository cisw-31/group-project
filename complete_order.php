<?php 
    include("functions.php");
    
    
    make_header();
?>


<h1>Order Summary</h1>
<br/>
<h3>Billing Address</h3>
<h4><?php echo $_POST["first-name"]." ". $_POST["last-name"] ?></h4>
<h5><?php echo $_POST["address"]." ".$_POST["address-2"]?></h5>
<h5><?php echo $_POST["city"].", ".$_POST["state"]." ".$_POST["zip"] ?></h5>



<?php

make_footer();
?>