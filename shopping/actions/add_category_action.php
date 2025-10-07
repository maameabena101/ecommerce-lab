<?php
session_start();
include_once __DIR__ . '/../settings/core.php';
include_once __DIR__ . '/../controllers/category_controller.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $user_id = $_SESSION['user_id'] ?? 0;

    $controller = new CategoryController($conn);

    if ($controller->addCategory($name, $user_id)) {
        echo json_encode(['status' => 'success', 'message' => 'Category added successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to add category']);
    }
}
?>
