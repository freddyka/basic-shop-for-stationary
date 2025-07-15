<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $qty = max(1, intval($_POST['quantity'] ?? 1));

    if ($id && isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['amount'] = $qty;
    }

    echo 'updated';
}
