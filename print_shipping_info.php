<?php 
    function print_shipping_info() {
?>
        <div class="container-sm w-50 pl-5">
            <h4>Shipping Address</h4>
            <h5><?php print_if_set("ship_first_name"); print_if_set("ship_last_name");?></h5>
            <h5><?php print_if_set("ship_address"); print_if_set("ship_address2"); ?></h5>
            <h5><?php print_if_set("ship_city"); echo ", "; print_if_set("ship_state"); print_if_set("ship_zip"); ?></h5>
        </div>

<?php
    }
?>