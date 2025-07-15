<?php include 'header.php'; ?>

<section id="page-header" class="about-header">
    <h2>Cart</h2>
    <p>Review your items and adjust quantities instantly.</p>
</section>

<section id="cart" class="section-p1">
    <table width="100%">
        <thead>
            <tr>
                <td>Remove</td>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Subtotal</td>
            </tr>
        </thead>

        <tbody>
            <?php
            $total = 0;
            if (!empty($_SESSION['cart'])):
                foreach ($_SESSION['cart'] as $id => $item):
                    $subtotal = $item['price'] * $item['amount'];
                    $total += $subtotal;
            ?>
                <tr data-id="<?= $id ?>">
                    <td><a href="#" class="remove-item" data-id="<?= $id ?>"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>"></td>
                    <td><?= htmlspecialchars($item['name']) ?></td>
                    <td>€<?= number_format($item['price'], 2) ?></td>
                    <td><input type="number" class="qty" value="<?= $item['amount'] ?>" min="1"></td>
                    <td class="subtotal">€<?= number_format($subtotal, 2) ?></td>
                </tr>
            <?php
                endforeach;
            else:
            ?>
                <tr>
                    <td colspan="6" style="text-align:center;">Your cart is empty.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>

<section id="cart-add" class="section-p1">
    <div id="subtotal">
        <h3>Cart Totals</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>€<?= number_format($total, 2) ?></td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>€<?= number_format($total, 2) ?></strong></td>
            </tr>
        </table>
        <button class="normal" onclick="window.location.href = 'checkout.php';">Proceed to checkout</button>
    </div>
</section>

<?php include 'footer.php'; ?>

<script src="js/cart.js"></script>

</body>
</html>
