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
    <h1 style="text-align: center;">Drugs</h1>
   
    <div class="menu-dropdown">
        <button class="dropbtn">Categories</button>
        <div class="menu-content">
            <a href="oralcare.php">Oral Care</a>
            <a href="skincare.php">Skin Care</a>
            <a href="baby.php">Baby Care</a>
            <a href="haircare.php">Hair Care</a>
        </div>
    </div>
    <div class="all">
        <section id="medical">
            <div class="products">
                <div class="row" onclick="showDescription(this)">
                    <img src="184147_123455.jpg" alt="">
                    <div class="description" style="display: none;">
                        <p>Johnson Baby Oil Sleep Time helps your baby fall asleep faster and for longer. It nourishes and moisturises your baby's skin as well.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Sediproct Cream 20Gm</h4>
                        <p>EGP27.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="155439_102056.jpg" alt="">
                    <div class="description" style="display: none;">
                        <p>Description: Visceralgine Tablet is a medication used to treat visceral spasms and other conditions.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Visceralgine Syrup 120Ml</h4>
                        <p>EGP19.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="141930_102880.jpg" alt="">
                    <div class="description" style="display: none;">
                        <p>Suppository for adults used as a quick remedy to get rid of constipation.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Glycerin Adult (Gsk) 10 Suppositories</h4>
                        <p>EGP12.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="085600_123336.jpg" alt="">
                    <div class="description" style="display: none;">
                        <p>Description: Drop containing Poly Frisch on a specific part of the material sodium hyaluronate extreme purity.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Polyfresh 0.2% Eye Drops 20 Unidoses</h4>
                        <p>EGP75.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="151850_121924.jpg" alt="">
                    <div class="description" style="display: none;">
                        <p>Fortified with minerals and vitamins that helps support normal growth and development.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Panadol Joint 24/Tab</h4>
                        <p>EGP55.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="drag.jpg" alt="">
                    <div class="description" style="display: none;">
                        <p>Sinozim 20 tablet.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Sinozim 20 tablet</h4>
                        <p>EGP55.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="dd.jpg" alt="">
                    <div class="description" style="display: none;">
                        <p>Sinozim 20 tablet.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Sinozim 20 tablet</h4>
                        <p>EGP55.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="1-2-3-Extra-60-Mg-20--Tablet-Wed-May-22-2024-16-05-19-GMT-0200--Eastern-European-Standard-Time-.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>1 2 3 Extra 60 Mg 20 Tablet
                        </h4>
                        <p>EGP55.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="162106_123281.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Joint plus 20 tablet</h4>
                        <p>EGP55.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="jnj.jpg" alt="">
                    <div class="description" style="display: none;">
                        <p>Sinozim 20 tablet.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Sinozim 20 tablet</h4>
                        <p>EGP55.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="822c7f23-d47d-4132-b005-58865434db88.png" alt="">
                    <div class="description" style="display: none;">
                        <p>Anti-oxidant indicated in Diabetic Neuropathy Symptoms Specially Numbness, Tingling And Loss Of Sensation. Once Daily</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Octatron - 20 Capsules
                        </h4>
                        <p>EGP50.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="1af9ab52-53f1-414b-9dca-7ef4a673562b.jpeg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Clomid 50 mg - 20 Tablets
                        </h4>
                        <p>EGP43.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="cc.png" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Genuphil Woman 10 Sachets</h4>
                        <p>EGP280.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="Aa.jpg" alt="">
                    <div class="description" style="display: none;">
                        <p>Abstral 100 mcg 10 Sublingual Tablets</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Abstral 100 mcg 10 Sublingual Tablets</h4>
                        <p>EGP100.00</p>
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
