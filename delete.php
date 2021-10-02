<?php
require_once('connect.php');
$order_id = $_GET['id'];
mysqli_query($connect,"DELETE FROM `oreders` WHERE `oreders`.`id` = '$order_id'");
header('Location: CRUD_orders.php');
?>