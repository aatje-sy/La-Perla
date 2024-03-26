<?php
    ob_start();
    require_once ("PDO.php");

    if (isset($_POST['loggingIn'])){
        if ($_POST['username'] == "LaPerla" && $_POST['password'] == "Elegantu")
            header('Location: admin.php');
        else {
            echo "Login was not succeed";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to La Perla</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form name="login" action="login.php" method="post" class="login-container flex">
        <h1 class="title">Login to La Perla</h1>
        <input name="username" class="login-input" type="text" placeholder="Username">
        <input name="password" class="login-input" type="password" placeholder="Password">
        <button name="loggingIn" type="submit" class="login-btn">Login</button>
    </form>
</body>
</html>