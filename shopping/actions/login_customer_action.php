<?php
include('../settings/db_connection.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Check for empty fields
    if (empty($email) || empty($password)) {
        echo "<script>alert('Please fill in all fields'); window.location.href='../views/login.php';</script>";
        exit();
    }
    //TODO: Call the relevant controller function

    // Prepare query
    $stmt = $conn->prepare("SELECT * FROM customer WHERE customer_email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['customer_pass'])) {
            // Save session details
            $_SESSION['user_id'] = $user['customer_id'];
            $_SESSION['user_name'] = $user['customer_name'];
            $_SESSION['user_role'] = $user['user_role']; // 1 = Admin, 2 = Customer

            // Redirect based on role

            //ideally return a message that the AJAX script will read to determine the next action
            if ($user['user_role'] == 1) {
               header("Location: ../admin/dashboard.php");  // ✅ Admin dashboard path
                echo "success";
            } else {
                header("Location: ../admin/dashboard.php");  // ✅ Customer dashboard (same page for now)
                //echo response
            }
            exit();
        } else {
            echo "<script>alert('Invalid password'); window.location.href='../login/login.php';</script>";
        }
    } else {
        echo "<script>alert('No account found with that email'); window.location.href='../views/login.php';</script>";
    }

    $stmt->close();
}
$conn->close();
?>

// header("Content-Type: application/json")
// echo json_encode(["success"=>false, "message"=>"No account found with that mail"])