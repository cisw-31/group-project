<?php

// creates connection with mysql database
//these parameters will vary based on db credentials and host

function db_connect(){
    $conn = new mysqli('localhost:3306', 'root', 'password', 'store_db');
    if (mysqli_connect_errno()) {
        echo "Failed to connect to database: ".mysqli_connect_error();
    }
    return $conn;
}    


?>