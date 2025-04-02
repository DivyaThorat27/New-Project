<?php

include('connection.php');

$stmt = $conn->prepare("SELECT * FROM products LIMIT 10");

$stmt->execute();

$main_dish_products = $stmt->get_result();
?>