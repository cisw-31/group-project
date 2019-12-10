<?php
    include("functions.php");

    make_header();


    $value = $_GET["value"];
    ?>
    <?php if ($value == 'add') {
    
    ?>
        <div class="container">
            <div class="row add-cat-title">
                <h1> Add Category to Shop </h1>
            </div>
            <div class="row add-cat-form">
                <?php echo "<form method='post' action='mod_cat.php?value=".$value."'>"; ?>
                    <div class="form-group">
                        <label for="CategoryInputAdd">Email address</label>
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

    <?php
    }
    ?>

<?php
    make_footer();

?>