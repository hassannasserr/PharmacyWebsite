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
    <h1 style="text-align: center;">Skin Care</h1>
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
                    <img src="16038875006224010148031.png.png" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>APPE Facial Wash 230 ml
                        </h4>
                        <p>EGP250.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="085657_456413.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>BOBAI SUNSCREEN 50+ EXTRA LIGHT. GEL 50G
                        </h4>
                        <p>EGP295.00</p>
                    </div>
                </div>
                 <div class="row" onclick="showDescription(this)">
                    <img src="114755_457963.jpg" alt="">
                    <div class="description">
                        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    
                <div class="price">
                    <h4>GARNIER FAST BRIGHT VIT C AMP 6X1.5ML</h4>
                    <p>EGP540.00</p>
                </div>
            </div>
            <div class="row" onclick="showDescription(this)">
                <img src="162653_454314.jpg" alt="">
                <div class="description">
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="add-to-cart">
                        <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                        <input type="number" value="1" min="1" class="quantity">
                        <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                    </div>
                </div>
                
            <div class="price">
                <h4>Mood Hand Wash Vienna 500Ml</h4>
                <p>EGP59.00</p>
            </div>
        </div>
        <div class="row" onclick="showDescription(this)">
            <img src="155443_453459.jpg" alt="">
            <div class="description">
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="add-to-cart">
                    <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                    <input type="number" value="1" min="1" class="quantity">
                    <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                </div>
            </div>
            
        <div class="price">
            <h4>Loreal Hyaluron Expert Eye Cream 15Ml</h4>
            <p>EGP269.00</p>
        </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="004345_431563.jpg" alt="">
                    <div class="description">
                        <p>Luna Emollient Cream For Hand & Body with Vitamin E that moisturizes your skin and gives you a fresh feel.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
            
                <div class="price">
                    <h4>Luna Emollient Hand & Body Cocoa Butter Cream 75Gm</h4>
                    <p>EGP269.00</p>
                </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="095105_453210.jpg" alt="">
                    <div class="description">
                        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    
                <div class="price">
                    <h4>GARNIER HB TISSUE MASK POMEG. DRY SKIN</h4>
                    <p>EGP90.00</p>
                </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="141846_448788.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Starville Acne Prone Skin Cleanser Gel 200Ml
                        </h4>
                        <p>EGP150.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="143623_455788.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Premier Novalucia Sun 50+ Dry Touch Cr</h4>
                        <p>EGP280.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="093919_452299.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Beesline Whitening Cleanser (4X1) Oily And Combined Skin 150Ml
                        </h4>
                        <p>EGP660.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="Avene_Kid_Sun_Care_SPF50+_Spray_200_ml_Tue_Nov_15_2022_18_36_05_GMT+0000_(Coordinated_Universal_Time).jpg" alt="">
                    <div class="description" style="display: none;">
                        <p>Anti-oxidant indicated in Diabetic Neuropathy Symptoms Specially Numbness, Tingling And Loss Of Sensation. Once Daily</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Avene Kid Sun Care SPF50+ Spray 200
                        </h4>
                        <p>EGP350.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="094159_457667.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4> Dear Hydration Anti-Aging Serum 30Ml</h4>
                        <p>EGP390.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="160134_455395.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Pixie Faint Rose Cleanser F/Acne 200Ml</h4>
                        <p>EGP175.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="16814692741630067763-30985400.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>NAPPY BAGS WITH TIE HANDLES
                        </h4>
                        <p>EGP150.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="16814686401634896904-62584300.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>CALPOL SALINE NASAL SPRAY

                        </h4>
                        <p>EGP40.00</p>
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
