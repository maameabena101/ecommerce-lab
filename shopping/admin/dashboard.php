<?php
session_start();

if (!isset($_SESSION['customer_name'])) {
    header("Location: ../login/login.php");
    exit();
}
?>

<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header("Location: ../login/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f9ff;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #007BFF;
            padding: 15px 30px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            margin: 0;
            font-size: 22px;
        }

        .navbar a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .container {
            text-align: center;
            margin-top: 80px;
        }

        h1 {
            color: #003366;
        }

        .menu {
            margin-top: 40px;
        }

        .menu a {
            background-color: #007BFF;
            color: white;
            padding: 10px 25px;
            margin: 10px;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }

        .menu a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['customer_name']); ?>!</h2>
        <div>
            <a href="index.php">Home</a>
            <a href="actions/logout.php">Logout</a>
        </div>
    </div>

    <div class="container">
        <h1>Your Dashboard</h1>
        <p>Explore the shopping platform and manage your account below:</p>

        <div class="menu">
            <a href="shop.php"> Shop Now</a>
            <a href="cart.php"> View Cart</a>
            <a href="profile.php"> Profile</a>
        </div>
    </div>

</body>
</html>
