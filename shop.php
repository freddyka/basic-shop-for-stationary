<?php
include 'connection.php';
include 'header.php';

$category = $_GET['category'] ?? null;
$products = [];

if ($category) {
    $sql = "SELECT * FROM products WHERE category = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $products = $stmt->get_result();
}
?>


<section id="page-header">
    <h2><?= $category ? ucfirst(str_replace('-', ' ', $category)) : 'All Categories' ?></h2>
    <p>Save more with coupons & up to 20% off!</p>
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

<?php if ($category && $products && $products->num_rows > 0): ?>
<section id="product1" class="section-p1">
    <div class="pro-container">
        <?php while ($row = $products->fetch_assoc()): ?>
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
