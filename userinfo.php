<html>

<head>

</head>

<body>
    <div class="tb">
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>USERNAME</th>
                    <th> EMAIL</th>
                    <th> ADDRESS</th>
                    <th> CONTACT</th>
                    <th colspan="3"> ACTION </th>
                </tr>
            </thead>
            <tbody>
                <?php

                include 'conn.php';
                $sql = "select * from users;";
                // $sql = "select * from users where user != 'admin'";

                $res = mysqli_query($conn, $sql);
                // print_r($res);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        echo "<tr>";
                        echo "<td> " . $row['username'] . "</td>";
                        echo "<td> " . $row['email'] . "</td>";
                        echo "<td> " . $row['address'] .  "</td>";
                        echo "<td> " . $row['contact'] . "</td>";

                        echo "<td> <a href = \"edituser.php?id=" . $row['id'] . "\"> Edit </a> </td>";
                        // echo "<td><a href = \"deleteuser.php?id=" . $row['id'] . "\"> Delete </a> </td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- <div class="log"><a href="dashboard.php">Go Home</a></div> -->
</body>

</html>