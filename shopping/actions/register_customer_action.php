<?php

include("../settings/db_connection.php");

require_once '../settings/core.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $country = trim($_POST['country']);
    $city = trim($_POST['city']);
    $contact = trim($_POST['contact']);

   
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    //TODO: Csll the relevant controller function

    $image = NULL;
    $user_role = 2; 

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
