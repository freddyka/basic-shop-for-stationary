<?php
include 'header.php';

// Access billing and cart data safely
$billing = $_SESSION['billing'] ?? null;
$cart = $_SESSION['cart'] ?? null;

// Redirect or warn if something is missing
if (!$billing || !$cart) {
    echo "<p style='color: red; text-align: center;'>Thank your for the order!</p>";
    
    include 'footer.php';
    exit;
}
?>


<section class="section-p1">
    <h2>Thank You for Your Order!</h2>
    <p>Your order has been successfully placed. A confirmation email will be sent to <strong><?= htmlspecialchars($billing['email']) ?></strong>.</p>

   

    <h3>Order Summary</h3>
    <table>
        <thead>
            <tr>
                <td>Product</td>
                <td>Qty</td>
                <td>Price</td>
                <td>Subtotal</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $total = 0;
            foreach ($_SESSION['cart'] as $item):
                $subtotal = $item['price'] * $item['amount'];
                $total += $subtotal;
            ?>
            <tr>
                <td><?= htmlspecialchars($item['name']) ?></td>
                <td><?= $item['amount'] ?></td>
                <td>€<?= number_format($item['price'], 2) ?></td>
                <td>€<?= number_format($subtotal, 2) ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="3"><strong>Total</strong></td>
                <td><strong>€<?= number_format($total, 2) ?></strong></td>
            </tr>
        </tbody>
    </table>
</section>

<?php
// Optionally clear cart & billing data
unset($_SESSION['cart']);
unset($_SESSION['billing']);
include 'footer.php';
?>
