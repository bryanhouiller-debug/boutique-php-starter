<?php
require_once "helpers.php";

// Exemple d'utilisation des fonctions
$priceHT = 200;
$discount = 15;
$stock = 8;

echo "<h2>Produit 1</h2>";
echo "Prix original : " . formatPrice($priceHT) . "<br>";
echo "Prix après remise : " . formatPrice(calculateDiscount($priceHT, $discount)) . "<br>";
echo "Stock : " . displayStock($stock) . "<br>";
echo "Badge : " . displayBadge("Promotion", "red") . "<br>";
