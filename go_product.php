<?php
    include("functions.php");


    //testing, this page will display all the products in the selected category
    $value = $_GET["value"];

    make_header();
    $conn = db_connect();
    //queries database for all categories and prints the link
    $category_query = "SELECT * FROM product_details WHERE product_id = '$value';";
    $category_query_2 = "SELECT * FROM plant_index WHERE plant_id = '$value';";
    $result = mysqli_query($conn, $category_query);
    $result2 = mysqli_query($conn, $category_query_2);
    $result3 = mysqli_query($conn, $category_query);
    $row = mysqli_fetch_array($result);
    $row2 = mysqli_fetch_array($result2);

?>
    <div class="container">
        <div class="row product-header">
            <div class="col product-header">
                <?php echo "<h1>".$row2['plant_common']."</h1>" ?>
            </div>
        </div>
        <div class="row product-image">
            <div class="col product-image">
                <?php echo "<img src='".$row2['plant_botanical'].".jpg' width='500' height='500' alt='".$row2['plant_botanical']."'>"; ?>
            </div>
            <div class="col product-details">
                <h5> Product Details </h5>
                <ul>
                <?php //fetches the row from the result set
                      //For loop will iterate through the returned array
                      //field_count is used to get number of columns 
                      // in our recent query
                      //start at index 1 as we do not need to display id
                $row3 = mysqli_fetch_row($result3);
                for ($x = 1; $x < mysqli_field_count($conn); $x++) {
                ?>
                    <?php echo "<li>".$row3[$x]."</li>";?>
                <?php
                }
                ?>           
                </ul>
                <?php //We echo html to product an input form that add product to cart
                      //and redirects to the shopping cart
                echo "<form action='shopping_cart.php?value=".$value."' method='post'>
                    <input type='submit' name='submit' value='Add to Cart'>
                </form>" ?>
            </div>
        </div>
        <div class="row">
            
        </div>
    </div>



<?php

    make_footer();
?>