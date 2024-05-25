<?php
include 'db.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'phpmailers/src/Exception.php';
require 'phpmailers/src/PHPMailer.php';
require 'phpmailers/src/SMTP.php';
$email = $_POST['email'];
if(empty($email)){
    header("Location: forgetpassword.php?error=Email is required");
    exit();
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: forgetpassword.php?error=Invalid email format");
    exit();
}
$mail = new PHPMailer();
$pincode=rand(10000000,99999999);
$expiry=date('Y-m-d H:i:s', strtotime('+1 hour'));
$stmt = $conn->prepare("UPDATE users SET pincode = ?, expiry = ? WHERE email = ?");
$stmt->bind_param("sss", $pincode, $expiry, $email);
 // Execute the statement
 if ($stmt->execute()) {
    $mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();                              //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;             //Enable SMTP authentication
    $mail->Username   = 'pharmasicopharmacy@gmail.com';   //SMTP write your email
    $mail->Password   = 'pfmppriwhnnzxbzf';      //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('pharmasicopharmacy@gmail.com'); // Sender Email and name
    $mail->addAddress($email);     //Add a recipient email  
    

    //Content
    $mail->isHTML(true);               //Set email format to HTML
    $mail->Subject = 'Password Reset';    // email subject headings
    $mail->Body = " Password Reset Dear User, We have received a request to reset your account password. Please use the following pincode to reset your password: $pincode This pincode is valid for the next hour. If you did not request this password reset, please ignore this email. Thank you, Pharmasico Pharmacy";
    

    

    // Success sent message alert
    $mail->send();
    echo
    " 
    <script> 
     alert('Message was sent successfully!');
     window.location.href='cart.php';
    </script>
    }";
   
 } else {
        
        header("Location: forgetpassword.php?error=Email not found");
        exit();
 }



