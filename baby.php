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
    <br><br><br><br><br><br>
    <h1 style="text-align: center;">Baby Care</h1>
    <div class="search-box">
        <input type="text" placeholder="Search...">
        <button><i class="bx bx-search"></i></button>
    </div>
    <div class="menu-dropdown">
        <button class="dropbtn">Categories</button>
        <div class="menu-content">
            <a href="drugs.php">Drags</a>
            <a href="skincare.php">Skin Care</a>
            <a href="oralcare.php">Oral Care</a>
            <a href="haircare.php">Hair Care</a>
        </div>
    </div>
    <div class="all">
        <section id="medical">
            <div class="products">
                <div class="row" onclick="showDescription(this)">
                    <img src="094244_437153.jpg" alt="">
                    <div class="description" style="display: none;">
                        <p>A nutritious and convenient Cerelac..</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Nestle Cerelac Wheat With Milk - 125 gram</h4>
                        <p>EGP49.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="090933_452085.jpg" alt="">
                    <div class="description" style="display: none;">
                        <p>Use JOHNSON'S® baby oil during a baby massage for a bonding experience that is relaxing.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Baby Oil
                        </h4>
                        <p>EGP53.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="094103_452242.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>ALGO Bottle Nipple - Pack Of 24 Pcs
                        </h4>
                        <p>EGP12.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="095318_120357.jpg" alt="">
                    <div class="description" style="display: none;">
                        <p>EXTRA CARE MILK FORMULA.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>HERO BABY (DIGEST) MILK POWDER 400GM ?</h4>
                        <p>EGP329.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="091511_108358.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Pediasure Complete Chocolate Flavour Powder 400Gm</h4>
                        <p>EGP452.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="090933_452080.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Johnson Baby Conditioner 500Ml</h4>
                        <p>EGP55.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="96462-0023-1334a6d4-75da-4403-abac-07019c4d35b8.png.png" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Africana NPC Baby Care Wipes 24 wipes</h4>
                        <p>EGP55.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="ALGO_Baby_Set_(Plate_+_Spoon_+_Fork)_Wed_Feb_08_2023_15_24_25_GMT+0000_(Coordinated_Universal_Time).jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>ALGO Baby Set (Plate + Spoon + Fork)
                        </h4>
                        <p>EGP250.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="ALGO_Bottle_250ml_Wed_Feb_22_2023_16_48_01_GMT+0000_(Coordinated_Universal_Time).jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>ALGO Baby Feeding Bottle 250ml</h4>
                        <p>EGP60.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="download.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Children's MOTRIN® Ibuprofen Liquid Medicine for Fever
                        </h4>
                        <p>EGP60.00</p>
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
                    <img src="peakpharmacy-chewy-vites-kids-immune-support-gummies-30s-1694080376Chewy-Vites-Kids-Immune-Support-Gummies-30s.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4> CHEWY VITES KIDS IMMUNE SUPPORT GUMMIES</h4>
                        <p>EGP300.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="16814793101583414572-44404100.jpg" alt="">
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
