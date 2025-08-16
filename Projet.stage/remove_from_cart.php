<?php
session_start();

if (isset($_POST['product_id'])) {
    $productId = (int) $_POST['product_id'];
    if (isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array_filter($_SESSION['cart'], fn($id) => $id != $productId);
    }
}

header("Location: cart.php");
exit;
