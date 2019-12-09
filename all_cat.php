<?php
    include("functions.php");
    make_header();
    
    
    //call to db_connect to connect to plant_database, connecton
    //stored in $conn
    $conn = db_connect();

    //$count_loop will be used within the while loop to keep track of cycles
    //used to format rows, once three categories are reached, a new row will be
    //created (three categories per row)
    $counter_loop = 0;

    //Query to the shape_index table, 
    $category_query = "SELECT * from shape_index;";
    $result = mysqli_query($conn, $category_query);
    ?> <div class="row cat-display justify-content-center"> <?php
    while($row = mysqli_fetch_array($result)){
    ?>  

        <?php
        //Once we have three categories, row will be closed and a new row is
        //created 
        if ($counter_loop == '3'){ 
        ?>
            </div>
            <div class="row all-cat-display-card justify-content-center">

            <?php $counter_loop = 0; ?>
        <?php
        } 
        ?>

        <?php //Using bootstrap's card container to display the categories  
              //Shop For "Categories" will redirect to go_cat.php with shape_id
        ?>
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
        <?php //Add to the counter variable ?>
        <?php $counter_loop = $counter_loop + 1; ?>
        <?php
    }
    if ($counter_loop == 3){
        echo "</div>"; 
    }




    make_footer();
?>