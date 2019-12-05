<?php

include("functions.php");

function display_cart_item($item) {
?>

    <tr>
        <td data-th="Product">
            <div class="row">
                <div class="col-sm-2 hidden-xs"><img src="<?php echo $item["product_name"] ?>.jpg" alt="<?php echo $item["product_name"] ?>" style="max-width:100px; max-height:100px;"class="img-responsive"/></div>
                <div class="col-sm-10">
                    <h4 class="ml-3"><?php echo $item["product_name"] ?></h4>
                </div>
            </div>
        </td>
        <td data-th="Price"><?php echo "$". $item["product_price"] ?></td>
        <td data-th="Quantity">
            <input type="number" class="form-control text-center" value="<?php echo $item["quantity"] ?>">
        </td>
        <td data-th="Subtotal" class="text-center"><?php row_total($item["quantity"], $item["product_price"]) ?></td>
        <td class="actions" data-th="">
            <button class="btn btn-sm"><img src="trash.png" style="max-width:25px;"/></button>
        </td>
    </tr>

<?php




}


?>
