<?php
require_once "..\connect.php";
require_once "../functionsProduct.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <style>
        .form {
            display: flex;
            flex-direction: column;
            justify-items: center;
            gap: 8px;
            width: 300px;
            padding: 8px 16px;
        }
        .form_label {
            display: flex;
            flex-direction: column;
            gap: 4px;
            font-size: 1.2rem;
            font-weight: bold;
            color: rgb(145, 85, 60);
        }
        .message {
        color: rgb(117, 115, 114);
        margin: 4px 8px;
        font-size: 1.25rem;
        }
        .form span {
            text-align: center;
        }
        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <?showHeader();?>
    <div class="wrapper">
        <form action="" method="post" class="form">
            <label for="" class="form_label">Логин<input type="text" name="login"></label>
            <label for="" class="form_label">Пароль<input type="text" name="password"></label>
            <input type="submit" value="Войти" name="atr_btn">
            <span>Если Вы впервые на нашем сайте то <a href="registration.php">зарегестрируйтесть</a>.</span>
        </form>
    </div>
</body>
</html>
<?
    if(isset($_POST['atr_btn'])) {
        $login = $_REQUEST['login'];
        $password = $_REQUEST['password'];
        if($login != "" && $password != "") {
            autorization($login, $password, $conn);
        } 
    }
?>