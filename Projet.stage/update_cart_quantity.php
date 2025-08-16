<?php
session_start();
header('Content-Type: application/json');

if (!isset($_POST['product_id'], $_POST['quantity'])) {
    echo json_encode(['success' => false, 'message' => 'Missing parameters']);
    exit;
}

$productId = (int) $_POST['product_id'];
$quantity = (int) $_POST['quantity'];

if ($quantity < 1) {
    echo json_encode(['success' => false, 'message' => 'Invalid quantity']);
    exit;
}

if (!isset($_SESSION['cart'][$productId])) {
    echo json_encode(['success' => false, 'message' => 'Product not found in cart']);
    exit;
}

// Update session cart
$_SESSION['cart'][$productId]['quantity'] = $quantity;

echo json_encode(['success' => true, 'message' => 'Quantity updated']);
