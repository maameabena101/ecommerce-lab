<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome to the Shopping Platform</h1>

    <?php if(isset($_SESSION['user_name'])): ?>
        <p>Hello, <?= htmlspecialchars($_SESSION['user_name']); ?>!</p>
        <a href="actions/logout.php">Logout</a>
    <?php else: ?>
        <p>You are not logged in.</p>
        <a href="views/register.php">Register</a> |
        <a href="views/login.php">Login</a>
    <?php endif; ?>
</body>
</html>
