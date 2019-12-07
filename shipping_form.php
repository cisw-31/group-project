<?php  


function shipping_form() {
    ?>
    
    
    <div id="shipping_form_wrapper">
      <h4 class="mb-3">Shipping address</h4>
      <form id="shipping_form" action="complete_order.php" method="post" class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" name="ship_first-name" class="form-control" id="ship_firstName" placeholder="" value="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" name="ship_last-name" class="form-control" id="ship_lastName" placeholder="" value="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" name="ship_address" class="form-control" id="ship_address" placeholder="1234 Main St">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" name="ship_address-2" class="form-control" id="ship_address2" placeholder="Apartment or suite">
        </div>

        <div class="mb-3">
          <label for="city">City</label>
          <input type="text" name="ship_city" class="form-control" id="ship_city" placeholder="City">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="ship_country">
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" name="ship_state" id="ship_state">
              <option value="">Choose...</option>
              <?php foreach($states as $state) {
                    ?>
                    <option><?php echo $state ?></option>
                    <?php
                } ?>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" name="ship_zip" class="form-control" id="ship_zip" placeholder="">
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
    </div>
    <?php
}



?>