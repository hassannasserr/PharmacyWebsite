
<?php
include 'db.php';
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'phpmailers/src/Exception.php';
require 'phpmailers/src/PHPMailer.php';
require 'phpmailers/src/SMTP.php';

$total = 0;
$check1=0;
$check2=0;
$check3=0;
$name = $_POST['fname'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$card = $_POST['ccard'];
$product1name = $_POST['product1name'];
$product1q = $_POST['product1q'];
$product2name = $_POST['product2name'];
$product2q = $_POST['product2q'];
$product3name = $_POST['product3name'];
$product3q = $_POST['product3q'];
$n=$_SESSION['username'];
if(empty($product1name) and empty($product2name) and empty($product3name)){
    header("Location: cart.php?error=Product name is required");
}
if(empty($n)){
    header("Location: cart.php?error=You must login first");
}
if(empty($name)){
    header("Location: cart.php?error=Full Name is required");
}
if(empty($address)){
    header("Location: cart.php?error=Address is required");
   
}
if(empty($email)){
    header("Location: cart.php?error=Email is required");
    
}
if(empty($phone)){
    header("Location: cart.php?error=Phone is required");
    
}
if(empty($card)){
    header("Location: cart.php?error=Card is empty");  
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: cart.php?error=Invalid email format");    
}
$mail = new PHPMailer();

if(!empty($product1name) and !empty($product1q) and is_numeric($product1q)){

    $stmt = $conn->prepare("SELECT quantity FROM products WHERE Name = ?");
    $stmt->bind_param("s", $product1name);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        if ($product1q > $row['quantity']) {
            header("Location: cart.php?error=Requested quantity is more than available stock");  
        } else {
            // i want to alter the quantity of the product in the database
            $stmt = $conn->prepare("UPDATE products SET quantity = quantity - ? WHERE Name = ?");
            $stmt->bind_param("is", $product1q, $product1name);
            $stmt->execute();
            // get the price of the product
            $stmt = $conn->prepare("SELECT price FROM products WHERE Name = ?");
            $stmt->bind_param("s", $product1name);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($row = $result->fetch_assoc()) {
                $total += $product1q * $row['price'];
            }
            $check1=1;
        }
    } else {
        // Product does not exist
        header("Location: cart.php?error=Product does not exist");  
    }
}

if(!empty($product2name) and !empty($product2q) and is_numeric($product2q)){
    $stmt = $conn->prepare("SELECT quantity FROM products WHERE Name = ?");
    $stmt->bind_param("s", $product2name);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    if ($row) {
        if ($product2q > $row['quantity']) {
            // Quantity requested is more than quantity in database
            header("Location: cart.php?error=Requested quantity is more than available stock");  
        } else {
            $stmt = $conn->prepare("UPDATE products SET quantity = quantity - ? WHERE Name = ?");
            $stmt->bind_param("is", $product2q, $product2name);
            $stmt->execute();
            // get the price of the product
            $stmt = $conn->prepare("SELECT price FROM products WHERE Name = ?");
            $stmt->bind_param("s", $product2name);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($row = $result->fetch_assoc()) {
                $total += $product2q * $row['price'];
            }
            $check2=1;
        }
    } else {
        // Product does not exist
        header("Location: cart.php?error=Product does not exist");  

    }
}
if(!empty($product3name) and !empty($product3q) and is_numeric($product3q)){
    $stmt = $conn->prepare("SELECT quantity FROM products WHERE Name = ?");
    $stmt->bind_param("s", $product3name);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    if ($row) {
        if ($product3q > $row['quantity']) {
            // Quantity requested is more than quantity in database
            header("Location: cart.php?error=Requested quantity is more than available stock");  
        } else {
            $stmt = $conn->prepare("UPDATE products SET quantity = quantity - ? WHERE Name = ?");
            $stmt->bind_param("is", $product3q, $product3name);
            $stmt->execute();
            // get the price of the product
            $stmt = $conn->prepare("SELECT price FROM products WHERE Name = ?");
            $stmt->bind_param("s", $product3name);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($row = $result->fetch_assoc()) {
                $total += $product3q * $row['price'];
            }
            $check3=1; 
        }
    } else {
        header("Location: cart.php?error=Product does not exist");  
    }
}

    // ... existing code ...

    // Send email
    if ($check1==1 or $check2==1 or $check3==1){
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
    $mail->Subject = 'Order Confirmation';    // email subject headings
    $mail->Body = "
    <h1>Dear $name,</h1>
    <p>We are delighted to confirm that we have received your order. Thank you for choosing Pharmasico for your healthcare needs.</p>
    <p>Your total price is: $total</p>
    <p>We are now processing your order and will dispatch it as soon as possible. You can expect to receive your order within 14 days from the date of your request.</p>
    <p>We appreciate your trust in Pharmasico and look forward to serving you again. If you have any questions or need further assistance, please do not hesitate to contact us.</p>
    <p>Thank you once again for choosing Pharmasico.</p>
    <p>Best Regards,</p>
    <p>The Pharmasico Team</p>
    ";

    $mail->AltBody = "Order Confirmation: Thank you for your order! Your total price is: $total. Your order will arrive within 14 days from the date of your request.";

    // Success sent message alert
    $mail->send();
    echo
    " 
    <script> 
     alert('Order has placed successfully!');
     window.location.href='cart.php';
    </script>
    }";
    }
    else{
        header("Location: cart.php?error=Order not placed successfully");
    }
    