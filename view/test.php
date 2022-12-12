<?php
include('../Controller/show.control.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php foreach($products as $product):?>
        <div>
                <input type="text" name="productName" value="<?php echo $product['name']?>">
                <input type="text" name="productPrice" value="<?php echo $product['price']?>">
                <form action="../Controller/delete.control.php" method="get">
            <input type="hidden" name="productId" value="<?php echo $product['id']?>">
            <button type="submit">update</button>
            </form>
        </div>
    <?php endforeach;?> 
    
    <?php foreach($products as $product):?>
        <div>
            <form action="../Controller/update.control.php" method="post">
                <input type="text" name="productName" value="<?php echo $product['name']?>">
                <input type="text" name="productPrice" value="<?php echo $product['price']?>">
            <input type="hidden" name="productId" value="<?php echo $product['id']?>">
            <button type="submit">update</button>
            </form>
        </div>
    <?php endforeach;?> 
    </div>
</body>
</html>