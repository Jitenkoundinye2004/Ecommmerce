<?php
session_start(); // Start the session

include 'db.php'; 
// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Include PHPMailer classes
require_once 'PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer-master/src/SMTP.php';
require_once 'PHPMailer-master/src/Exception.php'; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check if user already exists
$result = $conn->query("SELECT * FROM users WHERE email='$email'");
if ($result->num_rows > 0) {
    die("Error: Email is already registered.");
}

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

// Insert user into the database
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $hashedPassword);

if ($stmt->execute()) {
    $_SESSION['username'] = $username; // Store username in session
    //sendMail($email, $username); // Call the sendMail function
    header("Location: login.php"); // Redirect to login.php
    exit(); // Stop script execution
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>