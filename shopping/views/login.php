<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Link your shared CSS (optional) -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Link your JS for login validation -->
    <script src="../js/login.js"></script>
    <style>
        /* Full-screen blue background */
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #007BFF; /* solid blue */
            font-family: Arial, sans-serif;
        }

        /* Transparent form container */
        .form-container {
            background-color: rgba(173, 216, 230, 0.8); /* baby blue with transparency */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            width: 350px;
            text-align: center;
        }

        /* Form title */
        .form-container h2 {
            margin-bottom: 25px;
            color: #003366; /* dark blue */
        }

        /* Inputs style */
        .form-container input {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Button style */
        .form-container button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #0056b3; /* darker blue button */
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: #003d80;
        }

        /* Message styling */
        #message {
            color: red;
            margin-top: 10px;
        }

        /* Link style */
        .form-container a {
            color: #003366;
            text-decoration: none;
        }

        .form-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form id="loginForm" method="POST" action="../actions/login_customer_action.php">
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p id="message"></p>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</body>
</html>
