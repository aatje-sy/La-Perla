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
    <link rel="stylesheet" href="style.css">
    <title>Add Dish</title>
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

    <div class="admin-edit-container flex">
        <div class="edit-cont flex">
            <h1 class="title">Edit Dish</h1>
            <div class="dish-input-dubble flex">
                <input class="dish-input-small" type="text" name="dishNameInput" id="" placeholder="Dish ID">
                <input class="dish-input-small" type="text" name="dishNameInput" id="" placeholder="Dish Name">
            </div>
            <input class="edit-dish-input discription-input" type="text" name="dishDiscription" id="" placeholder="Dish Discription">
            <div class="dish-input-dubble flex">
                <input class="dish-input-small" type="text" name="dishPrice" id="" placeholder="Dish Price">
                <input class="dish-input-small" type="text" name="dishCategory" id="" placeholder="Dish Category">
            </div>

            <div class="btn-container flex">
                <a class="admin-btn flex" href="admin.php">Back</a>
                <a class="admin-btn flex" href="#">Edit</a>
            </div>

        </div>
    </div>

</body>
</html>
