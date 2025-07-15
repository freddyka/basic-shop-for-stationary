<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Normally you'd insert this order into a database.
    $_SESSION['cart'] = []; // Clear cart for now
    header("Location: thank-you.php");
    exit;
}
?>
