<?php


session_start();


//grabs function files 
include("functions.php");

//creates html header (see functions.php) TEST COMMENT
make_header();

//Include the content of our homepage
include("frontpage.php");


//creates html footer (see functions.php)
make_footer();

?>



