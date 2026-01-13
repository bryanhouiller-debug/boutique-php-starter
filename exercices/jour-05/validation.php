<?php

// Vérifie si le produit est en stock
function isInStock($stock) {
    return $stock > 0;
}

// Vérifie si le produit est en promotion
function isOnSale($discount) {
    return $discount > 0;
}

// Vérifie si le produit est nouveau (moins de 30 jours)
function isNew($dateAdded) {
    $daysSince = (time() - strtotime($dateAdded)) / 86400;
    return $daysSince < 30;
}

// Vérifie si la commande est possible
function canOrder($stock, $quantity) {
    return $stock >= $quantity;
}

// =====================
// Tests des fonctions
// =====================

// isInStock
var_dump(isInStock(10)); // true
var_dump(isInStock(0));  // false

// isOnSale
var_dump(isOnSale(15)); // true
var_dump(isOnSale(0));  // false

// isNew
var_dump(isNew("2024-01-15"));
var_dump(isNew("2023-01-01"));

// canOrder
var_dump(canOrder(10, 5));  // true
var_dump(canOrder(3, 5));   // false
