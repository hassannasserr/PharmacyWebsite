<?php
include 'db.php';
$fname=$_POST['fname'];
$uname=$_POST['uname'];
$email=$_POST['Email'];
$pass=$_POST['pwd'];
if(empty($fname)){
    header("Location: signup.php?error=Full Name is required");
    exit();
}
if(empty($uname)){
    header("Location: signup.php?error=User Name is required");
    exit();
}
if(empty($email)){
    header("Location: signup.php?error=Email is required");
    exit();
}
if(empty($pass)){
    header("Location: signup.php?error=Password is required");
    exit();
}
$sql = "SELECT * FROM users WHERE UserName='$uname'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    header("Location: signup.php?error=Username already exists");
    exit();
}

$sql = "INSERT INTO users (`Full Name`, UserName, Email, Password)
VALUES ('$fname', '$uname', '$email', '$pass')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();





