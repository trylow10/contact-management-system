<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <?php
    // echo " Welcome " .$_SESSION['username'];
    if (isset($_SESSION['username'])) {

        // echo "welcome " . $_SESSION['username'] . "<br><br>";
        // include("userinfo.php");


        // include "search.php";
        echo '<a href="addcontact.php">Add Contact</a><br><br>';
        // <span>@gmail.com</span><br>

        echo '   <form method="post" action="search.php">
<input autocomplete="off" type="text" name="email" name="name" required="" />
<input type="submit" value="Search">
</form><br><br>';

        include "userinfo.php";
        echo '<br><br><a href="logout.php">Logout</a>';
    } else {

        echo "you are not logged in";
    }
    ?>



</body>

</html>