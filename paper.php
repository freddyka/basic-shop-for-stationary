<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paper Category – Paperclip</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>
<body>

    
    <?php include 'header.php';  ?>

    <section id="page-header">
        <h2>Paper Products</h2>
        <p>Explore all paper-related supplies below.</p>
    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container">
            <?php
            $sql = "SELECT * FROM products WHERE category = 'paper'";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0):
                while ($row = $result->fetch_assoc()):
            ?>
                <div class="pro" onclick="window.location.href='sproduct.php?id=<?= $row['id'] ?>';">
                    <img src="<?= $row['image'] ?>" alt="<?= $row['name'] ?>">
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
                        <a href="#"><i class="fa-regular fa-heart heart"></i></a>
                    </div>
                </div>
            <?php
                endwhile;
            else:
                echo "<p>No products found in this category.</p>";
            endif;
            ?>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; // Optional: use this if you have a footer file ?>
    <script src="script.js"></script>
</body>
</html>
