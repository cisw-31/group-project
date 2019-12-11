<?php

// include function files for this application
require_once("functions.php");
session_start();



if ($_POST['type'] == "login"){     // user has just tried logging in
  if (($_POST['username']) && ($_POST['passwd'])) {
      $username = $_POST['username'];
      $passwd = $_POST['passwd'];

      if (login($username, $passwd)) { //successful login
        $_SESSION['customer_username'] = $username;
        make_header();
        echo "<p>You have successfully logged in as " . $username . "</p>";
        make_footer();
      } else {  // unsuccessful login
        make_header();
        echo "<p>You could not be logged in.<br/>
              You must be logged in to view this page.</p>";
        make_footer();
        exit;
      }
  }
}elseif ($_POST['type'] == "signup") { // user has just tried signing up
  if (($_POST['username']) && ($_POST['passwd'])) {
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];
    $shipname = $_POST['ship_name'];
    $shipaddress1 = $_POST['ship_address1'];
    $shipaddress2 = $_POST['ship_address2'];
    $shipcity = $_POST['ship_city'];
    $shipstate = $_POST['ship_state'];
    $shipzip = $_POST['ship_zip'];
    $shipcountry = $_POST['ship_country'];

    if (signup($username, $passwd,$shipname,$shipaddress1,$shipaddress2,$shipcity,$shipstate,$shipzip,$shipcountry)) {
      $_SESSION['customer_username'] = $username; //successful signup
      make_header();
      echo "<p>You have successfully signed up your account!</p>";
      make_footer();
    } else { // unsuccessful signup
      make_header();
      echo "<p>You could not sign up.</p>";
      make_footer();
      exit;
    }
  } else { // unsuccessful signup
    make_header();
    echo "<p>Missing user name or password.</p>";
    make_footer();
  }

}




?>
