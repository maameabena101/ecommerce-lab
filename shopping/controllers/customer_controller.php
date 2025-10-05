<?php
require_once("../classes/customer_class.php");

function register_customer_ctr($fullname, $email, $password, $country, $city, $contact) {
    global $conn;
    $customer = new Customer($conn);
    return $customer->addCustomer($fullname, $email, $password, $country, $city, $contact);
}
?>


