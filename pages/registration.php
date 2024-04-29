<?php
require_once "..\connect.php";
require_once "../functionsProduct.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Имя<input type="text"></label>
        <label for="">Email<input type="text"></label>
        <label for="">Логин<input type="text"></label>
        <label for="">Пароль<input type="text"></label>
        <input type="submit" value="Зарегестрироваться" name="reg_btn">
    </form>
</body>
</html>
<?
if(isset($_POST['reg_btn'])) {
    header("Location: http://localhost/big_project/pages/index.php");
}
?>