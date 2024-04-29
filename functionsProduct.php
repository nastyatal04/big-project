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

?>
