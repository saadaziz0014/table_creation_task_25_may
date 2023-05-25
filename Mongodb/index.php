<?php

//first we need to download mongodb extension and configure it in php.ini

$connect = new MongoDB\Driver\Manager("mongodb://localhost:27017");

echo "Connected successfully";

$db = $connect->ecommercex;

echo 'Database selected';

$customer = $db->createCollection("customer");
echo "Customer Collection created succsessfully";


$product = $db->createCollection("product");
echo "Product Collection created succsessfully";

$order = $db->createCollection("order");
echo "Orders Collection created succsessfully";

$order_details = $db->createCollection("order_details");
echo "Order_details Collection created succsessfully";

?>