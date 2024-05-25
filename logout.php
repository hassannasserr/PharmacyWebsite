<?php
session_start(); // Start the session

// Check if the logout button is clicked
if (isset($_POST['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the home page or login page
    header("Location: login.php");
    exit();
}
?>