<?php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 1);

$response = ["status" => "error", "message" => "Unknown error occurred"];

try {
    // Database connection
    $conn = new mysqli("localhost", "root", "", "ecommerce"); // change DB if needed
    if ($conn->connect_error) throw new Exception("DB connection failed: ".$conn->connect_error);

    // Get POST data
    $fullName   = $_POST['fullName'] ?? '';
    $email      = $_POST['email'] ?? '';
    $phone      = $_POST['phone'] ?? '';
    $address    = $_POST['address'] ?? '';
    $city       = $_POST['city'] ?? '';
    $postalCode = $_POST['postalCode'] ?? '';
    $notes      = $_POST['notes'] ?? '';

    // Basic validation
    if (!$fullName || !$email || !$phone || !$address || !$city || !$postalCode) {
        throw new Exception("All required fields must be filled.");
    }

    // Prepare SQL
    $stmt = $conn->prepare("INSERT INTO orders (full_name, email, phone, address, city, postal_code, notes) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) throw new Exception("Prepare failed: ".$conn->error);
    $stmt->bind_param("sssssss", $fullName, $email, $phone, $address, $city, $postalCode, $notes);

    if ($stmt->execute()) {
        $response = ["status" => "success", "message" => "Order placed successfully!"];
    } else {
        throw new Exception("Execute failed: ".$stmt->error);
    }

    $stmt->close();
    $conn->close();

} catch (Exception $e) {
    $response['message'] = $e->getMessage();
}

echo json_encode($response);
exit;
