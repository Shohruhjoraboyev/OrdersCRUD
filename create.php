<?php
require_once('connect.php');
$order_num=$_POST['order_num'];
$result=mysqli_query($connect,"INSERT INTO `oreders`( `order_num`) VALUES ('$order_num')");
header('Location: CRUD_orders.php');
?>