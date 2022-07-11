<?php
$id = $_GET['id'];
include 'conn.php';
$sql = "select * from users where id= " . $id;
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
?>
        <div class="edit">
            <form method="post" action="updateuser.php?id=<?php echo $id; ?>">
                <div class="cont">

                    <!-- <input type="hidden" name="id"> -->
                    USERNAME: <input type="text" name="username" value="<?php echo $row['username']; ?>" required>
                    <br><br>
                    PASSWORD: <input type="text" name="password" value="<?php echo $row['password']; ?>" required>
                    <br><br>
                    EMAIL: <input type="text" name="email" value="<?php echo $row['email']; ?>" required>
                    <br><br>
                    ADDRESS: <input type="text" name="address" value="<?php echo $row['address']; ?>" required>
                    <br> <br>
                    CONTACT: <input type="number" name="contact" value="<?php echo $row['contact']; ?>" required>
                    <br> <br>
                    <input type="submit" value="Update">
                </div>
            </form>
        </div>
<?php
    }
}
?>
<!-- <div class="go"><a href="admin_homepage.php">Go Home</a></div> -->
</body>

</html>