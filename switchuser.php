<?php
session_start();
include "conn.php";
$_SESSION['username'] = $_POST['username'];
$username = $_POST['username'];
$password = $_POST['password'];
$result = mysqli_query($conn, "SELECT COUNT(1) FROM users WHERE username = '$username' and password = '$password'");
$row = mysqli_fetch_row($result);
if ($row[0] > 0) {
    $userRole = mysqli_query($conn, "SELECT User FROM users WHERE username = '$username' and password = '$password'");
    $row = mysqli_fetch_row($userRole);
    if ($row[0] == 'admin') {
        //redirect to admin home page
        header("location: dashboard.php");
    } else {
        //redirect to user home page
        header("location:   index.php");
    }
} else {
    header("location:login.php");
}
?>

</body>

</html>