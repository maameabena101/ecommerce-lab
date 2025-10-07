<?php
// Include your core settings (for DB connection and session)
require_once '../settings/core.php';

// Start session (if not already started in core.php)
if(session_status() === PHP_SESSION_NONE){
    session_start();
}

// Get POST data from login form
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Prepare and execute query to get customer by email
$stmt = $conn->prepare("SELECT * FROM customer WHERE customer_email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists
if($result->num_rows === 1){
    $row = $result->fetch_assoc();

    // Verify password
    if(password_verify($password, $row['customer_pass'])){
        // Login successful – set session variables
        $_SESSION['user_id'] = $row['customer_id'];
        $_SESSION['user_name'] = $row['customer_name'];
        $_SESSION['user_role'] = $row['user_role'];

        // Redirect to landing page
        header("Location: ../index.php");
        exit();
    } else {
        echo "Invalid email or password.";
    }
} else {
    echo "Invalid email or password.";
}
?>
