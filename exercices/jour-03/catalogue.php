<?php
// Tableau de produits avec nom, prix, stock, et image (URL placeholder)
$products = [
    ['name' => 'Produit 1', 'price' => 45.99, 'stock' => 10, 'image' => 'https://via.placeholder.com/150'],
    ['name' => 'Produit 2', 'price' => 120.00, 'stock' => 0, 'image' => 'https://via.placeholder.com/150'],
    ['name' => 'Produit 3', 'price' => 30.50, 'stock' => 5, 'image' => 'https://via.placeholder.com/150'],
    ['name' => 'Produit 4', 'price' => 60.99, 'stock' => 3, 'image' => 'https://via.placeholder.com/150'],
    ['name' => 'Produit 5', 'price' => 90.25, 'stock' => 0, 'image' => 'https://via.placeholder.com/150'],
    ['name' => 'Produit 6', 'price' => 70.75, 'stock' => 7, 'image' => 'https://via.placeholder.com/150'],
    ['name' => 'Produit 7', 'price' => 50.00, 'stock' => 20, 'image' => 'https://via.placeholder.com/150'],
    ['name' => 'Produit 8', 'price' => 85.99, 'stock' => 2, 'image' => 'https://via.placeholder.com/150'],
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue de Produits</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .grille {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        .produit {
            background-color: white;
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .produit:hover {
            transform: scale(1.05);
        }

        .produit img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .prix {
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 10px;
        }

        .rupture {
            color: red;
            font-weight: bold;
        }

        .en-stock {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; padding: 20px;">Catalogue de Produits</h1>

    <div class="grille">
        <?php foreach ($products as $product): ?>
            <div class="produit">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                <p class="prix"><?php echo number_format($product['price'], 2, ',', ' ') . " €"; ?></p>
                <p class="<?php echo $product['stock'] > 0 ? 'en-stock' : 'rupture'; ?>">
                    <?php echo $product['stock'] > 0 ? 'En stock' : 'Rupture'; ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
