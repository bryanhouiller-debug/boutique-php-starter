<?php
// Tableau vide pour les produits
$products = [];

// Boucle pour générer 10 produits
for ($i = 1; $i <= 10; $i++) {
    // Création des données pour chaque produit
    $products[] = [
        'nom' => "Produit $i", 
        'prix' => rand(10, 100),  // Prix aléatoire entre 10 et 100
        'stock' => rand(0, 50)    // Stock aléatoire entre 0 et 50
    ];
}

// Affichage du tableau généré avec var_dump()
echo "<pre>";
var_dump($products);
echo "</pre>";

// Affichage des produits en HTML
echo "<h2>Liste des produits générés</h2>";
foreach ($products as $produit) {
    echo "<article>";
    echo "<h3>" . $produit['nom'] . "</h3>";
    echo "<p class='prix'>" . number_format($produit['prix'], 2, ',', ' ') . " €</p>";
    echo "<p class='stock'>Stock : " . $produit['stock'] . "</p>";
    echo "</article>";
}
?>
