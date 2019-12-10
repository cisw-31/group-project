<?php

    include("functions.php");
    if (($_POST['username']) && ($_POST['passwd'])) {
	// they have just tried logging in
        $username = $_POST['username'];
        $passwd = $_POST['passwd'];
    }
    else {
        exit();
    }

    $conn = db_connect_two();
    //queries database for all categories and prints the link
    $category_query = "SELECT * FROM Admin WHERE UserName='$username' AND Passwrd='$passwd';";
    $result = mysqli_query($conn, $category_query);
    //f$row = mysqli_fetch_row($result);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['admin_user'] = $username;
        make_header();
        ?>
        <div class="container"> </div>
    
        <?php make_footer(); ?>

        <?php
    }
    else{


    }



?>