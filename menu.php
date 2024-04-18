<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Perla Menu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    
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

    <div class="container ">
    <h1 class="title">La Perla Menu</h1>

    <div class="whole-menu-container flex">
        <div class="the-menu-container flex">

            <form method="get">
                <input class="searchBar" type="text" name="search" placeholder="Search">
            </form>

        <?php
        require_once("PDO.php");
        /**
         * @var $connection;
         */

        if (isset($_GET['search'])){

            $zoekQuery = "SELECT * FROM La_Perla_Menu WHERE name LIKE :zoekinput";
            $stmt = $connection ->prepare($zoekQuery);
            $var = "%" . $_GET['search'] . "%";
            $stmt -> bindParam( ":zoekinput" , $var);
            $stmt->execute();
        }else {
            $stmt = $connection->query("SELECT * FROM La_Perla_Menu");
        }
        //-------------------------------------------->

        while($menu = $stmt ->fetch()){

            echo "<div class='dishInfoCont flex'>" .
                    "<div class='dishInfo flex'>".
                        "<div class='left-side flex'>" .
                            "<div class='dishTitle'>".$menu["name"]."</div>".
                            "<div class='dishDisc'>".$menu["discription"]."</div>".
                        "</div>" .
                        "<div class='right-side flex'>".$menu["price"]." "."<div class='order-btn'>Order</div>" ."</div>".
                    "</div>" .
                "</div>";

        }
?>
        </div>
    </div>

    <footer class="footer flex">
        <div class="footer-buttons flex">
            <a href="#" class="book-button">Book Table</a>
            <a href="#" class="about-button">About us</a>
            <div class="logo-footer">La Perla</div>
            <a href="#" class="contact-button">Contact</a>
            <a href="#" class="location-button">Location</a>
        </div>
        <div class="line-design flex">________________________________________________________________________________</div>
        <div class="circle-cont flex">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </footer>
</body>
</html>
