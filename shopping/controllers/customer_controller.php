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
