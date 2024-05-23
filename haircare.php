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
                <p>Username: Hassan Nasser Mohamed</p>
                <p>Email: Elkashefhassan1@gmail.com</p>
                <a href="login.php" class="btn">login</a>
                <a href="signup.php" class="btn">signup</a>
                <form action="">
                    <button type="submit" name="logout" class="logout-btn">log out</button>
                </form>
            </div>
        </div>
    </header>
    <br><br><br><br><br><br>
    <h1 style="text-align: center;">Hair Care</h1>
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
            <a href="oralcare.php">Oral Care Care</a>
        </div>
    </div>
    <div class="all">
        <section id="medical">
            <div class="products">
                <div class="row" onclick="showDescription(this)">
                    <img src="090800_457728.jpg" alt="">
                    <div class="description">
                        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                    
                <div class="price">
                    <h4>Dove Shampoo Intensive Repair 180Ml - 6Le</h4>
                    <p>EGP74.00</p>
                </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="170123_437999.jpg" alt="">
                    <div class="description">
                        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart(this.closest('.row'))">Add to Cart</button>
                        </div>
                    </div>
                
                <div class="price">
                    <h4>Trichup Hair Oil Fall Control 100Ml</h4>
                    <p>EGP80.00</p>
                </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="093834_452479.jpg" alt="">
                    <div class="description">
                        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart()">Add to Cart</button>
                        </div>
                    </div>
                    
                <div class="price">
                    <h4>Babe Anti Hair Loss Lotion 125Ml</h4>
                    <p>EGP769.00</p>
                </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="091130_436222.jpg" alt="">
                    <div class="description">
                        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart()">Add to Cart</button>
                        </div>
                    </div>
                    
                <div class="price">
                    <h4>Loreal Prodigy Ammonia Free Hair Color - 4.15 Frosted Brown</h4>
                    <p>EGP289.00</p>
                </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="095317_421925.jpg" alt="">
                    <div class="description">
                        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart()">Add to Cart</button>
                        </div>
                    </div>
                
                <div class="price">
                    <h4>Herbal Essences Bee Strong Conditioner With Honey Essences 360Ml</h4>
                    <p>EGP119.00</p>
                </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="091317_451001.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart()">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>New Hair Solution 150Ml</h4>
                        <p>EGP255.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="155531_421998.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart()">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Sunsilk Cond Black Shine 350Ml</h4>
                        <p>EGP85.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="162323_402121.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart()">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Biopoint Hair Treatment Mask With Marrow 250Ml</h4>
                        <p>EGP200.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="155822_454581.jpg" alt="">
                    <div class="description" style="display: none;">
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart()">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>Karites Hair Mask Shea Butter 475Ml</h4>
                        <p>EGP155.00</p>
                    </div>
                </div>
                <div class="row" onclick="showDescription(this)">
                    <img src="094022_453891.jpg" alt="">
                    <div class="description" style="display: none;">
                        <p>Sinozim 20 tablet.</p>
                        <div class="add-to-cart">
                            <i class="bx bx-heart heart-icon" onclick="addToFavorites(this)"></i>
                            <input type="number" value="1" min="1" class="quantity">
                            <button onclick="addToCart()">Add to Cart</button>
                        </div>
                    </div>
                    <div class="price">
                        <h4>LOREAL ELV SHAMP FULL RESIST 600ML</h4>
                        <p>EGP154.00</p>
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
