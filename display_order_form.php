<?php

function display_order_form() {

$states = [ 'AL', 'AK', 'AS', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'DC', 'FM', 'FL', 'GA', 'GU', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MH', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'MP', 'OH', 'OK', 'OR', 'PW', 'PA', 'PR', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT', 'VI', 'VA', 'WA', 'WV', 'WI', 'WY' ];

    ?>

    <form action="complete_order.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="FirstName">First Name</label>
            <input type="text" name="first-name" class="form-control" id="FirstName" placeholder="first">
            </div>
            <div class="form-group col-md-6">
            <label for="LastName">Last Name</label>
            <input type="text" name="last-name" class="form-control" id="LastName" placeholder="last">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" name="address-2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text"  name="city" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" name="state" class="form-control">
                <option selected>Choose...</option>
                <?php foreach($states as $state) {
                    ?>
                    
                    <option><?php echo $state ?></option>
                    
                    <?php
                } ?>
            </select>
            </div>
            <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text"  name="zip" class="form-control" id="inputZip">
            </div>
        </div>
        <input type="submit" class="btn btn-primary"></input>
    </form>

    <?php
}



?>