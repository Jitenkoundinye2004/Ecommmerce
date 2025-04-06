<?php
session_start(); // Start the session
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session
header("Location: main.php"); // Redirect to login page
exit(); // Ensure no further code is executed
?>