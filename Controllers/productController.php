<?php
$productID = $_POST['productId'];
$name = $_POST['name'];
$imgUrl = $_POST['imgUrl'];
$description = $_POST['description'];
$price = $_POST['price'];

$json = file_get_contents('./../Models/Products.json');
$data = json_decode($json, true);

$new_user = array(
    'productID' => $productID,
    'name' => $name,
    'imgUrl' => $imgUrl,
    'description' => $description,
    'price' => $price,
);

$data[] = $new_user;
$json = json_encode($data);
file_put_contents('./../Models/Products.json', $json);

header('Location: ./../Views/dashBoard.php');