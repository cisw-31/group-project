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
?>
