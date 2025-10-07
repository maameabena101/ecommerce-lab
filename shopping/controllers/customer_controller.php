<?php
// Include the customer class
require_once "../classes/customer_class.php";

class CustomerController {

    private $customerClass;

    public function __construct() {
        $this->customerClass = new CustomerClass(); // Instantiate the model
    }

    /**
     * Login a customer
     * @param string $email
     * @param string $password
     * @return array ['success' => bool, 'data' => array|null, 'message' => string|null]
     */
    public function login_customer_ctr($email, $password) {
        // Get customer by email
        $customer = $this->customerClass->getCustomerByEmail($email);

        if ($customer) {
            // Check password
            if (password_verify($password, $customer['customer_pass'])) {
                return ['success' => true, 'data' => $customer];
            } else {
                return ['success' => false, 'message' => 'Incorrect password'];
            }
        } else {
            return ['success' => false, 'message' => 'Email not found'];
        }
    }

