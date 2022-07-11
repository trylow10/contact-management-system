<?php
include 'conn.php';
$id = $_GET['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
// print_r($conn);
$sql = "UPDATE users SET username = '$username', email = '$email', contact = '$contact', address ='$address' where id= " . $id;

$res = mysqli_query($conn, $sql);

if (!$res) {
    die("Failed" . mysqli_error($conn));
} else {
    // echo "updated";
    header("location:dashboard.php");
}
