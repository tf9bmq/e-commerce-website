<?php
session_start();
header('Content-Type: application/json');

if (!isset($_POST['product_id'])) {
    echo json_encode(['success' => false, 'message' => 'No product ID provided']);
    exit;
}

$productId = (int) $_POST['product_id'];

if (!isset($_SESSION['wishlist'])) {
    $_SESSION['wishlist'] = [];
}

// Avoid duplicates
if (!in_array($productId, $_SESSION['wishlist'])) {
    $_SESSION['wishlist'][] = $productId;
    echo json_encode(['success' => true, 'message' => 'Product has been  added to wishlist !']);
} else {
    echo json_encode(['success' => false, 'message' => 'Product is already in wishlist !']);
}
