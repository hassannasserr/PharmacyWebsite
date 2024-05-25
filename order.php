<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Main section styles */
     /* Main section styles */
main {
    padding: 20px;
}

.order {
    text-align: center;
}

.prevorder table {
    width: 100%;
    border-collapse: collapse;
}

.prevorder th,
.prevorder td {
    border: 1px solid #ddd;
    padding: 10px;
    background-color: #f5f5f5;
}
.prevorder img {
            width: 100px; /* Adjust image width as needed */
            height: auto; /* Maintain aspect ratio */
            display: block; /* Prevents extra space below images */
            margin: 0 auto; /* Center images horizontally */
        }

.prevorder th {
    background-color: var(--maincolor);
    color: #f5f5f5;
}

    </style>
    <title>Phrmasico</title>
</head>
<body>
<?php
        session_start(); // Start the session       // Your existing code
        include 'header.php'; // Include the header.php file
    ?>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <main>
        <section class="order">
            <div class="prevorder">
                <table>
                    <thead>
                        <tr>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Orderd Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="151850_121924.jpg" alt=""></td>
                            <td>Panadol</td>
                            <td>EGP55.00</td>
                            <td>24/4/2022</td>
                        </tr>
                        <tr>
                            <td><img src="141930_102880.jpg" alt=""></td>
                            <td>Glycerin Adult</td>
                            <td>EGP12.00</td>
                            <td>17/1/2023</td>
                        </tr>
                        <tr>
                            <td><img src="114755_457963.jpg" alt=""></td>
                            <td>GARNIER FAST BRIGHT VIT C</td>
                            <td>EGP540.00</td>
                            <td>1/7/2023</td>
                        </tr>
                        <tr>
                            <td><img src="160234_455599.jpg" alt=""></td>
                            <td>La Roche Effaclar Ultra Concentrated Serum</td>
                            <td>EGP540.00</td>
                            <td>17/1/2024</td>
                        </tr>
                        <tr>
                            <td><img src="094103_452242.jpg" alt=""></td>
                            <td>Bubbles Natural Bottle Rose 150Ml</td>
                            <td>EGP180.00</td>
                            <td>1/3/2024</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
