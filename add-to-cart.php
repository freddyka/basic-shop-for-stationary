<?php
session_start();
include 'connection.php';

$id = $_POST['id'] ?? null;
$amount = max(1, intval($_POST['amount'] ?? 1));

if ($id) {
    // Fetch product from DB
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    if ($result) {
        // If already in cart, update quantity
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['amount'] += $amount;
        } else {
            $_SESSION['cart'][$id] = [
                'name' => $result['name'],
                'price' => $result['price'],
                'image' => $result['image'],
                'amount' => $amount
            ];
        }
    }
}

header('Location: cart.php');
exit;
