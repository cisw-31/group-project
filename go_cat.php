<?php
    include("functions.php");


    //testing, this page will display all the products in the selected category
    $value = $_GET["value"];

    make_header();

    $conn = db_connect();
    $category_query = "SELECT * from plant_index WHERE plant_id = '$value';";
    $result = mysqli_query($conn, $category_query);
    while($row = mysqli_fetch_array($result)){  ?> 

        <div class="row cat-display">
            <div class="col cat-display">
                <?php echo "bark"; ?>
            </div>
        </div>

        <?php
    }
    make_footer();
?>