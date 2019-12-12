<?php  


function shipping_form() {
  
  $states2 = [ 'AL', 'AK', 'AS', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'DC', 'FM', 'FL', 'GA', 'GU', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MH', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'MP', 'OH', 'OK', 'OR', 'PW', 'PA', 'PR', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT', 'VI', 'VA', 'WA', 'WV', 'WI', 'WY' ];
  
  //below script for button auto fill saved address of user
  
  $username = $_SESSION['customer_username'];
  $fname = Retrieve($username, 'fname' );
  $lname = Retrieve($username, 'lname' );
  $sa1 = Retrieve($username, 'ship_address1' );
  $sa2 = Retrieve($username, 'ship_address2' );
  $scity = Retrieve($username, 'ship_city' );
  $sstate= Retrieve($username, 'ship_state' ) ;
  $sz = Retrieve($username, 'ship_zip' ) ;
  $sc = Retrieve($username, 'ship_country' );

  echo '
  <button id="savedaddressbutton"> Use my saved address </button> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $("#savedaddressbutton").click(function(event){
    $("#ship_first_name").val("'.$fname.'");
    $("#ship_last_name").val("'.$lname.'");
    $("#ship_ddress").val("'.$sa1.'");
    $("#ship_address2").val("'.$sa2.'");
    $("#ship_city").val("'.$scity.'");
    $("#ship_state").val("'.$sstate.'");
    $("#ship_zip").val("'.$sz.'");
    $("#ship_country").val("'.$sc.'");
    });
  </script>
  '

?>
    
  
    <div id="shipping_form_wrapper">
      <h4 class="mb-3">Shipping address</h4>
      <!-- <form id="shipping_form" action="complete_order.php" method="post" class="needs-validation" novalidate> -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" name="ship_first_name" class="form-control" id="ship_first_name" placeholder="" value="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" name="ship_last_name" class="form-control" id="ship_last_name" placeholder="" value="">
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
          <input type="text" name="ship_address2" class="form-control" id="ship_address2" placeholder="Apartment or suite">
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
              <?php foreach($states2 as $ship_state) {
                    ?>
                    <option><?php echo $ship_state ?></option>
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