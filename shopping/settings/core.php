<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


function isUserLoggedIn() {
    return isset($_SESSION['user_id']);
}


function isAdmin() {
    return (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 1);
}
?>
