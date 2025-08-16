<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = ""; // your DB password
$dbname = "ecommerce";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if email is sent via POST
if (isset($_POST['email'])) {
    $email = $_POST['email'];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email']);
        exit;
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM subscribers WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo json_encode(['status' => 'error', 'message' => 'Email already subscribed, Try with another one']);
    } else {
        // Insert email
        $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            echo json_encode(['status' => 'success', 'message' => 'Subscription successful']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Database error']);
        }
    }

    $stmt->close();
}

$conn->close();
