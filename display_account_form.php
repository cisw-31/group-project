<?php

function display_login_form() {
    //display the log in form
?>
  <div class = "logintable">
    <form method="post" action="auth.php">
      <table bgcolor="#cccccc">
      <tr>
          <td>Username:</td>
          <td><input type="text" name="username"/></td></tr>
      <tr>
          <td>Password:</td>
          <td><input type="password" name="passwd"/></td></tr>   
      <tr>
          <td colspan="2" align="center">
          <input type="submit" value="Log in"/></td></tr>
      </table>
      <input type="hidden" name="type" value="login"/> 
    </form>
    <a href="signup.php">
        Sign Up
    </a>
  </div>
<?php
}

function display_signup_form() {
    //display the sign up form
?>
  <br>
  <div class = "logintable">
  <table border="0" width="100%" cellspacing="0">
  <form action="auth.php" method="post">
  <tr><th colspan="2" bgcolor="#cccccc">Your Account</th></tr>

  <tr>
    <td>User Name</td>
    <td><input type="text" name="username" value="" maxlength="40" size="40"/></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="passwd" value="" maxlength="40" size="40"/></td>
  </tr>

  <tr>
    <td>First Name</td>
    <td><input type="text" name="fname" value="" maxlength="40" size="40"/></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input type="text" name="lname" value="" maxlength="40" size="40"/></td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td><input type="tel" name="tel" value="" maxlength="40" size="40"/></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="email" name="email" value="" maxlength="40" size="40"/></td>
  </tr>

  <hr>

  <tr>
    <th colspan="2" bgcolor="#cccccc">Shipping Address</th>
  </tr>

  <tr>
    <td>Receiver Name</td>
    <td><input type="text" name="ship_name" value="" maxlength="40" size="40"/></td>
  </tr>
  <tr>
    <td>Address1</td>
    <td><input type="text" name="ship_address1" value="" maxlength="40" size="40"/></td>
  </tr>
  <tr>
    <td>Address2</td>
    <td><input type="text" name="ship_address2" value="" maxlength="40" size="40"/></td>
  </tr>
  <tr>
    <td>City/Suburb</td>
    <td><input type="text" name="ship_city" value="" maxlength="20" size="40"/></td>
  </tr>
  <tr>
    <td>State/Province</td>
    <td><input type="text" name="ship_state" value="" maxlength="20" size="40"/></td>
  </tr>
  <tr>
    <td>Postal Code or Zip Code</td>
    <td><input type="text" name="ship_zip" value="" maxlength="10" size="40"/></td>
  </tr>
  <tr>
    <td>Country</td>
    <td><input type="text" name="ship_country" value="" maxlength="20" size="40"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
        <input align="left" type="submit" value="Create"/>
    </td>
  </tr>
  <input type="hidden" name="type" value="signup"/> 
  </form>
  </table><hr>
  <div>
<?php
}

function display_edit_form() {
  //display the account edit form
  $username = $_SESSION['customer_username'];
?>
<div class = "logintable">
  <form action="auth.php" method="post">
    <table border="0" width="100%" cellspacing="0">
      <tr><th colspan="2" bgcolor="#cccccc">Password</th></tr>
      <tr>
        <td>Old Password</td>
        <td><input type="password" name="oldpasswd" value= "" maxlength="40" size="40"/></td>
      </tr>
      <tr>
        <td>New Password</td>
        <td><input type="password" name="newpasswd" value= "" maxlength="40" size="40"/></td>
      </tr>
      <tr>
        <td colspan="2" align="left">
            <input align="left" type="submit" value="Change Password"/>
        </td>
      </tr>
    </table> <br>
    <input type="hidden" name="type" value="changepasswd"/> 
  </form>
  <hr>
    <table border="0" width="100%" cellspacing="0">
    <tr>
      <th colspan="2" bgcolor="#cccccc">User Information</th>
    </tr>
    <form action="auth.php" method="post">
    <tr>
      <td>First Name</td>
      <td><input type="text" name="fname" 
      value= "<?php echo Retrieve($username, 'fname' ) ?>"
      maxlength="40" size="40"/></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><input type="text" name="lname" 
      value= "<?php echo Retrieve($username, 'lname' ) ?>"
      maxlength="40" size="40"/></td>
    </tr>
    <tr>
      <td>Phone Number</td>
      <td><input type="tel" name="tel" 
      value= "<?php echo Retrieve($username, 'tel' ) ?>"
      maxlength="40" size="40"/></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="email" name="email" 
      value= "<?php echo Retrieve($username, 'email' ) ?>"
      maxlength="40" size="40"/></td>
    </tr>
    <tr>
      <td>Shipping Receiver Name</td>
      <td><input type="text" name="ship_name" 
      value= "<?php echo Retrieve($username, 'ship_name' ) ?>"
      maxlength="40" size="40"/></td>
    </tr>
    <tr>
      <td>Address1</td>
      <td><input type="text" name="ship_address1" 
      value= "<?php echo Retrieve($username, 'ship_address1' ) ?>"
      maxlength="40" size="40"/></td>
    </tr>
    <tr>
      <td>Address2</td>
      <td><input type="text" name="ship_address2" 
      value= "<?php echo Retrieve($username, 'ship_address2' ) ?>"
      maxlength="40" size="40"/></td>
    </tr>
    <tr>
      <td>City/Suburb</td>
      <td><input type="text" name="ship_city" 
      value= "<?php echo Retrieve($username, 'ship_city' ) ?> "
      maxlength="20" size="40"/></td>
    </tr>
    <tr>
      <td>State/Province</td>
      <td><input type="text" name="ship_state" 
      value= "<?php echo Retrieve($username, 'ship_state' ) ?> "
      maxlength="20" size="40"/></td>
    </tr>
    <tr>
      <td>Postal Code or Zip Code</td>
      <td><input type="text" name="ship_zip" 
      value= "<?php echo Retrieve($username, 'ship_zip' ) ?> "
      maxlength="10" size="40"/></td>
    </tr>
    <tr>
      <td>Country</td>
      <td><input type="text" name="ship_country" 
      value= "<?php echo Retrieve($username, 'ship_country' ) ?> "
      maxlength="20" size="40"/></td>
    </tr>
    <tr>
      <td colspan="2" align="left">
          <input align="left" type="submit" value="Save Shipping Address"/>
      </td>
    </tr>
    </table>
    <input type="hidden" name="type" value="save"/> 
    </form>
    <hr>
<div>


<?php
}

?>

