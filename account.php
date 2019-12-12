<?php
 require_once("functions.php");
 
 make_header();
 
 if ($_POST['type'] == "login"){display_login_form();}
 elseif ($_POST['type'] == "edit"){display_edit_form();}
 elseif ($_POST['type'] == "signup"){display_signup_form();}

?>
