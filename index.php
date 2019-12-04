<?php


session_start();


//grabs function files 
include("functions.php");

//creates html header (see functions.php) TEST COMMENT
make_header();

//connects to database and returns $conn (see functions.php)

/*$conn = db_connect();

$category_query = "SELECT * FROM categories;";
if($result = mysqli_query($conn, $category_query)) {
    $numrows = mysqli_num_rows($result);
    echo("there are ".$numrows." categories"); 
}*/

include("frontpage.php");


//creates html footer (see functions.php)
make_footer();

?>



