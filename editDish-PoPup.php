<?php
require_once("PDO.php");

/**
 * @var $connection ;
 */

$sql ="SELECT * FROM La_Perla_Menu WHERE ID = :ID";
$stmt =$connection->prepare($sql);
$stmt->bindParam(":ID", $_GET["id"]);
$stmt->execute();

$menu = $stmt->fetch();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        <a href="uitloggen.php" class="login-button flex">LogOut</a>
    </div>
</header>

<div class="line-design flex">________________________________________________________________________________________________</div>


<div class="admin-edit-container flex">
    <div class="edit-cont flex">

        <form action="editDish-Logic.php" method="post" class="editDish-Container">
            <h1 class="title">Edit Dish</h1>
        <div class="dish-input-dubble flex">
            <input class="dish-input-small" type="text" name="dishIDInput" id="" placeholder="Dish ID" value="<?php echo $menu["ID"]?>">
            <input class="dish-input-small" type="text" name="dishNameInput" id="" placeholder="Dish Name" value="<?php echo $menu["name"] ?>">
        </div>
            <input class="edit-dish-input discription-input" type="text" name="dishDiscription" placeholder="Dish Discription" value="<?php echo $menu["discription"] ?>">

        <div class="edit-price-cont flex">
            <input class="dish-input-small" type="text" name="dishPrice" id="" placeholder="Dish Price" value="<?php echo $menu["price"]?>">
        </div>
            <div class="edit-buttons flex">
                <a class="admin-btn flex" href="editDish.php">Back</a>
                <input name="editButton" type="submit" value="Edit" class="admin-btn flex">
            </div>

        </form>

    </div>
</div>

</body>
</html>
