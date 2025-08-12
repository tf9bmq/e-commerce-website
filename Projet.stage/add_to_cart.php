<?php
session_start();
require 'db_connect.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['product_id'])) {
    $productId = (int) $_POST['product_id'];

    // Avoid duplicates
    if (!in_array($productId, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $productId;
    }
}

header("Location: cart.php");
exit;
