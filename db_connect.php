<?php

// creates connection with mysql database
//these parameters will vary based on db credentials and host

function db_connect(){
    $conn = new mysqli('localhost', 'root', '', 'plant_database');
    if (mysqli_connect_errno()) {
        echo "Failed to connect to database: ".mysqli_connect_error();
    }
    return $conn;
}    

function db_connect_two(){
    $conn = new mysqli('localhost', 'root', '', 'admin_database');
    if (mysqli_connect_errno()) {
        echo "Failed to connect to database: ".mysqli_connect_error();
    }
    return $conn;
}   

?>