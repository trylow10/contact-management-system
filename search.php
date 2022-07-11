<?php

include 'conn.php';
// session_start();
?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <table border="1" width="100%">
        <thead>
            <tr>
                <th>USERNAME</th>
                <th> EMAIL</th>
                <th> ADDRESS</th>
                <th> CONTACT</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // $sql = "select username,email,contact from users where user != 'admin'";


            if (!empty($_REQUEST['username'])) {

                $term = ($_REQUEST['username']);

                $sql = "SELECT * FROM users WHERE username LIKE '%" . $term . "%'";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {

                        // echo $row;
                        echo "<tr>";
                        echo "<td> " . $row['username'] . "</td>";
                        echo "<td> " . $row['email'] . "</td>";
                        echo "<td> " . $row['address'] .  "</td>";
                        echo "<td> " . $row['contact'] . "</td>";
                        echo "</tr>";
                    }
                }
            }
            ?>
</body>


</html>