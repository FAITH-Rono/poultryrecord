<?php
require "./controller/index.php"

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="./assets/css/Register.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h2>Login</h2>
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="email">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login">Login</button>
            </div>
            <p>Not a member? <a href="register.php">Register here</a></p>
        </form>
    </div>
</body>
</html>
