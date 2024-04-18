<?php
require_once("PDO.php");

session_start();

if (isset($_SESSION["username"])) {
    //DAN BEN IK INGELOGD
}else {
    header("location: login.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>La Perla Menu Admin</title>
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

    <div class="container flex">
        <a href="addDish.php" class="btn Add-dish-btn flex">Add Dish</a>
        <h1 class="title">Edit Menu</h1>
    </div>

    <div class="whole-menu-container flex">
        <div class="the-menu-container flex">

            <?php

            /**
             * @var $connection ;
             */

            $stmt = $connection->query("SELECT * FROM La_Perla_Menu");

            while ($menu = $stmt->fetch()) {
                ?>
                <div class='dishInfoCont flex'>
                    <div class='dishInfo flex'>
                        <div class='left-side flex'>
                            <div class='dishTitle'> <?php echo $menu["name"] ?></div>
                            <div class='dishDisc'> <?php echo $menu["discription"] ?></div>
                        </div>
                        <div class='right-side flex'>
                            <form action='editDish-PoPup.php' method='get'>
                                <input type='submit'  name='editDish' class='btn' value='Edit'>
                                <input type='hidden' value='<?php echo $menu["ID"] ?>' name='id'> <!-- Added echo and quotes -->
                            </form>
                            <form action='deleteDish-Logic.php' method='POST' onsubmit='return confirm("Are you sure you want to Delete?");'>
                                <input type='submit' name='deleteDish' class='btn flex' value='Delete'>
                                <input type='hidden' value='<?php echo $menu["ID"] ?>' name='id'>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>


        </div>
    </div>;


</body>
</html>
