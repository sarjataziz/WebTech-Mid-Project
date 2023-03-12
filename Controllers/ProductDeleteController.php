<?php
$productID = $_GET['productID'];

//delete the product
$data = json_decode(file_get_contents("./../Models/Products.json"), true);
//delete the product from the json obejct
foreach ($data as $key => $value) {
    if ($value["productID"] == $productID) {
        unset($data[$key]);
        break;
    }
}
//save the data to the json file
file_put_contents("./../Models/Products.json", json_encode($data));

//redirect to the seller home page
header('Location: ./../../Views/dashBoard.php');