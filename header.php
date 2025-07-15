<?php
session_start();

// Calculate total items in cart
$cartCount = 0;
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $cartCount += $item['amount'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paperclip</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section id="header">
    <div id="logo">
        <a href="index.php"><img src="img/logo.png" class="logo-image" alt=""></a>
        <a href="index.php" class="logo-title">Paperclip</a>
    </div>
    <div>
        <ul id="navbar">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login/Register</a></li>
            <li id="lg-bag">
                <a href="cart.php">
                    <i class="fas fa-shopping-bag"></i>
                    <?php if ($cartCount > 0): ?>
                        <span class="cart-count"><?= $cartCount ?></span>
                    <?php endif; ?>
                </a>
            </li>
            <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>
