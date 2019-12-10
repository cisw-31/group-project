<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jejeti</title>
    <link rel="stylesheet" href="hidden.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


    <div class="container">
        <div class="row admin-image justify-content-center">
            <div class="col-3"></div>
            <div class="col-6">
                <img src="jejetilogo.png" alt="logo">
            </div>
            <div class="col-3"></div>
        </div>

     </div>

     <div class="container login-admin">
        <div class="row login-admin">
            <div class="col-4"></div>
            <div class="col-6">
                <form method="post" action="auth_admin.php">
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
                </table></form>
            </div>
            <div class="col-2"></div>
        </div>

     </div>
        

     </div>

<?php

?>