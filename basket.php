<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: monospace;
        font-size: 1rem;
      }
      .container {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        font-size: 1rem;
        margin: 8px 36px;
      }
      .card {
        display: flex;
        flex-direction: column;
        padding: 16px;
        border: 1px solid rgb(171, 183, 219);
        border-radius: 8px;
        width: 250px;
        gap: 8px;
      }
      .card img {
        aspect-ratio: 1/1;
        object-fit: cover;
        border-radius: 8px;
      }
      .footer {
        display: flex;
        flex-direction: column;
        gap: 8px;
      }
      .info {
        display: flex;
        justify-content: space-between;
      }
      .btn {
        color: white;
        font-weight: bold;
        width: 230px;
        margin: 0 auto;
        text-align: center;
        padding: 8px;
        border-radius: 8px;
        background-color: rgb(215, 149, 122);
        cursor: pointer;
      }
      .btn:hover {
        background-color: rgb(194, 125, 98);
      }
      .header-menu {
        display: flex;
        justify-content: space-between;
        background-color: rgb(230, 194, 179);
        margin: 0;
      }
      .header-btn {
        color: white;
        font-weight: bold;
        text-align: center;
        padding: 8px 24px;
        border-radius: 8px;
        background-color: rgb(215, 149, 122);
        cursor: pointer;
        font-size: 1.25rem;
        text-decoration: none;
        margin: 8px 16px;
        width: max-content;
      }
      .header-btn:hover {
        background-color: rgb(194, 125, 98);
      }
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
      .card-basket {
        display: flex;
        flex-direction: row;
        gap: 24px;
        padding: 16px;
        border-radius: 8px;
        width: 50%;
        font-size: 1rem;
        border: 1px solid rgb(171, 183, 219);
        border-radius: 8px;
      }
      .card-basket img {
        aspect-ratio: 1/1;
        object-fit: cover;
        border-radius: 8px;
        width: 130px;
      }
      .btn-container {
        display: flex;
        flex-direction: row;
        gap: 8px;
        font-size: 1rem;
        align-items: center;
      }
      .znack-btn {
        color: white;
        font-weight: bold;
        text-align: center;
        padding: 8px;
        border-radius: 8px;
        background-color: rgb(215, 149, 122);
        cursor: pointer;
        height: 20px;
        width: 20px;
      }
      .znack-btn:hover {
        background-color: rgb(194, 125, 98);
      }
      .card-basket .count {
        padding: 8px;
        font-weight: bold;
      }
      .card-basket .name {
        font-weight: bold;
        color: rgb(145, 85, 60);
      }
      .card-basket .price {
        font-weight: bold;
        margin: 0 16px;
      }
      .basket-container {
        display: flex;
        flex-direction: column;
        gap: 8px;
        align-items: center;
      }
      .info-basket {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        width: 100%;
        align-items: center;
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
    <div class="header-menu">
        <a href='index.php' class="header-btn">Каталог</a>
        <a href='basket.php' class="header-btn">Корзина</a>
    </div>
    <h1 class="title">Корзина</h1>
    <h3 class="message">Здесь пока нет товаров...</h3>
    <div class="basket-container">
        <div class="card-basket">
            <img
                src="<?echo "./products_img/4.png"?>"
                alt=""
            />
            <div class="info-basket">
                <div>
                    <div class="name"><?php echo "Супер-пупер мягкий котяра";?></div>
                    <div class="color"><?echo "Согревает, обнимает, печали прогоняет:)";?></div>
                </div>
                <div class="price">$<?echo "100"?></div>
            </div>
            <div class="btn-container">
                <div class="znack-btn">-</div>
                <div class="count">1</div>
                <div class="znack-btn">+</div>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="basket-footer">
      <h1 class="title">Итого:</h1>
      <div class="itog"><span><b>Количество товаров</b></span><span>1</span></div>
      <div class="itog"><span><b>Сумма</b></span><span>$100</span></div>
      <div class="itog">
        <div class="basket-btn">Очистить корзину</div>
        <div class="basket-btn">Оформить заказ</div>
      </div>
    </div>
    
</body>
</body>
</html>