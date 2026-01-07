<?php

$articleName = "T-shirt noir";
$articlePrice = 19.99;
$stockQuantity = 25;
$isAvailable = true;

// Vérification des types
var_dump($articleName);
var_dump($articlePrice);
var_dump($stockQuantity);
var_dump($isAvailable);

// Calculs
$totalPrice = $articlePrice * 3;
$priceWithTax = $articlePrice + 5;
$remainingStock = $stockQuantity % 2;

// Affichage
echo "Article : " . $articleName . "<br>";
echo "Prix unitaire : " . $articlePrice . " €<br>";
echo "Prix pour 3 articles : " . $totalPrice . " €<br>";
echo "Stock restant modulo 2 : " . $remainingStock;

?>

// Les 4 types de base sont : string "" ; int nombre entier, float nombre decimale ; bool vrai/faux. 