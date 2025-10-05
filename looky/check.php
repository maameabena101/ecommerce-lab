<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoppn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM brands";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["brand_id"] . " - Brand: " . $row["brand_name"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>


