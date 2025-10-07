<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Platform</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Optional -->
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .menu {
            margin-bottom: 30px;
        }
        .menu a {
            margin-right: 15px;
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
        .menu a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="menu">
    <?php if (!isset($_SESSION['user_id'])): ?>
        <!-- User not logged in -->
        <a href="views/register.php">Register</a>
        <a href="views/login.php">Login</a>
    <?php else: ?>
        <!-- User logged in -->
        <span>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</span>
        <a href="actions/logout.php">Logout</a>
    <?php endif; ?>
</div>

<h1>Welcome to the Shopping Platform</h1>

<?php if (!isset($_SESSION['user_id'])): ?>
    <p>Please log in or register to start shopping.</p>
<?php else: ?>
    <p>You are logged in as <?php echo htmlspecialchars($_SESSION['user_name']); ?>.</p>
<?php endif; ?>

</body>
</html>
