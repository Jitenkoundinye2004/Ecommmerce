<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'tst');
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
} else {
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO registration (name, email, phone, dob, gender, address, pincode, password, cpassword) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Error during preparation: " . $conn->error);
    }
    $stmt->bind_param("ssisssiss", $name, $email, $phone, $dob, $gender, $address, $pincode, $password, $cpassword);

    // Execute
    $execval = $stmt->execute();
    if ($execval === FALSE) {
        die("Error during execution: " . $stmt->error);
    }

    echo "Registration successful...";
    $stmt->close();
    $conn->close();
}
?>
