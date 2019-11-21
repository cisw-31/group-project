<?php

function display_order_form() {
    ?>

    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="FirstName">First Name</label>
            <input type="text" class="form-control" id="FirstName" placeholder="first">
            </div>
            <div class="form-group col-md-6">
            <label for="LastName">Last Name</label>
            <input type="text" class="form-control" id="LastName" placeholder="last">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
            </div>
            <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit Order</button>
    </form>

    <?php
}



?>