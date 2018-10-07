<?php
// include('login_conx.php'); // Includes Login Script

// if(isset($_SESSION['login_user']))
//     header("Location: login_conx.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Home.css">
    <title>Log in</title>
</head>
<body>
  
    <div class="loginbox">
        <img src="Avatar.jpg" class="avatar">
        <form action="login_conx.php" method="POST">
            <input class="text"  type="text" name="username" placeholder="Username" required><br><br>
            <input class="text" type="password" name="password" placeholder="Password" required><br><br>
            <input class="text" type="submit" name="login" value="Log in">
        </form>
    </div>
</body>
</html>