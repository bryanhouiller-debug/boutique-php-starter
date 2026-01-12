<?php
// Déclaration d'un tableau de produits
$products = [
    ['name' => 'Produit A', 'price' => 100, 'stock' => 0, 'onSale' => true],  // En rupture de stock et en promo
    ['name' => 'Produit B', 'price' => 50, 'stock' => 10, 'onSale' => false], // Disponible mais pas en promo
    ['name' => 'Produit C', 'price' => 120, 'stock' => 5, 'onSale' => true],  // En stock et en promo
    ['name' => 'Produit D', 'price' => 200, 'stock' => 15, 'onSale' => false],// En stock mais pas en promo
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue de Produits</title>
    <style>
        .rupture { color: red; }
        .disponible { color: green; }
        .promo { color: orange; font-weight: bold; }
        .prix-barré { text-decoration: line-through; }
    </style>
</head>
<body>
    <h1>Catalogue de Produits</h1>

    <div class="products">
        <?php foreach ($products as $product): ?>
            <div class="product <?= $product['stock'] > 0 ? 'disponible' : 'rupture' ?>">
                <h3>
                    <?= $product['name'] ?>
                    <?= $product['onSale'] ? "🔥 PROMO" : "" ?>
                </h3>
                <p>
                    <?php if ($product['onSale']): ?>
                        <!-- Affichage du prix barré et du prix réduit (20% de réduction) -->
                        <span class="prix-barré"><?= number_format($product['price'], 2, ',', ' ') ?> €</span>
                        <span class="promo"><?= number_format($product['price'] * 0.8, 2, ',', ' ') ?> €</span>
                    <?php else: ?>
                        <!-- Affichage du prix normal -->
                        <?= number_format($product['price'], 2, ',', ' ') ?> €
                    <?php endif; ?>
                </p>
                <p>Stock : <?= $product['stock'] > 0 ? $product['stock'] : 'Rupture de stock' ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
