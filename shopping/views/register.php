<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/register.js"></script>
    <style>
        /* Full-screen blue background */
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #007BFF; /* solid blue background */
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

        /* Error/validation messages */
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
        <h2>Customer Registration</h2>
        <form id="registerForm" action="../actions/register_customer_action.php" method="POST">
            <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type="text" id="country" name="country" placeholder="Country" required>
            <input type="text" id="city" name="city" placeholder="City" required>
            <input type="text" id="contact" name="contact" placeholder="Contact Number" required>
            <button type="submit">Register</button>
        </form>
        <p id="message"></p>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>
