<?php

include_once("db_connect.php");
include_once("add_to_cart.php");

//start session if not running
if(!isset($_SESSION)) {
    session_start();
};

// $conn = new mysqli('localhost:3306', 'root', 'password', 'plant_database');


// //write db query
// $sql = "SELECT * FROM plant_index WHERE plant_id='2'";

// //query db and assign query results to variable
// $result = $conn->query($sql);

// //if there is a result,
// if($result->num_rows) {
//     $row = $result->fetch_assoc();

//     $plantId = $row["plant_id"];
//     $plantName = $row["plant_botanical"];
//     $cost_id = $row["cost_id"];
// }


// $sql_cost = "SELECT cost_amount FROM cost_index WHERE cost_id=$cost_id";

// $result2 = $conn->query($sql_cost);

// if($result2->num_rows) {
//     $row2 = $result2->fetch_assoc();

//     $plantPrice = $row2["cost_amount"];
// }



// // if ($result->num_rows > 0) {
// //     // output data of each row
// //     while($row = $result->fetch_assoc()) {
// //         echo "plant id: " . $row["plant_id"]. " Cost ID: " . $row["cost_id"];
// //     }
// // } else {
// //     echo "0 results";
// // }


// $item_array = array(
//     "item_id" => 99873,
//     "item_name" => "plant stuff",
//     "item_price" => 123.44,
//     "item_image" => "/FRA-shrubs.jpg"
// );

// $_SESSION["shopping_cart"][0] = $item_array;

// $item_price = array_column($_SESSION["shopping_cart"][0], "item_price");

// echo $item_price;

addToCart(1);
addToCart(1);
addToCart(3);
addToCart(2);



?>
