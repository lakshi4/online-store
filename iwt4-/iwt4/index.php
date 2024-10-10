<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome user</title>

    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="login__body">

<?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>

    <div class="login__admin">

    <h1 style="color: aliceblue;">Welcome User</h1>

    <hr>

        <form action="signInprocess.php" method="post">
            <h3 style="color: aliceblue;">Email</h3>
            <input type="email" name="email" class="textFeild2" style="width: 30vw;">

            <h3 style="color: aliceblue;">Password</h3>
            <input type="password" name="password" class="textFeild2" style="width: 30vw; "><br>

            <input type="submit" name="login_user" value="Login">

            <a href="./register.html">New user? Register</a>

        </form>
    </div>

</body>

</html>