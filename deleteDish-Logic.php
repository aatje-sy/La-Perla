<?php
require_once "PDO.php";

/**
 * @var $connection ;
 */

if (isset($_POST["id"])){
    $sql = "DELETE FROM La_Perla_Menu WHERE ID = :ID";
    $stmt =$connection->prepare($sql);
    $stmt->bindParam(":ID", $_POST['id']);
    $stmt->execute();

    header('Location: editDish.php');
    exit();
}

?>

