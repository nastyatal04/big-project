<?php
require_once "..\connect.php";
require_once "../functionsProduct.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы</title>
    <style>
    .rev-btn {
        color: white;
        font-weight: bold;
        text-align: center;
        padding: 8px 24px;
        border-radius: 8px;
        background-color: rgb(215, 149, 122);
        cursor: pointer;
        font-size: 1.25rem;
        text-decoration: none;
        width: max-content;
      }
      .rev-btn:hover {
        background-color: rgb(194, 125, 98);
      }
    </style>
</head>
<body>
    <?showHeader();?>
    <?showTitle("Добавить свой отзыв");?>
    <form action="" method="post">
        <label for="">Имя</label><br/>
        <input type="text" name="name"><br/>
        <label for="">Телефон</label><br/>
        <input type="text" name="phone"><br/>
        <label for="">Отзыв</label><br/>
        <input type="text" name="feedback"><br/>
        <br/>
        <input type="submit" name="rev_add" class="rev-btn">
    </form>
    <?showTitle("Отзывы наших покупателей");?>
    <?
        if(isset($_POST['rev_add'])) {
            reviewsAdd($conn, $_POST['name'],$_POST['phone'],$_POST['feedback']);
        }
        reviewsFilling($conn);

    ?>
</body>
</html>
