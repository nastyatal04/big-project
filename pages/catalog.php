<?php
require_once "..\connect.php";
require_once "../functionsProduct.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
</head>
<body>
    <?require '..\components\header.php';?>
    <h1 class="title">Каталог товаров</h1>
    <div class="container">
        <?php
            catalogFilling($conn);
        ?>
    </div>
</body>
</html>