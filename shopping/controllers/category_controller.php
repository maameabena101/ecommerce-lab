<?php
include_once __DIR__ . '/../classes/category_class.php';

require_once '../settings/core.php';

class CategoryController {
    private $category;

    public function __construct($db) {
        $this->category = new Category($db);
    }

    public function fetchCategories($user_id) {
        return $this->category->getCategories($user_id);
    }

    public function addCategory($name, $user_id) {
        return $this->category->addCategory($name, $user_id);
    }

    public function updateCategory($id, $name) {
        return $this->category->updateCategory($id, $name);
    }

    public function deleteCategory($id) {
        return $this->category->deleteCategory($id);
    }
}
?>
