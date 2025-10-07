<?php
session_start();
include_once __DIR__ . '/../settings/core.php';
include_once __DIR__ . '/../controllers/category_controller.php';

$controller = new CategoryController($conn);
$user_id = $_SESSION['user_id'] ?? 0;

$categories = $controller->fetchCategories($user_id);
$data = [];

while ($row = $categories->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>
