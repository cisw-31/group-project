<?php 

    function display_cart_item($item) {

        ?>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="/product-images/<?php echo $item["product_name"] ?>.jpg" class="card-img" alt="<?php echo $item["product_name"] ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item["product_name"] ?></h5>
                        <p class="card-text"><?php echo $item["product_price"] ?></p>
                        <p class="card-text">Quantity: <?php echo $item["quantity"] ?></p>
                    </div>
                </div>
            </div>
        </div>


        <?php
    }


?>