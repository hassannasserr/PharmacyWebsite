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
    padding: 20px;
}

.mission,
.values,
.team {
    background-color: #f9f9f9;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
}

.mission h2,
.values h2,
.team h2 {
    color: #167475;
    margin-bottom: 10px;
}

.values ul {
    list-style: none;
}

.values li {
    margin-bottom: 5px;
}

.team p {
    margin: 0;
}

    </style>
    <title>Phrmasico</title>
</head>
<body>
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
                <p>Username :Hassan Nasser Mohamed</p>
                <p>Email :Elkashefhassan1@gmail.com</p>
                <a href="login.php" class="btn">login</a>
                <a href="signup.php" class="btn">signup</a>
                <form action="logout.php" method="post">
                <button type="submit" name="logout" class="logout-btn">Log out</button>
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
            <section class="mission">
                <h2>Our Mission</h2>
                <p>Availability of all medications and rapid delivery to any place</p>
            </section>
            <section class="values">
                <h2>Our Values</h2>
                <ul>
                    <li>Customer Satisfaction</li>
                    <li>Quality Products</li>
                    <li>Integrity</li>
                    <li>Continuous Improvement</li>
                    <li>Community Engagement</li>
                </ul>
            </section>
            <section class="team">
                <h2>Our Team</h2>
                <p>Our team consists of experienced pharmacists, knowledgeable staff, and dedicated healthcare professionals. Together, we work tirelessly to ensure that our customers receive the best possible care and service.</p>
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