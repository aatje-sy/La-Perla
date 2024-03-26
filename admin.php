<?php
    require_once ("PDO.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Perla Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>La Perla</h1>
        </div>
        <ul class="header-links">
            <a href="index.html">Home</a>
            <a href="menu.php">Menu</a>
            <a href="">About</a>
            <a href="">Book</a>
        </ul>
        <div class="logIn">
            <a href="login.php" class="login-button flex">Login</a>
        </div>
    </header>

    <div class="line-design flex">________________________________________________________________________________________________</div>

    <div class="admin-container flex">
        <a href="addDish.php" class="admin-btn Add-dish-btn flex">Add Dish</a>
        <a href="editDish.php" class="admin-btn admin-menu-btn flex">Edit Menu</a>
        <a href="#" class="admin-btn reservations-admin-btn flex">Reservations</a>
    </div>
</body>
</html>
