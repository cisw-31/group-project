<?php
    include("functions.php");

    make_header();

    $value = $_GET["value"];
   
    ?>
    <?php 
    if ($value == 'add') {
    
    ?>
        <?php 
        $conn = db_connect();
        $conn2 = db_connect();
        $value2 = $_POST["Category"];
 
        //queries shape_index table and we use mysql_num_rows to get the numer of rows
        $category_query = "SELECT * FROM  shape_index;";
        $result = mysqli_query($conn, $category_query);
        $counter = mysqli_num_rows($result);
        //counter will be used to assign id for our new category
        $counter++;

        //Our query in shape index table, we check whether the category the admin
        //is trying to add is already in the database
        $category_query_2 = "SELECT * FROM shape_index WHERE shape_size = '$value2';";
        $result2 = mysqli_query($conn2, $category_query_2);
        $counter2 = mysqli_num_rows($result2);
    
        //if rows are returned we know the category already exists
        //so we echo a header indicating such and exit
        if ($counter2 > 0) {

            echo "<h1>Category already exists</h1>";
            exit();
        }

        //Our insertion sql command, inserts values counter(id) and value2(category)
        $sql = "INSERT INTO shape_index (shape_id, shape_size) VALUES ('$counter', '$value2')";
        ?>
        <?php 
        //perform and check to see if insertion was successfull
        if (mysqli_query($conn, $sql) === TRUE) {
        ?>
            <div class="container">
                <div class="row added-cat-title">
                    <h1> <?php echo ucfirst($value2); ?> category added to the Shop </h1>
                </div>
            </div>
        <?php
        } 
        else { 
            //Error displayed when insertion fails
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        ?>


    <?php
    }
    else {
    ?>
        <?php
            //call to db_connect to establish connection to database
            $conn = db_connect();
            //store our passed value in value3 variable
            $value3 = $_POST["category"];
            //sql delete statement, where shape_size is equal to the value passed
            $sql="DELETE FROM shape_index WHERE shape_size= '$value3'";
        //perform the deletion and check if it is successful
        if (mysqli_query($conn, $sql) === TRUE) {
        ?>
            <div class="container">
                <div class="row added-cat-title">
                    <h1> <?php echo ucfirst($value3); ?> category deleted from the Shop </h1>
                </div>
            </div>
                <?php
         } 
        else { 
            //error when deletion fails
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        ?>
    <?php
    }
    ?>

<?php
    make_footer();

?>