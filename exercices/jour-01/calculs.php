<?php

// Données de base
$priceExcludingTax = 100; // Prix HT
$vat = 20;               // TVA en %
$quantity = 3;           // Quantité

// Calcul du montant de la TVA
$vatAmount = $priceExcludingTax * ($vat / 100);

// Calcul du prix TTC unitaire
$priceIncludingTax = $priceExcludingTax + $vatAmount;

// Calcul du total pour la quantité commandée
$total = $priceIncludingTax * $quantity;

// Affichage des résultats
echo "Montant de la TVA : $vatAmount €<br>";
echo "Prix TTC unitaire : $priceIncludingTax €<br>";
echo "Total pour $quantity produits : $total €";
