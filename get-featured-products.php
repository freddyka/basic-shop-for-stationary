<?php
include 'connection.php';

$sql = "SELECT * FROM products WHERE featured = 1";

$featured_products = $conn->query($sql);
?>
