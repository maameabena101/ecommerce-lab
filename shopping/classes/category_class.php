<?php

require_once '../settings/core.php';

class Category {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

   
    public function getCategories($user_id) {
        $stmt = $this->conn->prepare("SELECT * FROM category WHERE user_id = ?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        return $stmt->get_result();
    }

 
    public function addCategory($name, $user_id) {
        $stmt = $this->conn->prepare("INSERT INTO category (name, user_id) VALUES (?, ?)");
        $stmt->bind_param("si", $name, $user_id);
        return $stmt->execute();
    }

    
    public function updateCategory($id, $name) {
        $stmt = $this->conn->prepare("UPDATE category SET name = ? WHERE id = ?");
        $stmt->bind_param("si", $name, $id);
        return $stmt->execute();
    }

    
    public function deleteCategory($id) {
        $stmt = $this->conn->prepare("DELETE FROM category WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
