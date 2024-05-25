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
                <form action="logout.php" method="post">
                <button type="submit" name="logout" class="logout-btn">Log out</button>
                </form>
            </div>
        </div>
    </header>
    <br><br><br><br><br><br>
    <h1 style="text-align: center;">Oral Care</h1>
    <div class="search-box">
        <input type="text" placeholder="Search...">
        <button><i class="bx bx-search"></i></button>
    </div>
    <div class="menu-dropdown">
        <button class="dropbtn">Categories</button>
        <div class="menu-content">
            <a href="drugs.php">Drags</a>
            <a href="skincare.php">Skin Care</a>
            <a href="baby.php">Baby Care</a>
            <a href="haircare.php">Hair Care</a>
        </div>
    </div>
    <div class="all">
        <section id="medical">
            <div class="products">
                <div class="row" onclick="showDescription(this)">
                    <img src="120916_459576.jpg" alt="">
                    <div class="description">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    
                <div class="price">
                    <h4>ORAL-B GUM&ENAMEL CARE 40X-SOFT(1+1) 20%</h4>
                    <p>EGP260.00</p>
                </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="120841_124999.jpg" alt="">
                    <div class="description">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                
                <div class="price">
                    <h4>Rafada Melatonin 5MG Oral Film 20/Pcs</h4>
                    <p>EGP89.00</p>
                </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="072345_458756.jpg" alt="">
                    <div class="description">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    
                <div class="price">
                    <h4>Oral-B Ultrathin Sensitive Black 3Pieces-25%Discount</h4>
                    <p>EGP189.00</p>
                </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="093052_413157.jpg" alt="">
                    <div class="description">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    
                <div class="price">
                    <h4>Sensodyne Toothpaste Rapid Action 75Ml</h4>
                    <p>EGP89.00</p>
                </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="091055_452043.jpg" alt="">
                    <div class="description">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                
                <div class="price">
                    <h4>Listerine Mouth Wash Teeth & Gum Defence 250Ml</h4>
                    <p>EGP112.00</p>
                </div>
                </div>
                
                </div>
                </div>
            </div>
        </section>
    </div>

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
