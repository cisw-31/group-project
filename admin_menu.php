<?php
    @session_start();
    include("functions.php");
    //if session variables do not exist, we know that nobody is logged in
    if(@is_null($_SESSION['admin_user']) && @is_null($_SESSION['admin_pass'])) {
        if ((@$_POST['username']) && (@$_POST['passwd'])) {
        // they have just tried logging in
            $username = $_POST['username'];
            $passwd = $_POST['passwd'];
        }
        else {
?>          <div class="container">
                <div class="row not-admin justify-content-center">
                    <h1>You are authorized to view this content</h1>
                    <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?sectionNum=502.&lawCode=PEN">Information</a>
                </div>
                <div class="row not-admin justify-content-center">
                    <a href="index.php">Go back to store</a>
                </div>
            </div>
<?php    
            exit();
        }
    }
    else{
        //someone is already logged in as admin so store those values
        $username = $_SESSION['admin_user'];
        $passwd = $_SESSION['admin_pass'];
    }

    $conn = db_connect_two();
    //queries database for all categories and prints the link
    $category_query = "SELECT * FROM Admin WHERE UserName='$username' AND Passwrd='$passwd';";
    $result = mysqli_query($conn, $category_query);
    //f$row = mysqli_fetch_row($result);
    
    if (mysqli_num_rows($result) == 1) {
        
        $_SESSION['admin_user'] = $username;
        $_SESSION['admin_pass'] = $passwd;
        //echo $_SESSION['admin_user'];
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
        make_header();
?>
        <div class="row invalid-info justify-content-center">
            <h1> Invalid </h1> 
            
        </div>
        <div class="row invalid-info justify-content-center">
            <a href="admin_login.php">Go back to login</a>
        </div>

<?php
        make_footer();
    }



?>