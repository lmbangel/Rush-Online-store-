<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <img class="basscad" src="BassCad.jpg" >
    <img class="drumcad" src="DrumsCad.jpg">


        <div class="searchdiv">
        <div><a href="signup_view.php"><input class="logout" type="submit" name="exit_page" value="Logout"></a></div>
            <form action="search.php" method=GET>
                <input class="search" id="search" type='text' name='item' value="" placeholder="Search here...">
                <input style="height: 20px;" type="submit" name='submit' value="Go!">
            </form>
            
            <form action="shop.php" method="POST">
                <input class="cartimg" type="image" src="cart.png" alt="submit"><br><br><br><br><br><br>
                <input  class="cancel"type="image" src="cancel.jpg" alt="other">
            </form>
        </div>
</body>
</html>
    