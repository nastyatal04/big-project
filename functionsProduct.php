<?
require_once "connect.php";
function catalogFilling ($conn){
    $sql = "SELECT * FROM `products`";
    if($result = $conn->query($sql)){
        while($row = $result->fetch_array()){
            $title = $row['title'];
            $price = $row['price'];
            $image = $row['image'];
            $descriptions = $row['descriptions'];
            require 'components\card.php';
        }
    }
}
function reviewsFilling ($conn) {
    $sql = "SELECT * FROM `reviews`";
    if($result = $conn->query($sql)){
        while($row = $result->fetch_array()){
            $name = $row['name'];
            $phone = $row['phone'];
            $review = $row['review'];
            require 'components\review_card.php';
        }
    }
}
function reviewsAdd($conn, $name, $phone, $review) {
    if(isset($name) && isset($phone) && isset($review)) {
        $sql = "INSERT INTO `reviews` (`id`, `name`, `phone`, `review`) VALUES (NULL, '$name', '$phone', '$review');";
        mysqli_query($conn, $sql);
    }
}
function cartFilling ($conn) {
    //Тут что-то с ссессиями наверное => заполнение корзины товарами
}

function showTitle ($title) {
    require '..\components\title.php';
}

function showHeader () {
    //Добавить, чтобы имя высвечивалось или кнопка войти
    require '..\components\header.php';
}

function registration($name, $email, $phone, $login, $password, $conn) {
    $sql = "SELECT * FROM `users` WHERE `name`='$name' AND `email`='$email' AND `phone`='$phone' AND `login`='$login' AND `password`='$password'";
    $result = $conn->query($sql);
    if($result->num_rows == 0) {
        $sql = "INSERT INTO `users`(`id`, `name`, `email`, `phone`, `login`, `password`) VALUES (NULL,'$name','$email','$phone','$login','$password')";
        if($result = $conn->query($sql)) {
            header("Location: http://localhost/big_project/pages/index.php");
        }        
    }
    else {
        echo "<div class='message'>Такой пользователь уже есть в базе.</div>";
    } 
}

function autorization($login, $password, $conn) {
    $sql = "SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'";
    $result = $conn->query($sql);
    if($result->num_rows == 0) {
        echo "<div class='message'>Такого пользователя нет в базе.</div>";
    } else {
        while($row = $result->fetch_array()){
            setcookie("name", $age, time() + 3600 * 4);
            setcookie("email", $age, time() + 3600 * 4);
            setcookie("phone", $age, time() + 3600 * 4);
            setcookie("login", $age, time() + 3600 * 4);
            setcookie("password", $age, time() + 3600 * 4);            
            echo "<div class='message'>". $_COOKIE['name'] ."</div>";
        }
    }
}
?>