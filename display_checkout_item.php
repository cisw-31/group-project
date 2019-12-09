<?php 

    function row_total($qty, $price) {
        $tot = $qty * $price;
        echo "$". number_format($tot, 2);
    }

    function display_checkout_item() {
        if(count($_SESSION["shopping_cart"]) > 0 ) {
            foreach($_SESSION["shopping_cart"] as $item) {
                ?>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0"><?php echo $item["product_name"] ?></h6>
                        <small class="text-muted"><?php echo $item["quantity"]." x ".$item["product_price"] ?></small>
                    </div>
                    <span class="text-muted"><?php row_total($item["quantity"], $item["product_price"]); ?></span>
                </li>
                <?php

            }
        }



    }

?>