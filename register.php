<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper</title>
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
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="login.html">Login/Register</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <div class="form-login">
        <h1>Register</h1>
        <form>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
            <a href="login.html">Already have an Account? Login here.</a>
        </form>

    </div>

    <footer class="section-p1">
        <div class="col">
            <div class="footer-logo-title">
                <img class="logo-image" src="img/logo.png" alt="">
                <h2 class="logo-title">Paperclip</h2>
            </div>
            <h4>Contact</h4>
            <p><strong>Address: </strong>Frommannstraße 10, Jena 07743, Germany</p>
            <p><strong>Phone:</strong> 0172 12345678</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="about.html">About Us</a>
            <a href="about.html">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="contact.html">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="login.html">Sign In</a>
            <a href="cart.php">View Cart</a>
            <a href="wishlist.html">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="contact.html">Help</a>
        </div>
        <div class="copyright">
            <p>© 2024, Friedrich Katschinski Ecommerce-Shop Paperclip</p>
        </div>
    </footer>


    <script src="script.js"></script>
</body>
</html>