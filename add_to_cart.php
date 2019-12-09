<?php 

include_once("functions.php");

function add_to_cart($id) {

    if(!isset($_SESSION)) {
        session_start();
    };

    $sql2 = "SELECT * FROM product_details WHERE product_id=$id";
    $conn2 = db_connect();

    //query db and assign query results to variable
    $product_result = $conn2->query($sql2);

    //if there is a result,
    if($product_result->num_rows) {
        $row = $product_result->fetch_assoc();
        
        $productName = $row["product_name"];
        $productPrice = $row["product_cost"];

    } else {
        echo "no result";
    }
    
    // add that info to cart array in the form of an "item" object 
    if(isset($_SESSION["shopping_cart"][$id])) {
        $_SESSION["shopping_cart"][$id]["quantity"] += 1;
    } else {
        $newItem = [
            "product_name" => "$productName",
            "product_price" => "$productPrice",
            "quantity" => 1
        ];
        $_SESSION["shopping_cart"][$id] = $newItem;
    }
}



?>