<?php
    if (isset($_GET['loginFailed'])) {
        $message = "Invalid Credentials ! Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/signup.css">
</head>

<body>
<div class="loginbox">
            <img src="./images/blank profile.jpeg" class="avatar">
            <h1>Login here</h1>
            <form action="customer_login_action.php" method="post">
                <p>Username</p>
                <input type="text" name="cust_uname" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="cust_psw" placeholder="Enter Password">
                <input type="submit" name="" placeholder="Login">
                <a href="signup.html">Don't have an Account?</a>
                <a href="index.html">Cancel</a>
            </form>
        </div>

</body>
</html>