<html>
    <link rel="stylesheet" href="style.css">
<body>
<?php

$cnx = mysqli_connect("localhost","root", "Micunt48", "rush");

if ($_POST['register'] && (empty($_POST['username'] || empty($_POST['email'] || empty($_POST['password'])))) )
{
       header('Location: signup_view.php');
       $error =  "ERROR";     
}
else if ($_POST['register'])
{
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO mycustomers(users_name, users_email, users_password) VALUES ('$name', '$email', '$password')";

    if (mysqli_query($cnx, $sql))
        header('Location: Home.php');
    else
        echo "Failed!";

    // $sql = "INSERT INTO customers(user_name, password, email) VALUES (\"sam\", \"password\", \"sam@mail.com\")";
    // $sql = "DELETE FROM mycustomers where user_id = 11";
    // $sql = "UPDATE mycustomers SET password = 'xoxoxoxo' WHERE user_id = 4";
    // $sql = "SELECT * FROM mycustomers";
}
else

?>
</body>
</html>