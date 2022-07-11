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
    if (isset($_SESSION['username'])) {


        echo '<a href="addcontact.php">Add Contact</a><br><br>';
        echo '<a href="passwordchange.php">Change Password</a><br><br>';


        echo '   <form method="post" action="search.php">
<input autocomplete="off" type="text" name="email" name="name" required="" />
<input type="submit" value="Search">
</form><br><br>';

        include "userinfo.php";
        echo '<br><br><a href="logout.php">Logout</a>';
    } else {

        echo 'you are not logged in<br><br><a href="login.php">click here</a>';
    }
    ?>



</body>

</html>