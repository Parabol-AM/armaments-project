<?php
session_start(); 

// récup les info du produit
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];

// vibecoder jsp se que sa fait 
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Ajoute panier
$_SESSION['cart'][] = array(
    'id' => $product_id,
    'name' => $product_name,
    'price' => $product_price
);

// Redirige vers cart.php jsp si on garde ou si on mets un autre baille
header("Location: cart.php");
exit();
?>