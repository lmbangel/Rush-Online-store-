<?php
    session_start();
    $cnx = mysqli_connect("localhost","root", "Micunt48", "rush");
   echo "********828"; 
    if (isset($_POST['login']))
    {
        if(empty($_POST['username']) || empty($_POST['password']))
            $error_msg = "Username or Password Invalid";
            echo $error_msg;
    }
    else 
    {
        echo "************3222";
        $user_name = $_POST['username'];
        $password = $_POST['password'];

        // $user_name = stripslashes($user_name);
        // $password = stripslashes($password);
        // $user_name = mysql_real_escape_string($user_name);
        // $password = mysql_real_escape_string($password);
        echo "alkdfjhg";
        $db = mysql_select_db('customers', $cnx);
        $sql = "SETLECT * FROM login WHERE password='$password' AND username='$user_name'";
        $query = mysql_query($sql, $cnx);
        $rows = mysql_num_rows($query);

        echo "jdfkh;kjg";

        if ($rows == 1)
        {
            $_SESSION['login_user'] = $user_name;
            header('Location: Home.php');
        }
    }
    mysql_close($cnx);



?>