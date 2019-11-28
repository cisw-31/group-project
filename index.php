<?php


session_start();

//new

$_SESSION['cartItems'] = [3, 4, 5];
//grabs function files 
include("functions.php");

//creates html header (see functions.php) TEST COMMENT
make_header();

//connects to database and returns $conn (see functions.php)
/*
$conn = new mysqli('localhost:3306', 'root', 'password', 'store_db');

$category_query = "SELECT * FROM categories;";
if($result = mysqli_query($conn, $category_query)) {
    $numrows = mysqli_num_rows($result);
    echo("there are ".$numrows." categories"); 
}
*/
include("frontpage.php");


//creates html footer (see functions.php)
make_footer();

?>



