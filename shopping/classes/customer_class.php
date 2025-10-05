<?php
require_once("../db_connection.php");

class Customer {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function addCustomer($fullname, $email, $password, $country, $city, $contact, $role = 2) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO customers (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, user_role)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssssi", $fullname, $email, $hashed_password, $country, $city, $contact, $role);
        return $stmt->execute();
    }
}
?>
