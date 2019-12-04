<?php 

    function calculate_cart_total() {
        $cart_total = 0;
        if(count($_SESSION["shopping_cart"]) > 0) {
            foreach($_SESSION["shopping_cart"] as $item) {
                $item_total = $item["quantity"] * $item["product_price"];
                $cart_total = $cart_total + $item_total;
            }
        }
        echo "$". $cart_total;
    }

?>