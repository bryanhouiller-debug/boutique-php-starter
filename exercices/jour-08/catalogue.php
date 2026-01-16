<?php
// fichier : exercices/jour-08/catalogue.php

require_once "Product.php";

// Création des produits
$product1 = new Product(1, "Clavier", "Clavier mécanique", 80, 10, "Informatique");
$product2 = new Product(2, "Souris", "Souris sans fil", 40, 20, "Informatique");
$product3 = new Product(3, "Écran", "Écran 24 pouces", 200, 5, "Informatique");
$product4 = new Product(4, "Casque", "Casque Bluetooth", 100, 8, "Audio");
$product5 = new Product(5, "Webcam", "Webcam HD", 60, 12, "Vidéo");

// Stockage dans un tableau
$catalogue = [
    $product1,
    $product2,
    $product3,
    $product4,
    $product5
];

// Variables de calcul
$totalStock = 0;
$totalValue = 0;

// Parcours du catalogue
foreach ($catalogue as $product) {

    // Affichage du produit
    echo $product->nom . " - ";
    echo $product->getPriceIncludingTax() . " € TTC - ";
    echo "Stock : " . $product->stock . "<br>";

    // Calculs
    $totalStock += $product->stock;
    $totalValue += $product->prix * $product->stock;
}

// Résultats finaux
echo "<hr>";
echo "Stock total : " . $totalStock . "<br>";
echo "Valeur totale du catalogue (HT) : " . $totalValue . " €";
