<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <div class="txt_field">
                <input type="text" required autocomplete="off" name="username">
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" required autocomplete="off" name="password">
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" value="Login">
            <div class="signup_link">
                Don't have an account yet? Signup <a href="signup.php">Here</a>
            </div>
        </form>
    </div>

</body>

</html>