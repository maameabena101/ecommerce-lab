<?php
// Start session
session_start();

// Database connection
$host = 'localhost';
$user = 'root'; // change if you have a password
$pass = '';     // change if you have a password
$db_name = 'shoppn'; // your database name

$conn = new mysqli($host, $user, $pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
