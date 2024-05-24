<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
        <!-----------------------------------------------------------section1------------------------------------------------------------------------------->
        <section id="click">
            <h1 style="text-align: center;">Our categories</h1>
                <div class="categories-container">
                    <div class="category-box" onclick="location.href='Drugs.php#medical'">
                        <img src="647237.png" alt="Medications">
                        <p>Drugs</p>
                    </div>
                    <div class="category-box" onclick="location.href='skincare.php#skincare'">
                        <img src="1312091.png" alt="Skin Care">
                        <p>Skin Care</p>
                    </div>
                    <div class="category-box" onclick="location.href='baby.php#baby'">
                        <img src="822123.png" alt="Mom & Baby">
                        <p>Baby Care</p>
                    </div>
                    <div class="category-box" onclick="location.href='haircare.php#hair'">
                        <img src="13660563.png" alt="Hair Care">
                        <p>Hair Care</p>
                    </div>
                    <div class="category-box" onclick="location.href='oralcare.php#oral'">
                        <img src="5802148.png" alt="Oral Care">
                        <p>Oral Care</p>
                    </div>
                </div>
            </section>
        <footer class="footer" id="footer">
            <div class="container">
                <div class="about-us">
                    <p>&copy; 2024 Phrmasico. All rights reserved</p>
                </div>
            </div>
        </footer>
    <script src="scrypt.js"></script><!--20-->

</body>
</html>