<?php
include 'db.php';
session_start();
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];
if(empty($pwd)){
    header("Location: resetpassword.php?error=Password is required");
    exit();
}
if(empty($cpwd)){
    header("Location: resetpassword.php?error=Confirm Password is required");
    exit();
}

if(strlen($pwd)<8){
    header("Location: resetpassword.php?error=Password must be at least 8 characters long");
    exit();
}

if($pwd !== $cpwd){
    header("Location: resetpassword.php?error=The confirmation password  does not match");
    exit();
}
$email = $_SESSION['email'];
$stmt = $conn->prepare("UPDATE users SET password = ?, pincode = NULL WHERE Email = ?");
$stmt->bind_param("ss", $pwd, $email);
if ($stmt->execute()) {

   echo
    " 
    <script> 
     alert('Password Changed successfully!');
     window.location.href='login.php';
    </script>
    }";
} else {
    header("Location: resetpassword.php?error=Unknown error occurred&email=$email");
}

