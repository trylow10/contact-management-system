<?php
$server = "localhost";
$user = "root";
$pwd = "";
$db = "cms";
$conn = mysqli_connect($server, $user, $pwd, $db);
if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}
