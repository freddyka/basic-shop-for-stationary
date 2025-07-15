<?php
include 'connection.php';
include 'header.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<p>Invalid product ID.</p>";
    include 'footer.php';
    exit;
}

$product_id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

if (!$product) {
    echo "<p>Product not found.</p>";
    include 'footer.php';
    exit;
}
?>

<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img 
            src="<?= htmlspecialchars($product['image']) ?>" 
            id="MainImg" 
            alt="<?= htmlspecialchars($product['name']) ?>" 
            style="width: 100%; object-fit: contain; image-rendering: auto;"
        >
    </div>

    <div class="single-pro-details">
        <h6><?= ucfirst($product['category']) ?></h6>
        <h4><?= ucwords(str_replace('-', ' ', $product['name'])) ?></h4>
        <h2>€<?= number_format($product['price'], 2) ?></h2>
        
        <form method="POST" action="add-to-cart.php">
            <input type="hidden" name="id" value="<?= $product['id'] ?>">
            <input type="number" name="amount" value="1" min="1">
            <button type="submit" class="normal">Add To Cart</button>
        </form>



        <h4>Product Details</h4>
        <span><?= nl2br(htmlspecialchars($product['description'])) ?></span>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>
