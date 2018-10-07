<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Home.css">
    <title>Sign Up</title>
</head>
<body>
    <div>
        <a href="login_view.php"><input class="logout" type="submit" name="enter_login" value="Login"></a>
    </div>
    <div class="loginbox">
        <img src="Avatar.jpg" class="avatar">
        <form action="signup_conx.php" method="POST">
            <input class="text"  type="text" name="username" placeholder="Username" required><br><br>
            <input class="text" type="text" name="email" placeholder="Email" required><br><br>
            <input class="text" type="password" name="password" placeholder="Password" required><br><br>
            <input class="text" type="submit" name="register" value="Sign up">
        </form>
    </div>
</body>
</html>