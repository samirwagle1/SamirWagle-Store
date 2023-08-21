<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce-Samir Wagle</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://kit.fontawesome.com/18e31dbed1.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- header section -->
    <div class="header">
            <a href="index.html"><img src="./img/logo.png" class="logo" alt="logo"></a>
        <nav>
            <ul id="navbar">
                <li><a class="<?php echo ($activePage == 'home') ? 'active':''; ?>" href="index.php">Home</a></li>
                <li><a class="<?php echo ($activePage == 'products') ? 'active':''; ?>" href="products.php">Products</a></li>
                <li><a class="<?php echo ($activePage == 'about') ? 'active':''; ?>" href="about.php">About</a></li>
                <li><a class="<?php echo ($activePage == 'contact') ? 'active':''; ?>" href="contact.php">Contact</a></li>
                <li id="shop-cart"><a class="<?php echo ($activePage == 'cart') ? 'active':''; ?>" href="./cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><a href="login.php" class="login-btn"><i class="fa-solid fa-user"></i></a></li>
                <li><a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </nav>

        <div id="mobile">
            <a href="cart.hltml"><i class="fa-solid fa-cart-shopping"></i></a>
            <i id="bar" class="fa-solid fa-bars"></i>
        </div>
    </div>
    