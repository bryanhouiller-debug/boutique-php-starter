<?php
// Création d'un tableau de 10 produits avec des prix et des stocks variés
$products = [
    ['name' => 'Produit 1', 'price' => 45, 'stock' => 10],
    ['name' => 'Produit 2', 'price' => 110, 'stock' => 5],
    ['name' => 'Produit 3', 'price' => 25, 'stock' => 0],
    ['name' => 'Produit 4', 'price' => 80, 'stock' => 15],
    ['name' => 'Produit 5', 'price' => 95, 'stock' => 0],
    ['name' => 'Produit 6', 'price' => 65, 'stock' => 20],
    ['name' => 'Produit 7', 'price' => 120, 'stock' => 8],
    ['name' => 'Produit 8', 'price' => 75, 'stock' => 30],
    ['name' => 'Produit 9', 'price' => 50, 'stock' => 10],
    ['name' => 'Produit 10', 'price' => 30, 'stock' => 25]
];

// Parcours du tableau pour afficher les produits en stock et dont le prix est inférieur à 100€
echo "<h2>Produits disponibles (Stock > 0 et Prix < 100€)</h2>";
echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Prix</th><th>Stock</th></tr>";

foreach ($products as $product) {
    // Utilisation de continue pour ignorer les produits en rupture de stock (stock == 0)
    if ($product['stock'] == 0) {
        continue;
    }

    // Utilisation de break pour arrêter la boucle dès qu'un produit a un prix > 100€
    if ($product['price'] > 100) {
        break;
    }

    // Affichage des produits en stock et dont le prix est < 100€
    echo "<tr>";
    echo "<td>" . htmlspecialchars($product['name']) . "</td>";
    echo "<td>" . htmlspecialchars($product['price']) . " €</td>";
    echo "<td>" . htmlspecialchars($product['stock']) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
