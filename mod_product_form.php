<?php

    include("functions.php");
    make_header();

    $value = $_GET["value"];
   
?>
<?php 
    if ($value == "add") {
?>
        <div class="container">
            <div class="row add-product-header justify-content-center">
                    <h1>Add a Product to the Shop</h1>
            </div>
            <div class="row add-product-form-title justify-content-center">
                <h4>Form</h4>
            </div>

            <div class="row add-product-form justify-content-center">
                <?php 
                echo "<form method='post' action='mod_product.php?value=".$value."'>";
                ?>

                    <label for="CategoryInputAdd">Category: </label>
                        <select name="category">
                            <?php 
                            $conn = db_connect();
                            //queries database for all categories and prints the link
                            $category_query = "SELECT * FROM shape_index;";
                            $result = mysqli_query($conn, $category_query);
                            echo "<a class='dropdown-item' href='all_cat.php'>All</a>";
                            while($row = mysqli_fetch_array($result)){   //While loop that iterates through array
                            //Will create an option for every category of plant that our database includes
                            echo "<option value='".$row['shape_size']."'>".ucfirst($row['shape_size'])."</option>";?>
                            <?php
                            } ?>
                        </select><br>
                        <br><label>Botantical Name:</label> <input type="text" name="bname"><br>
                        <br><label>Common Name:</label> <input type="text" name="cname"><br>
                        <br><label>Plant Height:</label> <input type="text" name="height"><br>
                        <br><label>Plant Width:</label> <input type="text" name="width"><br>
                        <br><label>Water:</label> 
                            <select name="water">
                                <option value="low">low</option>
                                <option value="moderate">moderate</option>
                                <option value="high">high</option>
                            </select><br>
                        <br><label>Cost:</label> <input type="text" name="cost"><br>
                        <label>Upload Image: <input type="file" name="fileToUpload" id="fileToUpload"></label>
                        <br><button type="submit" class="btn btn-success mb-2">Add</button>
                </form>
            </div>
        </div>
   

<?php
    }
    else {

        $conn = db_connect();
        $sql = "SELECT * FROM plant_index;";
        $result = mysqli_query($conn, $sql);
    
?>
        <div class="container delete-product">
            <div class="row product-delete-drop justify-content-center">
                <h1>Delete Plant from the Shop</h1>
            </div>
                <div class="row add-product-form justify-content-center">
                    <?php 
                    echo "<form method='post' action='mod_product.php?value=".$value."'>";
                    ?>

                        <br><label for="ProductInputAdd">Product:</label>
                            <select name="product">
                                <?php 
                                
                                while($row = mysqli_fetch_array($result)){   //While loop that iterates through array
                                //Will create an option for every category of plant that our database includes
                                echo "<option value='".$row['plant_id']."'>".ucfirst($row['plant_common'])."</option>";?>
                                <?php
                                } ?>
                            </select><br>
                            <br><button type="submit" class="btn btn-success mb-2">Delete</button>
                    </form>
                </div>                
        </div>

<?php

    }


    make_footer();

?>