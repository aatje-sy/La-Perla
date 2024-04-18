<?php
require_once("PDO.php");

/**
 * @var $connection;
 */


if (isset($_POST["editButton"])){
$sql ="UPDATE La_Perla_Menu SET name = :name, discription = :discription, price = :price WHERE ID = :ID";
$stmt = $connection->prepare($sql);
$stmt->bindParam(":ID", $_POST['dishIDInput']);
$stmt->bindParam(":name", $_POST['dishNameInput']);
$stmt->bindParam(":discription", $_POST['dishDiscription']);
$stmt->bindParam(":price", $_POST['dishPrice']);
$stmt->execute();

    header('Location: editDish.php');

}

?>