<?php
require_once "..\connect.php";
require_once "../functionsProduct.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <style>
        .form {
            display: flex;
            flex-direction: column;
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
    </style>
</head>
<body>
    <?showHeader();?>
    <form action="" method="post" class="form">
        <label for="" class="form_label">Имя<input type="text" name="name" value="Инга Игнатьева"></label>        
        <label for="" class="form_label">Email<input type="text" name="email" value="ing@mail.ru"></label>
        <label for="" class="form_label">Телефон<input type="text" name="phone" value="88003003351"></label>
        <label for="" class="form_label">Логин<input type="text" name="login" value="Инга"></label>
        <label for="" class="form_label">Пароль<input type="password" name="password" value="112233"></label>
        <input type="submit" value="Зарегестрироваться" name="reg_btn">
    </form>
</body>
</html>
<?
if(isset($_POST['reg_btn'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $login = $_REQUEST['login'];
    $password = $_REQUEST['password'];
    if(isset($name, $email, $phone, $login, $password) && 
             $name != "" && $email != "" && $phone != "" && 
             $login != "" && $password != "") {
        registration($name, $email, $phone, $login, $password, $conn);
    } 
    else {
        //Можнро ли ка-то сделать, чтобы он не затирал инпуты, чтобы не пришлос заноава всё печатаь
        echo "<div class='message'>Заполните все поля, пожалуйста:(</div>";
    }
}
?>