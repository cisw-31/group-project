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
        <div class="container">
            <div class="row admin-welcome justify-content-center">
                <h1>Welcome to the Admin Dashboard, <?php echo ucfirst($username); ?>.</h1> 
            </div> 
            <div class="row admin-options justify-content-center">
    
                    <ul>
                        <a href="mod_cat_form.php?value=add">Add Category to Shop</a><br>
                        <a href="mod_cat_form.php?value=del">Delete Category from Shop</a><br>
                        <a href="mod_product_form.php?value=add">Add Product to Shop</a><br>
                        <a href="mod_product_form.php?value=del">Delete Product from Shop</a><br>
                    </ul>
            </div>
        
        </div>
    
        <?php make_footer(); ?>

        <?php
    }
    else{
?>
        <div class="row invalid-info justify-content-center">
            <h1> Invalid </h1>
        </div>

<?php
    }



?>