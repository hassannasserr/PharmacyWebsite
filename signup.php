<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .signup {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f4; /* Adjust background color as needed */
        }

        .signup-container {
            width: 400px; /* Adjust container width as needed */
            background-color: #fff; /* Adjust container background color as needed */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow effect */
            margin-bottom: 40px; /* Add margin bottom to create space */
        }

        .signup h1 {
            text-align: center;
            margin-bottom: 20px; /* Adjust margin as needed */
            color: #333; /* Adjust text color as needed */
        }

        .input-field {
            position: relative;
            margin-bottom: 20px; /* Adjust margin as needed */
        }

        .input-field input {
            width: 100%;
            padding: 10px 40px 10px 20px; /* Adjust padding as needed */
            border: 1px solid #ccc; /* Adjust border color as needed */
            border-radius: 5px;
            outline: none;
        }

        .input-field i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 15px;
            color: #888; /* Adjust icon color as needed */
        }

        .btn1 {
            width: 100%;
            padding: 10px; /* Adjust padding as needed */
            background-color: #167475; /* Adjust button background color as needed */
            color: #fff; /* Adjust button text color as needed */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
            transition: background-color 0.3s ease; /* Add transition effect */
        }

        .btn1:hover {
            background-color: #125e5a; /* Adjust hover background color as needed */
        }

        p {
            text-align: center;
            margin-top: 20px; /* Adjust margin as needed */
        }

        p a {
            color: #167475; /* Adjust link color as needed */
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
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
        <section class="signup" id="signup">
            <div class="signup-container">
                <form action="signup.inc.php" method="post">
                    <h1>Sign up</h1>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error" style="color:red;"><?php echo $_GET['error']; ?></p>                        
                    <?php } ?>
                    <br>
                    <div class="input-field">
                        <i class="bx bxs-user"></i>
                        <input type="text" name="fname" placeholder="   Full Name">
                    </div>
                    <div class="input-field">
                        <i class="bx bxs-user"></i>
                        <input type="text" name="uname" placeholder="   Username">
                    </div>
                    <div class="input-field">
                        <i class="bx bx-mail-send"></i>
                        <input type="email" name="Email" placeholder="   Email">
                    </div>
                    <div class="input-field">
                        <i class="bx bxs-lock"></i>
                        <input type="password" name="pwd" placeholder="   Password">
                    </div>
                    <button type="submit" class="btn1">Sign up</button>
                    <p>Already have an account? <a href="login.php">Login</a></p>
                </form>
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
