<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
    <script src="../js/register.js"></script>
  </head>
  <body>
    <h2>Customer Registration</h2>

    <form id="registerForm" method="POST" action="../actions/register_customer_action.php">
      <label>Full Name:</label><br>
      <input type="text" name="fullname" required><br><br>

      <label>Email:</label><br>
      <input type="email" name="email" required><br><br>

      <label>Password:</label><br>
      <input type="password" name="password" required><br><br>

      <label>Country:</label><br>
      <input type="text" name="country" required><br><br>

      <label>City:</label><br>
      <input type="text" name="city" required><br><br>

      <label>Contact Number:</label><br>
      <input type="text" name="contact" required><br><br>

      <button type="submit">Register</button>
    </form>

    <p id="message"></p>
  </body>
</html>
