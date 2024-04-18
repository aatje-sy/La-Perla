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
            <a href="uitloggen.php" class="login-button flex">LogOut</a>
        </div>
    </header>

    <div class="line-design flex">________________________________________________________________________________________________</div>

    <form method="post" action="Add-Logic.php" class="admin-dish-container flex">
        <h1 class="title">Add dish to La Perla</h1>
        <input class="add-dish-input" type="text" name="dishNameInput" id="" placeholder="Dish Name*">
        <input class="add-dish-input" type="text" name="dishDiscription" id="" placeholder="Dish Discription*">
        <input class="add-dish-input" type="text" name="dishPrice" id="" placeholder="Dish Price*">
        <input class="add-dish-input" type="text" name="dishCategory" id="" placeholder="Dish Category">
        <div class="btn-container flex">
            <a class="admin-btn flex" href="editDish.php">Back</a>
            <input type="submit" class="admin-btn" name="Add-Dish" value="Add Dish">
        </div>

    </form>

</body>
</html>
