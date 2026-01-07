<?php
// Création du tableau associatif
$product = [
    "name" => "Chaise en bois",
    "description" => "Chaise confortable en bois massif",
    "price" => 120.0,
    "stock" => 15,
    "category" => "Meubles",
    "brand" => "MaisonDuBois"
];

// Affiche une fiche produit HTML
echo "<h2>" . $product['name'] . "</h2>";
echo "<p><strong>Description :</strong> " . $product['description'] . "</p>";
echo "<p><strong>Prix :</strong> " . $product['price'] . " €</p>";
echo "<p><strong>Stock :</strong> " . $product['stock'] . " unités</p>";
echo "<p><strong>Catégorie :</strong> " . $product['category'] . "</p>";
echo "<p><strong>Marque :</strong> " . $product['brand'] . "</p>";

// Ajoute une nouvelle clé dateAdded avec la date du jour
$product['dateAdded'] = date("2026-01-6");

// Applique une remise de 10% sur le prix
$product['price'] = $product['price'] * 0.9;

// Affiche le tableau final pour vérifier
echo "<pre>";
print_r($product);
echo "</pre>";

// Question : Que se passe-t-il si tu accèdes à une clé qui n'existe pas ?
echo "Accès à une clé inexistante : ";
var_dump($product['nonExistentKey']); // Affichera NULL avec un warning
?>