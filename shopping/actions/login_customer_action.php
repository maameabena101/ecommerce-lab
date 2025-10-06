<?php
// Start session
session_start();

// ... your code to validate email/password ...

if ($login_successful) {
    // Set session variables
    $_SESSION['user_id'] = $row['customer_id'];
    $_SESSION['user_name'] = $row['customer_name'];
    $_SESSION['user_role'] = $row['user_role'];

    // Redirect to index.php
    header("Location: ../index.php");
    exit();
} else {
    echo "Invalid email or password.";
}
?>
