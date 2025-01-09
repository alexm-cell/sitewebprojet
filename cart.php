<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product = $_POST['product'];
    $price = $_POST['price'];
    echo "Produit : $product, Prix : $price ajouté au panier.";
}
?>
