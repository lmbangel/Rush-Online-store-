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
    
    /*
        $mysql = "CREATE TABLE myBasket (product_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, product_name VARCHAR(30) NOT NULL, quantity INT, price INT)";

        if (mysqli_query($cnx, $mysql))
        {
                echo "Table created<br>";
        }
        else
        {
                echo "ERROR creating table<br>";
        }*/
        


        //          $id = '01';
        //          $name = 'headphines';
        //         $quantity = '1';
        //         $price    = '200';
     
        // echo "$id<br>";
        // echo "$price<br>";

        // $sql = "INSERT INTO myBasket(product_id, product_name, quantity, price) VALUES ('$id', '$name', '$quantity', '$price')";

        // print_r($sql);
        // echo "<br>";

        // echo "00000000";
        // if (mysqli_query($cnx, $sql))
        //         echo "success";
        // else 
        //         echo "fail";
        mysqli_close($cnx);
?>

</html>