<?php 

    function cart_counter() {
        $count = 0;

        if(isset($_SESSION["shopping_cart"])) {
            foreach($_SESSION["shopping_cart"] as $item) {
                $count = $count + $item["quantity"];
            }
        }
        echo $count;
    }

?>