<?php include 'header.php'; ?>

    <section id="hero">
        <h4>20% off with code "clip"</h4>
        <h1>School Start Sale</h1>
        <p>On all products!</p>
        <button class="normal" onclick="window.location.href='shop.php';">Shop Now</button>
    </section>  

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/products/Categories/permanent-marker.webp" alt="">
            <a href="/writing-materials"><h6>Writing Materials</h6></a>
        </div>
        <div class="fe-box">
            <img src="img/products/Categories/copypaper.webp" alt="">
            <a href="/paper"><h6>Paper</h6></a>
        </div>
        <div class="fe-box">
            <img src="img/products/Categories/cardboard.webp" alt="">
            <a href="/shipping"><h6>Shipping</h6></a>
        </div>
        <div class="fe-box">
            <img src="img/products/Categories/presenter-remote.jpg" alt="">
            <a href="/presentation"><h6>Presentation</h6></a>
        </div>
        <div class="fe-box">
            <img src="img/products/Categories/calculator.jpg" alt="">
            <a href="/school"><h6>School</h6></a>
        </div>
        <div class="fe-box">
            <img src="img/products/Categories/safety.webp" alt="">
            <a href="/safety"><h6>Safety</h6></a>
        </div>
    </section>

<?php include('get-featured-products.php'); ?>

<?php if($featured_products && $featured_products->num_rows > 0): ?>
<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <div class="pro-container">
        <?php while($row = $featured_products->fetch_assoc()): ?>
            <div class="pro" onclick="window.location.href='sproduct.php?id=<?= $row['id'] ?>';">
                <img src="<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['name']) ?>">
                <div class="des">
                    <span>Paperclip</span>
                    <h5><?= ucwords(str_replace('-', ' ', $row['name'])) ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>€<?= number_format($row['price'], 2) ?></h4>
                </div>
                <div class="cart-heart">
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>
<?php endif; ?>


<?php include 'footer.php'; ?>

<script src="script.js"></script>
</body>
</html>
