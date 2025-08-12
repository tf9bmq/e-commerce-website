<?php
session_start();

header('Content-Type: application/json');

if (!isset($_POST['product_id'])) {
    echo json_encode(['success' => false, 'message' => 'No product ID received']);
    exit;
}

$productId = (int)$_POST['product_id'];

if (!isset($_SESSION['wishlist'])) {
    $_SESSION['wishlist'] = [];
}

$_SESSION['wishlist'] = array_filter($_SESSION['wishlist'], function($id) use ($productId) {
    return $id !== $productId;
});

$_SESSION['wishlist'] = array_values($_SESSION['wishlist']);

echo json_encode(['success' => true]);
