<?php

require_once "../classes/customer_class.php";

class CustomerController {

    private $customerClass;

    public function __construct() {
        $this->customerClass = new CustomerClass(); 
    }

    /**
     * Login a customer
     * @param string $email
     * @param string $password
     * @return array ['success' => bool, 'data' => array|null, 'message' => string|null]
     */
    public function login_customer_ctr($email, $password) {
     
        $customer = $this->customerClass->getCustomerByEmail($email);

        if ($customer) {
            
            if (password_verify($password, $customer['customer_pass'])) {
                return ['success' => true, 'data' => $customer];
            } else {
                return ['success' => false, 'message' => 'Incorrect password'];
            }
        } else {
            return ['success' => false, 'message' => 'Email not found'];
        }
    }

    //TODO: Add a register_customer_ctr

