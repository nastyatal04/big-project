<?php
require_once "..\connect.php";
require_once "../functionsProduct.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы</title>
</head>
<body>
    <?require '..\components\header.php';?>
    <h3>Добавить свой отзыв</h3>
    <form action="" method="post">
        <label for="">Имя</label><br/>
        <input type="text" name="name"><br/>
        <label for="">Телефон</label><br/>
        <input type="text" name="phone"><br/>
        <label for="">Отзыв</label><br/>
        <input type="text" name="feedback"><br/>
        <br/>
        <input type="submit" name="rev_add">
    </form>
    <h3>Отзывы наших покупателей</h3>
    <?
        if(isset($_POST['rev_add'])) {
            reviewsAdd($conn, $_POST['name'],$_POST['phone'],$_POST['feedback']);
        }
        reviewsFilling($conn);

    ?>
</body>
</html>
