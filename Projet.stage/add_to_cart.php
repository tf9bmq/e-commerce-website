<?php
session_start();
require 'db_connect.php';

header('Content-Type: application/json'); // Tell browser we’re sending JSON

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (!isset($_POST['product_id'])) {
    echo json_encode(['success' => false, 'message' => 'No product ID provided']);
    exit;
}

$productId = (int) $_POST['product_id'];

// Avoid duplicates
if (!in_array($productId, $_SESSION['cart'])) {
    $_SESSION['cart'][] = $productId;
    echo json_encode(['success' => true, 'message' => ' Product has been added to cart !']);
} else {
    echo json_encode(['success' => false, 'message' => ' Product is already in cart !']);
}
