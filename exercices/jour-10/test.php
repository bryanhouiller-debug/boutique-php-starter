<?php

require 'Product.php';
require 'ProductRepository.php';

// Connexion PDO
$pdo = new PDO(
    'mysql:host=localhost;dbname=shop;charset=utf8',
    'root',
    ''
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$repo = new ProductRepository($pdo);

/* TEST find() */
$product = $repo->find(1);

if ($product) {
    echo "Produit trouvé :" . PHP_EOL;
    echo $product->getName() . " - " . $product->getPrice() . " €" . PHP_EOL;
} else {
    echo "Produit non trouvé" . PHP_EOL;
}

echo PHP_EOL;

/* TEST findAll() */
echo "Tous les produits :" . PHP_EOL;

$products = $repo->findAll();
foreach ($products as $p) {
    echo $p->getId() . " | " . $p->getName() . " | " . $p->getPrice() . " €" . PHP_EOL;
}

?>

