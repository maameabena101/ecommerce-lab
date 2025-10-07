<?php
// Include database connection
include("../settings/db_connection.php");

require_once '../settings/core.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $country = trim($_POST['country']);
    $city = trim($_POST['city']);
    $contact = trim($_POST['contact']);

    // Encrypt the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Default fields
    $image = NULL;
    $user_role = 2; // 1 = admin, 2 = customer

    // Prepare insert query
    $sql = "INSERT INTO customer 
            (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, customer_image, user_role)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssssssi", $fullname, $email, $hashed_password, $country, $city, $contact, $image, $user_role);

        if ($stmt->execute()) {
            echo "<script>alert('Registration successful! Redirecting to login...'); window.location.href='../views/login.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing query: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>
