<?php
require_once "..\connect.php";
require_once "../functionsProduct.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?require '..\components\header.php';?>
    <form action="" method="post">
        <label for="">Логин<input type="text"></label>
        <label for="">Пароль<input type="text"></label>
        <input type="submit" value="Войти">
        <span>Если Вы впервые на нашем сайте то <a href="registration.php">зарегестрируйтесть</a>.</span>
    </form>
</body>
</html>