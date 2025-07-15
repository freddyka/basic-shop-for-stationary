<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;

    if ($id && isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }

    echo 'removed';
}
