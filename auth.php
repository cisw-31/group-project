<?php

// include function files for this application
require_once("functions.php");
session_start();


//creates html header (see functions.php) TEST COMMENT
make_header();

if (($_POST['username']) && ($_POST['passwd'])) {
	// they have just tried logging in

    $username = $_POST['username'];
    $passwd = $_POST['passwd'];

    if (login($username, $passwd)) {
      $_SESSION['customer_username'] = $username;
    } else {
      // unsuccessful login
      do_html_header("Problem:");
      echo "<p>You could not be logged in.<br/>
            You must be logged in to view this page.</p>";
      do_html_url('login.php', 'Login');
      do_html_footer();
      exit;
    }
}


//creates html footer (see functions.php)
make_footer();


?>
