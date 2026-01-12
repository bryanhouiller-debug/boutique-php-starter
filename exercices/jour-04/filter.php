<?php
// Déclaration du tableau de produits
$products = [
    ['name' => 'Produit A', 'price' => 40, 'stock' => 10, 'category' => 'cat1'],
    ['name' => 'Produit B', 'price' => 60, 'stock' => 0, 'category' => 'cat2'],
    ['name' => 'Produit C', 'price' => 25, 'stock' => 5, 'category' => 'cat3'],
    ['name' => 'Produit D', 'price' => 10, 'stock' => 3, 'category' => 'cat1'],
    ['name' => 'Produit E', 'price' => 70, 'stock' => 20, 'category' => 'cat2'],
    ['name' => 'Produit F', 'price' => 30, 'stock' => 0, 'category' => 'cat1'],
    ['name' => 'Produit G', 'price' => 45, 'stock' => 15, 'category' => 'cat3'],
    ['name' => 'Produit H', 'price' => 50, 'stock' => 8, 'category' => 'cat2'],
    ['name' => 'Produit I', 'price' => 19, 'stock' => 12, 'category' => 'cat1'],
    ['name' => 'Produit J', 'price' => 90, 'stock' => 0, 'category' => 'cat3']
];

// Variables pour compter les produits filtrés et total
$filteredCount = 0;
$totalCount = count($products);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue Filtré</title>
    <style>
        .product { margin-bottom: 20px; padding: 10px; border: 1px solid #ddd; }
        .disponible { color: green; }
        .rupture { color: red; }
    </style>
</head>
<body>
    <h1>Catalogue Filtré</h1>

    <?php
    // Boucle pour filtrer les produits
    foreach ($products as $product) {
        // Condition pour filtrer : stock > 0 et prix < 50€
        if ($product['stock'] <= 0 || $product['price'] >= 50) {
            continue; // Ignore ce produit si les conditions ne sont pas remplies
        }

        // Affichage du produit
        $filteredCount++; // Incrémente le nombre de produits filtrés
        ?>
        <div class="product <?= $product['stock'] > 0 ? 'disponible' : 'rupture' ?>">
            <h3><?= $product['name'] ?></h3>
            <p>Prix : <?= number_format($product['price'], 2, ',', ' ') ?> €</p>
            <p>Stock : <?= $product['stock'] ?> en stock</p>
            <p>Catégorie : <?= $product['category'] ?></p>
        </div>
        <?php
    }
    ?>

    <!-- Affichage du nombre de produits trouvés -->
    <p><?= $filteredCount ?> produits trouvés sur <?= $totalCount ?>.</p>
</body>
</html>
