<?php
    ob_start();
    require_once("PDO.php");
    session_start();

    if (isset($_POST['loggingIn'])) {
        if ($_POST['username'] == "test" && $_POST['password'] == "hi")
            $_SESSION['username'] = "test";
        header('Location: editDish.php');
    }
        else {
            header("location: login.php");
    }
?>