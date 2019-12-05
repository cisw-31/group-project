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
    $row = mysqli_fetch_array($result);
    $row2 = mysqli_fetch_array($result2);
    $requesty = $row2['plant_common'];
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
                    <li>    </li>
                    <li>    </li>
                    <li>    </li>
                    <li>    </li>
                    <li>    </li>    
                </ul>
                <button> Add to Cart </button>
            </div>
        </div>
        <div class="row">
            <?php echo " Spacing Comment "; ?>
        </div>
    </div>



<?php

    make_footer();
?>