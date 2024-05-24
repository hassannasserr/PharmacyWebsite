<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Phrmasico</title>
    <style>
        .cart-list img {
    width: 50px; /* Adjusted width */
    height: auto; /* Adjusted height to maintain aspect ratio */
    display: block; /* Ensures proper spacing */
    margin: 0 auto; /* Centers the images horizontally */
    justify-content: space-between;
}
/* Add your custom CSS styles here */

/* Set font family and default styles */
/* Add your custom CSS styles here */

/* Set font family and default styles */
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
}

/* Header styles */


.flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar a {
    margin: 0 10px;
    text-decoration: none;
    color: #000;
    text-transform: capitalize;
}

.icons i {
    font-size: 1.5rem;
    margin-left: 10px;
}


.cart {
    text-align: center;
    padding: 40px 0;
}

.cart h1 {
    margin-bottom: 20px;
    color: #167475;
}

.cart-list {
    margin-top: 20px;
}

.cart-list table {
    width: 100%;
    border-collapse: collapse;
}

.cart-list th,
.cart-list td {
    border: 1px solid #ddd;
    padding: 10px;
}

.cart-list th {
    background-color: #f0f0f0;
}

.cart-list img {
    width: 80px;
    height: auto;
    display: block;
    margin: 0 auto;
}

.cart-list .btn {
    background-color: #167475;
    color: #fff;
    border: none;
    padding: 8px 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.cart-list .btn:hover {
    background-color: #125a5a;
}

/* Footer styles */
.footer {
    background-color: #f0f0f0;
    padding: 40px 0;
    text-align: center;
}

.about-us {
    max-width: 600px;
    margin: 0 auto;
}

.about-us h2 {
    color: #167475;
    margin-bottom: 20px;
}

.about-us p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 10px;
}

/* Form styles */
.make-order {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.make-order h1 {
    color: #167475;
    margin-bottom: 20px;
}

.input-field {
    margin-bottom: 20px;
}

.input-field i {
    margin-right: 10px;
    color: #ccc;
}

.input-field input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.btn1 {
    background-color: #167475;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    
}

.btn1:hover {
    background-color: #125a5a;
}
.make-order .input-field input[type="checkbox"] {
    display: none; /* Hide the default checkbox */
}

.make-order .input-field label {
    position: relative;
    padding-left: 30px; /* Adjust spacing */
    cursor: pointer;
}

.make-order .input-field label:before {
    content: "";
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 20px; /* Adjust the checkbox size */
    height: 20px; /* Adjust the checkbox size */
    border: 1px solid #aaa;
    border-radius: 3px;
    background-color: #fff;
}

.make-order .input-field input[type="checkbox"]:checked + label:before {
    background-color: #167475; /* Change the background color when checked */
}

.make-order .input-field input[type="checkbox"]:checked + label:after {
    content: "\2713"; /* Unicode checkmark symbol */
    font-size: 14px;
    color: #fff;
    position: absolute;
    left: 4px;
    top: 3px;
}

.make-order .input-field label {
    color: #666;
}

.make-order .input-field label:hover {
    color: #333;
}


    </style>
</head>
<body>
<?php
        session_start(); // Start the session       // Your existing code
    ?>
    <header class="header">
        <div class="flex">
            <h1 class="logoany">Phrmasico</h1>
            <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="products.php">Products</a>
            <a href="order.php">orders</a>
            <a href="about.php">About us</a>
            <a href="contact.php">Contact us</a>
            </nav>
            <div class="icons">
                <i class="bx bxs-user" id="user-btn"></i>
                <a href="wishlist.php" class="card-btn"><i class="bx bx-heart"></i><sub>0</sub></a>
                <a href="cart.php" class="card-btn"><i class="bx bx-cart-download"></i><sub>0</sub></a>
                <i class="bx bx-list-plus" id="menu-btn" style="font-size: 2rem;"></i>
            </div>
            <div class="user-box">
            <p>Username: <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?></p>              
            <p>Email:  <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'Guest'; ?></p>
                <a href="login.php" class="btn">login</a>
                <a href="signup.php" class="btn">signup</a>
                <form action="">
                    <button type="submit" name="logout" class="logout-btn">log out</button>
                </form>
            </div>
        </div>
        </header>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <section class="cart" id="crt">
            <h1 >Shopping Cart</h1>
            <div class="cart-list">
                <table>
                    <head>
                        <tr>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </head>
                    <body>
                        

                    </body>
                </table>
            </div>
        </section>
        <section class="Order" id="od">
            <div class="make-order">
                <form action="cart.inc.php" method="post">
                    <h1>Make Order</h1>
                    <div class="input-field">
                        <i class="bx bxs-user"></i>
                        <input type="text" name="fname" placeholder="Full Name">
                    </div>
                    <div class="input-field">
                        <i class="bx bx-mail-send"></i>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="bx bxs-phone"></i>
                        <input type="tel" name="phone" placeholder="Phone">
                    </div>
                    <div class="input-field">
                        <i class="bx bxs-home"></i>
                        <input type="text" name="address" placeholder="Address">
                    </div>
                    <div class="input-field">
                        <i class="bx bxs-credit-card"></i>
                        <input type="text" name="ccard" placeholder="Credit Card">
                    </div>
                    <div class="input-field">
                        <input type="checkbox" id="remember-me">
                        <label for="remember-me">Remember Me</label>
                    </div>
                    <button type="submit" class="btn1">Order</button>

                </form>
        <script>
    var tbody = document.querySelector('tbody');
    if (tbody.children.length > 0) {
    console.log('There are items in the table body.');
    } else {
    console.log('There are no items in the table body.');
    }
    </script>


            </div>
        </section>
        <footer class="footer" id="footer">
            <div class="container">
                <div class="about-us">
                    <p>&copy; 2024 Phrmasico. All rights reserved</p>
                </div>
            </div>
        </footer>
        <script src="scrypt.js"></script>
</body>
</html>