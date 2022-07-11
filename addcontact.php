<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name="frm" action="insertuser.php" onsubmit=" return valid()" method="POST">
        <div class="fontuser">
            <label for="Username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="fontuser">
            <label for="E-mail">E-mail</label>
            <input type="text" class="form-control" name="email" placeholder="E- mail">
        </div>
        <div class="password">
            <label for="Contact">Contact</label>
            <input type="text" class="form-control" name="contact" placeholder="Contact">
        </div>
        <div class="password">
            <label for="Contact">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Address">
        </div>
        <div class="password">
            <label for="Password">Password</label>
            <input type="Password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="password">
            <label for="Password">Confirm Password</label>
            <input type="Password" class="form-control" name="password2" placeholder="Password">
        </div></br>
        <input type="submit" class="btn btn-primary" value="Add contact"><br><br>
        </div>
    </form>
</body>

</html>