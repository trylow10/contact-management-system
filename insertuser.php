<?php
session_start();
include("conn.php");
$_SESSION["username"] = $_POST['username'];
$username = $_POST['username'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$address = $_POST['address'];
$sql = "insert into users(username, email, contact, password,address) values ('$username','$email', '$contact', '$password','$address')";
$res = mysqli_query($conn, $sql);
if (!$res) {
    die("insertion failed " . mysqli_error($conn));
    // header("location:login.php?msg=invalid");
} else {
    echo '<script>alert(" new user created")</script>';
    header("location:profile.php");
}
