<?php

$req=require_once('../connect.php');
$order_num=$_POST['order_num'];
$order_id=$_POST['id'];
$update=mysqli_query($connect,"UPDATE `oreders` SET `order_num`='$order_num' WHERE `oreders`.`id`='$order_id'");
header('Location: ../CRUD_orders.php');
?>