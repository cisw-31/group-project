<?php

function display_login_form() {
    //display the log in form
?>
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
<?php
}
function display_signup_form() {
    //display the sign up form
?>
  <br />
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
  </table><hr/>
<?php
}

function display_edit_form() {
  //display the account edit form
  $username = $_SESSION['customer_username'];
?>
<br />
<table border="0" width="100%" cellspacing="0">
<form action="auth.php" method="post">
<tr><th colspan="2" bgcolor="#cccccc">Your Account</th></tr>
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
<input type="hidden" name="type" value="changepasswd"/> 
</form>
<tr>
  <th colspan="2" bgcolor="#cccccc">Shipping Address</th>
</tr>
<form action="auth.php" method="post">
<tr>
  <td>Receiver Name</td>
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
<input type="hidden" name="type" value="save"/> 
</form>
</table><hr/>
<?php
}

?>

