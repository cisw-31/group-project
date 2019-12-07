<?php
    include("functions.php");


    //testing, this page will display all the products in the selected category
    $value = $_GET["value"];
    $counter_loop = 0;
    make_header();
    //echo $value; 
    $conn = db_connect();
    $category_query = "SELECT * from plant_index WHERE shape_id = '$value';";
    $result = mysqli_query($conn, $category_query);
    ?> <div class="row cat-display"> <?php
    while($row = mysqli_fetch_array($result)){
    ?>  
        <?php 
        if ($counter_loop == '3'){ 
        ?>
            </div>
            <div class="row cat-display-card">

            <?php $counter_loop = 0; ?>
        <?php
        } 
        ?>
        <!-- Work in Progess need a database that has an id and image -->
        <div class="card" style="width: 18rem;">
            <?php echo "<img class='card-img-top' src='".$row['plant_botanical'].".jpg' alt='".$row['plant_botanical']."'>" ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['plant_common'];?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <?php echo "<a class='btn btn-primary'    href='go_product.php?value=".$row['plant_id']."'> Product Details </a>"; ?>
            </div>
        </div>

        <?php $counter_loop = $counter_loop + 1; ?>
        <?php
    }
    if ($counter_loop == 3){
        echo "</div>"; 
    }
    
    make_footer();
?>