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

        echo "welcome " . $_SESSION['username'];
        include("userinfo.php");
        echo '<a href="logout.php">Logout</a>';
    } else {

        echo "you are not logged in";
    }
    ?>



</body>

</html>