<?php

include 'conn.php';
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="user.css">
</head>

<body>

    <table border="1">

        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
</body>

</html>
<?php

$sql = "SELECT * FROM users WHERE username LIKE '%" . $username . "%'";
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
?>
</tbody>
</table>


</body>

</html>