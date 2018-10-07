<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="style.css">
    <title>Cart</title>
</head>

<?php
        session_start();
        $cnx = mysqli_connect("localhost","root", "Micunt48", "rush");
    
        $mysql = "CREATE TABLE myCustomers (users_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
         users_name VARCHAR(30) NOT NULL, users_email VARCHAR(30) NOT NULL UNIQUE,
         users_password VARCHAR(65) NOT NULL)";

        if (mysqli_query($cnx, $mysql))
        {
                echo "Table created<br>";
        }
        else
        {
                echo "ERROR creating table<br>";
        }
        mysql_close($cnx);
?>