<?php
// Start the PHP session
session_start();

// Destroy the session and unset all session variables
session_destroy();
$_SESSION = array();

// Redirect to a login page or home page
header('Location: index.php'); // Replace 'login.php' with the appropriate page
exit;
?>