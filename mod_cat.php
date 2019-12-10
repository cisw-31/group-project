<?php
    include("functions.php");

    make_header();


    $value = $_GET["value"];
    $value2 = $_POST["Category"];
    $value2 = strval($value2);

    echo $value2;

    ?>
    <?php if ($value == 'add') {
    
    ?>
        <?php $conn = db_connect();
        //queries database for all categories and prints the link
        $category_query = "SELECT * FROM  shape_index;";
        $result = mysqli_query($conn, $category_query);
        $counter = mysqli_num_rows($result);
        $counter++;
        $counter = strval($counter);

        $sql = "INSERT INTO shape_index (shape_id, shape_size) VALUES ('$counter', '$value2')";
        ?>
        <?php if ($conn->query($sql) === TRUE) {
        ?>
                    <div class="container">
                        <div class="row added-cat-title">
                            <h1> <?php echo ucfirst($value2); ?> category added to the Shop </h1>
                        </div>
                        <div class="row add-cat-form">
                        
                        </div>
    
                    </div>
        <?php
        } else { 
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        ?>


    <?php
    }
    else {
    ?>

    <?php
    }
    ?>

<?php
    make_footer();

?>