<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Main section styles */
main {
    padding: 2rem;
}

.contact-info,
.contact-form {
    background-color: #fff;
    padding: 2rem;
    margin-bottom: 2rem;
    border-radius: 10px;
    box-shadow: var(--box-shadow);
}

.contact-info h2,
.contact-form h2 {
    color: var(--maincolor);
    margin-bottom: 1rem;
}

.contact-info p {
    margin: 0;
}

.contact-form form {
    display: flex;
    flex-direction: column;
}

.contact-form label {
    margin-bottom: 0.5rem;
}

.contact-form input,
.contact-form textarea {
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.contact-form button {
    padding: 0.5rem;
    background-color: var(--maincolor);
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.contact-form button:hover {
    background-color: var(--secondcolor);
}

    </style>
    <title>Phrmasico</title>
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
        <main>
            <section class="contact-info">
                <h2>Visit Us</h2>
                <p>  <i class="bx bx-map"></i>street:13<br>City:Cairo</p>
               
            </section>
            <section class="contact-info">
                <h2>Contact Information</h2>
                <p>Phone:987432485<br>Email: info@Phrmasico.com</p>
            </section>
            <section class="contact-form">
                <h2>Send us a Message</h2>
                <form>
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </section>
        </main>
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
