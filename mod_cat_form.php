<?php
    include("functions.php");

    make_header();

    //Contains a variable passed by
    $value = $_GET["value"];
    ?>
    <?php 
    //If else statement if the variable passed is add, the admin wishes
    // to add a category
    //otherwise, the add wishes to delete a category
    if ($value == 'add') {
    
    ?>
        <?php 
        //Container for category input which passes the input in variable category 
        ?>
        <div class="container">
            <div class="row add-cat-title">
                <h1> Add Category to Shop </h1>
            </div>
            <div class="row add-cat-form">
                <?php echo "<form method='post' action='mod_cat.php?value=".$value."'>"; ?>
                    <div class="form-group">
                        <label for="CategoryInputAdd">Category</label>
                        <input type="text" name="Category" class="form-control" id="CategoryInputAdd" placeholder="Vines, Ferns, Grasses, etc.">
                        <button type="submit" class="btn btn-success mb-2">Add</button>
                    </div>
                </form>
            </div>
            
        </div>
    <?php
    }
    else {
    ?>
        <?php // will hold the dropdown to delete a category?>
        <div class="container">
            <div class="row del-cat-title">
                <h1> Delete Category from Shop </h1>
            </div>
            <div class="row del-cat-form">
                <?php //Form for category dropdown which redirects to 
                     //mod_cat.php with add or del var to peform deletion
                echo "<form method='post' action='mod_cat.php?value=".$value."'>"; ?>
                <div class="form-group">
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

                    </select>
                        <button type="submit" class="btn btn-success mb-2">Delete</button>
                </div>
                </form>
            </div>
                    
        </div>

    <?php
    }
    ?>

<?php
    make_footer();

?>