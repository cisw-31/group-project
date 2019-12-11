<?php

include("functions.php");

function display_cart_item($item) {
?>

    <tr>
        <td data-th="Product">
            <div class="row">
                <div class="col-sm-2 hidden-xs"><img src="/product-images/<?php echo $item["product_name"] ?>.jpg" alt="<?php echo $item["product_name"] ?>" style="max-width:100px; max-height:100px;"class="img-responsive"/></div>
                <div class="col-sm-10">
                    <h4 class="ml-3"><?php echo $item["product_name"] ?></h4>
                </div>
            </div>
        </td>
        <td data-th="Price"><?php echo "$". $item["product_price"] ?></td>
        <td data-th="Quantity">
            <form class="d-flex" id="quantity_form" method="post" action="shopping_cart.php">
                <input id="update_quantity" name="update_quantity" type="number" class="form-control text-center" value="<?php echo $item["quantity"] ?>" style="min-width:75px;">
                <input type="hidden" name="item_to_update" value="<?php echo $item["product_name"] ?>">
                <button type="submit" class="btn btn-sm"><img src="refresh.png" style="max-width:25px;"/></button>
            </form>
        </td>
        <td data-th="Subtotal" class="text-center"><?php row_total($item["quantity"], $item["product_price"]) ?></td>
        <td class="actions" data-th="">
        
            <form method="post" action="shopping_cart.php">
                <input type="hidden" name="item" value="<?php echo $item["product_name"] ?>">
                <button name="delete" class="btn btn-sm"><img src="trash.png" style="max-width:25px;"/></button>
            </form>
        </td>
    </tr>

<?php




}


?>
