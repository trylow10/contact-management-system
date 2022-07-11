<!DOCTYPE html>
<?php session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href=">
    <script src=" https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</head>

<body>

    <?php
    $id = $_GET['id'];
    include 'conn.php';

    // echo " Welcome " .$_SESSION['username'];


    $sql = "select * from users where id= " . $id;
    // $sql = "select * from users where user != 'admin'";

    $res = mysqli_query($conn, $sql);
    // print_r($res);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<td> " . $row['username'] . "</td>";
            echo "<td> " . $row['password'] . "</td>";
            echo "<td> " . $row['email'] . "</td>";
            echo "<td> " . $row['address'] . "</td>";
            echo "<td> " . $row['contact'] . "</td>";

            echo "<td> <a href=\"edituser.php?id=" . $row['id'] . " \"> Edit </a> </td>";
        }
    }
    ?>

</html>