<?php

require_once('db_connect.php');

function login($username, $password) {
// check username and password with db
// if yes, return true
// else return false

  // connect to db
  $conn = db_connect();
  if (!$conn) {
    return 0;
  }

  // check if username is unique
  $result = $conn->query("select * from customers
                         where username='".$username."'
                         and password = sha1('".$password."')");
  if (!$result) {
     return 0;
  }

  $row = mysqli_fetch_row($result);

  if ($result->num_rows>0) {
    return true;
  } else {
    return 0;
  }
}

function Retrieve($username, $field) {
// get the field value from database

  // connect to db
  $conn = db_connect();
  if (!$conn) {
    return 0;
  }

  // check if username is unique
  $result = $conn->query("SELECT " .$field. " from customers
                          where username='".$username."'");
  if (!$result) {
     return 0;
  }
  $row = mysqli_fetch_row($result);
  return $row[0];
}

function signup($username, $passwd, $shipname, $shipaddress1,$shipaddress2,$shipcity,$shipstate,$shipzip,$shipcountry) {
  // create record with username and password with db
  // if successful, return true
  // else return false
  
    // connect to db
    $conn = db_connect();
    if (!$conn) {
      return 0;
    }
    
    // check if username is unique
    $result = $conn->query("select * from customers
                           where username='".$username."'");
    if ($result) { //no existing user name found, insert row
      $sql="INSERT INTO customers (
        username, password, 
        ship_name, ship_address1, ship_address2, 
        ship_city, ship_state, ship_zip, ship_country)
        VALUES (
        '".$username."', sha1('".$passwd."'),
        '".$shipname."','".$shipaddress1."','".$shipaddress2."',
        '".$shipcity."','".$shipstate."','".$shipzip."','".$shipcountry."')";

      $inresult = $conn->query( $sql );
      if(!$inresult){ //insert record failed
        echo "<p>Unknown error. Counldn't generate user.<br></p>";
        return false;
      } else{ //insert record successful
        return true;
      }
    } else { //there is account already
      echo "<p>There is account with this user name already.<br></p>";
      return false;
    }
  }

function saveaddr($username, $shipname,$shipaddress1,$shipaddress2,$shipcity,$shipstate,$shipzip,$shipcountry) {

    // connect to db
    $conn = db_connect();
    if (!$conn) {
      return 0;
    }

    $sql="UPDATE customers
          SET
          ship_name = '".$shipname."',
          ship_address1 = '".$shipaddress1."', 
          ship_address2 = '".$shipaddress2."',
          ship_city = '".$shipcity."',
          ship_state = '".$shipstate."', 
          ship_zip = '".$shipzip."', 
          ship_country = '".$shipcountry."'
          WHERE username='".$username."'";
    $inresult = $conn->query( $sql );
    if(!$inresult){ //failed
      echo "<p>Unknown error. Counldn't generate user.<br></p>";
      return false;
    } else{ //successful
      return true;
    }
    
}

function change_password($username, $old_password, $new_password) {
// change password for username/old_password to new_password
// return true or false

  // if the old password is right
  // change their password to new_password and return true
  // else return false
  if (login($username, $old_password)) {

    if (!($conn = db_connect())) {
      return false;
    }

    $result = $conn->query("UPDATE customers
                            SET 
                            password = sha1('".$new_password."')
                            WHERE username = '".$username."'");
    if (!$result) {
      return false;  // not changed
    } else {
      return true;  // changed successfully
    }
  } else {
    return false; // old password was wrong
  }
}


?>
