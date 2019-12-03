<?php 

function addToCart($id) {
    echo "adding to cart ...";

    $sql = "SELECT * FROM product_details WHERE product_id=$id";
    $conn = new mysqli('localhost:3306', 'root', 'password', 'plant_database');

    //query db and assign query results to variable
    $result = $conn->query($sql);

    //if there is a result,
    if($result->num_rows) {
        $row = $result->fetch_assoc();
        
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
    
    echo "im here: ". $_SESSION["shopping_cart"][$id]["product_name"];
    echo " im here too: ". $_SESSION["shopping_cart"][$id]["product_price"];
    echo " im here too: ". $_SESSION["shopping_cart"][$id]["quantity"];
}



?>