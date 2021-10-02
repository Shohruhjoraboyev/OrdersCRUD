
<?php
require_once('connect.php');

$result=mysqli_query($connect, "SELECT * FROM `oreders`");

$orders=mysqli_fetch_all($result);

// echo "<pre>";
// print_r($orders);
// echo "</pre>";
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
    <h2>CRUD of orders table</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>order_num</th>
            <th>&#9998</th>
            <th>&#9249</th>
        </tr>

        <?php
        foreach($orders as $item){
        ?>
            <tr>
                <td><?php echo $item[0]?></td>
                <td><?php echo $item[1]?></td>
                <td><a href="update.php?id=<?=$item[0]?>">Update</a></td>
                <td><a class="delete" href="delete.php?id=<?=$item[0]?>">Delete</a></td>
            </tr>
        <?php
        }
        
        ?>
    </table>
    <h2>Creation a new row</h2>
    <form action="create.php" name="create" method="post">
        <input type="number" name="order_num" placeholder="Enter an order number" required>
        <button  type="submit">Create</button>
    </form>
</body>
</html>
<!-- delete &#9249;
edit &#9998; -->