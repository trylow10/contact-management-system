<?php
session_start();
?>
<html>

<head>

</head>
<h1>Admin Model</h1>

<body>
    <?php
    if (isset($_SESSION['username'])) {

        echo '<a href="addcontact.php">Add Contact</a><br><br>';
        echo '
    <div class="tb">
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>USERNAME</th>
                    <th> Password</th>
                    <th> EMAIL</th>
                    <th> ADDRESS</th>
                    <th> CONTACT</th>
                    <th colspan="3"> ACTION </th>
                </tr>
            </thead>
            <tbody>';

        include 'conn.php';

        // echo " Welcome " .$_SESSION['username'];


        $sql = "select * from users;";
        // $sql = "select * from users where user != 'admin'";

        $res = mysqli_query($conn, $sql);
        // print_r($res);
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>";
                echo "<td> " . $row['username'] . "</td>";
                echo "<td> " . $row['password'] . "</td>";
                echo "<td> " . $row['email'] . "</td>";
                echo "<td> " . $row['address'] . "</td>";
                echo "<td> " . $row['contact'] . "</td>";

                echo "<td> <a href=\"edituser.php?id=" . $row['id'] . " \"> Edit </a> </td>";
                echo "<td><a href=\"deleteuser.php?id=" . $row['id'] . " \"> Delete </a> </td>";
                echo "</tr>";
            }
        }
    } else {

        echo 'you are not logged in <a href="login.php">login</a>';
    }
    ?>
    </tbody>
    </table>
    </div>







    <br><br>
    <div class="log"><a href="logout.php">Logout</a></div>
</body>

</html>