<?php
include 'header.php';
include 'connection.php';

// Initialize total
$total = 0;
?>

<section class="form-login">
    <h1>Checkout</h1>
    <form action="process-checkout.php" method="POST">
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="email">Email Address</label>
        <input type="text" id="email" name="email" required>

        <label for="address">Street Address</label>
        <input type="text" id="address" name="address" required>

        <label for="city">City</label>
        <input type="text" id="city" name="city" required>

        <label for="zip">ZIP / Postal Code</label>
        <input type="text" id="zip" name="zip" required>

        <label for="country">Country</label>
        <input type="text" id="country" name="country" required>

        <button type="submit">Place Order</button>
    </form>
</section>

     
<?php include 'footer.php'; ?>
