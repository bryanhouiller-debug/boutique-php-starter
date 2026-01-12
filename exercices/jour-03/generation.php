<?php
// Création d'un tableau vide pour les produits
$products = [];

// Boucle pour générer 10 produits
for ($i = 1; $i <= 10; $i++) {
    $product = [
        'name' => 'Produit ' . $i, // Nom du produit
        'price' => rand(10, 100),  // Prix aléatoire entre 10 et 100
        'stock' => rand(0, 50)     // Stock aléatoire entre 0 et 50
    ];

    // Ajouter chaque produit généré au tableau $products
    $products[] = $product;
}

// Affichage du tableau avec var_dump() pour voir les données générées
echo "<pre>";
var_dump($products);
echo "</pre>";

// Affichage des produits en HTML
echo "<h2>Liste des Produits</h2>";
echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Prix</th><th>Stock</th></tr>";

foreach ($products as $product) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($product['name']) . "</td>";
    echo "<td>" . htmlspecialchars($product['price']) . " €</td>";
    echo "<td>" . htmlspecialchars($product['stock']) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
