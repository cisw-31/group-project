<?php
    include("functions.php");
    make_header();

    $conn = db_connect();
    $counter_loop = 0;
    $category_query = "SELECT * from shape_index;";
    $result = mysqli_query($conn, $category_query);
    ?> <div class="row cat-display"> <?php
    while($row = mysqli_fetch_array($result)){
    ?>  
        <?php 
        if ($counter_loop == '3'){ 
        ?>
            </div>
            <div class="row all-cat-display-card">

            <?php $counter_loop = 0; ?>
        <?php
        } 
        ?>
        <!-- Work in Progess need a database that has an id and image -->
        <div class="card" style="width: 18rem;">
            <?php echo "<img class='card-img-top' src='".ucfirst($row['shape_size']).".jpg' alt='".ucfirst($row['shape_size'])."'>" ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo ucfirst($row['shape_size']);?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <?php echo "<a class='btn btn-primary'    
                href='go_cat.php?value=".$row['shape_id']."'
                > Shop For ".ucfirst($row['shape_size'])."s</a>"; ?>
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