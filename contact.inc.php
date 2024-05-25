<?php
include 'db.php';
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
if(empty($name) || empty($email) || empty($message)){
    header("Location: contact.php?error=emptyfields");
    exit();
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: contact.php?error=invalidemail");
    exit();
}

else{
    $sql="INSERT INTO messages (Name,Email,msg) VALUES ('$name','$email','$message')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo
        " 
        <script> 
         alert('Message Sent successfully!');
         window.location.href='contact.php';
        </script>
        }";
        exit();
    }
    else{
        header("Location: contact.php?error=sqlerror");
        exit();
    }
   
}
