<?php
require_once "..\connect.php";
require_once "../functionsProduct.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <style>
        .title {
        margin: 8px 32px;
        color: rgb(145, 85, 60);
        font-size: 2rem;
      }
      .message {
        color: rgb(117, 115, 114);
        margin: 4px 8px;
        font-size: 1.25rem;
      }
      .basket-footer {
        width: 30%;
        margin: 4px auto;
      }
      .itog {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 4px 0;
      }
      .line {
        margin: 16px auto;
        border-top: 2px solid rgb(171, 183, 219);
        width: 55%;
      }
      .basket-btn {
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
        margin: 4px 0;
      }
      .basket-btn:hover {
        background-color: rgb(194, 125, 98);
      }
    </style>
</head>
<body>
<?require '..\components\header.php';?>
<?
if(!isset($_SESSION['total_count_goods'])) {
    echo '<h3 class="message">Здесь пока нет товаров...</h3>';
}
else {
  cartFilling($conn);
}
?>

    
</body>
</html>