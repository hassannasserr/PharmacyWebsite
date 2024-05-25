<?php
include 'db.php';
session_start();
$pincode = $_POST['pincode'];
$email = $_SESSION['email'];
if(empty($pincode)){
    header("Location: verifypin.php?error=Pincode is required");
    exit();
}

$stmt = $conn->prepare("SELECT pincode FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();


$result = $stmt->get_result();
$row = $result->fetch_assoc();
if ($row['pincode'] == $pincode) {
    // Pincode is correct
    header("Location: resetpassword.php");
} else {
    // Pincode is incorrect
    header("Location: verifypin.php?error=Incorrect pincode");
}

?>
