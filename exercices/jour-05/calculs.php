<?php

// Calcule le montant de la TVA
function calculateVAT($priceExcludingTax, $rate) {
    return $priceExcludingTax * $rate / 100;
}

// Calcule le prix TTC
function calculateIncludingTax($priceExcludingTax, $rate) {
    return $priceExcludingTax + calculateVAT($priceExcludingTax, $rate);
}

// Calcule le prix après remise
function calculateDiscount($price, $percentage) {
    return $price - ($price * $percentage / 100);
}

// Données du produit
$priceHT = 100;
$vatRate = 20;
$discountRate = 10;

// Calculs
$vatAmount = calculateVAT($priceHT, $vatRate);
$priceTTC = calculateIncludingTax($priceHT, $vatRate);
$priceAfterDiscount = calculateDiscount($priceTTC, $discountRate);

// Affichage
echo "Prix HT : $priceHT €\n";
echo "TVA (20%) : $vatAmount €\n";
echo "Prix TTC : $priceTTC €\n";
echo "Remise (10%) : " . ($priceTTC - $priceAfterDiscount) . " €\n";
echo "Prix final : $priceAfterDiscount €\n";
