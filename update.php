<?php

$req=require_once('connect.php');
$order_id = $_GET['id'];
$value = mysqli_query($connect,"SELECT * FROM `oreders` WHERE `id`='$order_id'");
$value=mysqli_fetch_all($value);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h2>Updating a row</h2>
    <form action="vendor/update.php" name="create" method="post">
        <input type="hidden" name="id" value="<?= $order_id ?>">
        <input type="number" name="order_num" value="<?= $value[0][1]?>" required>
        <button  type="submit">Update</button>
    </form>
</body>
</html>