

<?php
    require_once ("PDO.php");

    $stm = $pdo->query('SELECT name , discription , price    FROM La_Perla_Menu');
    while ($row = $stm-> fetch()){
        echo $row ['name'];
        echo $row ['discription'];
    }
?>

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

    <h1 class="title">La Perla Menu</h1>

    <div class="whole-menu-container flex">
            <div id="myBtnContainer" class="btns-container flex">
                <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                <button class="btn" onclick="filterSelection('pasta')">Pasta</button>
                <button class="btn" onclick="filterSelection('pizza')">Pizza</button>
                <button class="btn" onclick="filterSelection('drinks')">Drinks</button>
                <button class="btn" onclick="filterSelection('dessert')">Dessert</button>

              </div>
        <div class="the-menu-container flex">
            <div class="filterDiv pasta">
                <div>
                    <p>Spaghetti Carbonara</p>
                    <p>discriptionnn</p>
                </div>

                <div>
                    <p>€9,99</p>
                    <button class="btn">Order</button>
                </div>
            </div>
            <div class="filterDiv pasta">
                <div>
                    <p>Ravioli al Burro e Salvia</p>
                    <p>discriptionnn</p>
                </div>
                <div>
                    <p>€9,99</p>
                    <button class="btn">Order</button>
                </div>
            </div>
            <div class="filterDiv pasta">
                <div>
                    <p>Linguine alle Vongole</p>
                    <p>discriptionnn</p>
                </div>

                <div>
                    <p>€9,99</p>
                    <button class="btn">Order</button>
                </div>
            </div>
            <div class="filterDiv pizza">
                <div>
                    <p>Margherita Pizza</p>
                    <p>discriptionnn</p>
                </div>

                <div>
                    <p>€9,99</p>
                    <button class="btn">Order</button>
                </div>
            </div>
            <div class="filterDiv pizza">
                <div>
                    <p>Quattro Stagioni</p>
                    <p>discriptionnn</p>
                </div>

                <div>
                    <p>€9,99</p>
                    <button class="btn">Order</button>
                </div>
            </div>
            <div class="filterDiv pizza">
                <div>
                    <p>Neapolitan Pizza</p>
                    <p>discriptionnn</p>
                </div>

                <div>
                    <p>€9,99</p>
                    <button class="btn">Order</button>
                </div>
            </div>
            <div class="filterDiv drinks">
                <div>
                    <p>Limonata</p>
                    <p>discriptionnn</p>
                </div>

                <div>
                    <p>€9,99</p>
                    <button class="btn">Order</button>
                </div>
            </div>
            <div class="filterDiv drinks">
                <div>
                    <p>Aranciata</p>
                    <p>discriptionnn</p>
                </div>

                <div>
                    <p>€9,99</p>
                    <button class="btn">Order</button>
                </div>
            </div>
            <div class="filterDiv drinks">
                <div>
                    <p>Acqua di Menta</p>
                    <p>discriptionnn</p>
                </div>

                <div>
                    <p>€9,99</p>
                    <button class="btn">Order</button>
                </div>
            </div>
            <div class="filterDiv dessert">
                <div>
                    <p>Tiramisu</p>
                    <p>discriptionnn</p>
                </div>

                <div>
                    <p>€9,99</p>
                    <button class="btn">Order</button>
                </div>
            </div>
            <div class="filterDiv dessert">
                <div>
                    <p>Cannoli</p>
                    <p>discriptionnn</p>
                </div>

                <div>
                    <p>€9,99</p>
                    <button class="btn">Order</button>
                </div>
            </div>
            <div class="filterDiv dessert">
                <div>
                    <p>Panna Cotta</p>
                    <p>discriptionnn</p>
                </div>

                <div>
                    <p>€9,99</p>
                    <button class="btn">Order</button>
                </div>
            </div>
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

    <script src="scripts.js"></script>
</body>
</html>
