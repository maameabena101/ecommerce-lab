<?php require_once 'settings/core.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Shopping Platform</title>
    <link rel="stylesheet" type = "text/css" href="css/style.css">
</head>
<body>
<div class="menu">
    <?php if (isUserLoggedIn()): ?>
        <span>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</span>
        <a href="actions/logout.php">Logout</a>

        <?php if (isAdmin()): ?>
            <a href="admin/category.php">Category</a>
        <?php endif; ?>

    <?php else: ?>
        <a href="login/register.php">Register</a> |
        <a href="login/login.php">Login</a>
    <?php endif; ?>
</div>

<h1>Welcome to the Shopping Platform</h1>

<?php if (isUserLoggedIn()): ?>
    <p>You are logged in as <?php echo htmlspecialchars($_SESSION['user_name']); ?>.</p>
<?php else: ?>
    <p>Please log in to access your account.</p>
<?php endif; ?>
</body>
</html>
