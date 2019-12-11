 <?php
 include("functions.php");
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

        ?>