<?php

// 1. Créer les tableaux
$clothes = ["T-shirt", "Jean", "Pull"];
$accessories = ["Ceinture", "Montre", "Lunettes"];

// 2. Fusionner les tableaux
$catalog = array_merge($clothes, $accessories);

// 3. Afficher le nombre total de produits
echo "Nombre total de produits : " . count($catalog) . "\n";

// 4. Ajouter un produit au début du tableau
// On utilise array_unshift
array_unshift($catalog, "Casquette");

// 5. Afficher le tableau complet pour vérifier
print_r($catalog);
