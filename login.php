<?php
    include_once("PDO.php");

    session_start();

    if (isset($_SESSION["username"])) {
        header("Location: editDish.php");
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
    <form name="login" action="login-logic.php" method="post" class="login-container flex">
        <h1 class="title">Login to La Perla</h1>
        <input name="username" class="login-input" type="text" placeholder="Username">
        <input name="password" class="login-input" type="password" placeholder="Password">
        <div class="flex" style="gap: 10px">
            <a class="login-btn flex" href="index.html">Back</a>
            <button name="loggingIn" type="submit" class="login-btn">Login</button>
        </div>
    </form>
</body>
</html>