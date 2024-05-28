<?php
include 'db.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'phpmailers/src/Exception.php';
require 'phpmailers/src/PHPMailer.php';
require 'phpmailers/src/SMTP.php';
session_start();
$email = $_POST['email'];
$_SESSION['email'] = $email;

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
$stmt = $conn->prepare("UPDATE users SET pincode = ? WHERE email = ?");
$stmt->bind_param("ss", $pincode, $email);

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
    $mail->Body = "
    <html>
    <head>
        <title>Password Reset Request</title>
    </head>
    <body>
        <h1>Password Reset Request</h1>
        <p>Dear User,</p>
        <p>We have received a request to reset the password for your account. If you made this request, please use the following pin code to reset your password:</p>
        <p><strong>$pincode</strong></p>
        <p>Please note that this pin code is valid for the next hour.</p>
        <p>If you did not request this password reset, please ignore this email and your password will remain unchanged.</p>
        <p>Thank you for your attention to this matter.</p>
        <p>Best regards,</p>
        <p>Pharmasico Pharmacy</p>
    </body>
    </html>";
       

    

    // Success sent message alert
    $mail->send();
    echo
    " 
    <script> 
     alert('Message was sent successfully!');
     window.location.href='verifypin.php';
    </script>
    }";
   
 } else {
        
        header("Location: forgetpassword.php?error=Email not found");
        exit();
 }




