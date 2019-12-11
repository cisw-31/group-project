<?php
    include("functions.php");
    $value = $_GET["value"];
    make_header();

?>
<?php 
    if ($value == "add") {
?>
<?php
        $conn = db_connect();
        $test = "SELECT * FROM plant_index";
        $result = mysqli_query($conn, $test);
        $count = mysqli_num_rows($result);
        $count++;
        $cat = $_POST["category"];
       
        $conn2 = db_connect();
        $test2 = "SELECT shape_id FROM shape_index WHERE shape_size='$cat'";
        $result2 = mysqli_query($conn2, $test2);
        $row = mysqli_fetch_array($result2);
        $water = 0;
        if ($_POST['water'] == 'low')
        {
            $water = '1';
        }
        else if($_POST['water'] == 'low')
        {
            $water = '2';
        }
        else {
            $water = '3';
        }
        echo $water;
        $values = array("$count",$_POST['bname'],$_POST['cname'],$row[0],$water,$_POST['height'],$_POST['width'],$_POST['cost']);
        
        echo $values[0];
        $conn3 = db_connect();
        $sql = "INSERT INTO plant_index (plant_id, plant_botanical, plant_common,
        shape_id, water_id, plant_height, plant_width, cost_id) 
        VALUES ('$values[0]', '$values[1]', '$values[2]', '$values[3]', '$values[4]', '$values[5]', '$values[6]','$values[7]')";
?>
<?php   
        if (mysqli_query($conn3, $sql) === TRUE) { 
?>
            <div class="container">
                <div class="row sful-product justify-content-center">
                    <h1>Plant has been add to the Shop</h1>
                </div>
                <div class="row  justify-content-center">
                    <?php echo "<a class='link' href='go_product.php?value=".$count."'>Go to Product Page</a>"; ?>
                </div>
            </div>
<?php
        }
        else {
?>
            
            <?php echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>


<?php
        }
?>

<?php
    }

    else {

            $conn = db_connect();
            echo "Hello";
            //store our passed value in value3 variable
            $value3 = $_POST["product"];
            echo $value3;
            //sql delete statement, where plant_id is equal to the value passed
            $sql="DELETE FROM plant_index WHERE plant_id= '$value3'";
            //perform the deletion and check if it is successful
            if (mysqli_query($conn, $sql) === TRUE) {
            ?>
                <div class="container">
                    <div class="row added-cat-title">
                        <h1> <?php echo ucfirst($value3); ?> Plant deleted from the Shop </h1>
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