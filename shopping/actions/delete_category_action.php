<?php
session_start();
include_once __DIR__ . '/../settings/core.php';
include_once __DIR__ . '/../controllers/category_controller.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? 0;

    $controller = new CategoryController($conn);

    if ($controller->deleteCategory($id)) {
        echo json_encode(['status' => 'success', 'message' => 'Category deleted successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to delete category']);
    }
}
?>
