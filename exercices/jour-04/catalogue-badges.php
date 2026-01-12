<?php
// Tableau des produits avec les nouvelles informations
$products = [
    [
        "name" => "T-shirt",
        "price" => 29.99,
        "stock" => 3,
        "new" => true,
        "discount" => 0,
        "category" => "Vêtements"
    ],
    [
        "name" => "Jean",
        "price" => 89.99,
        "stock" => 0,
        "new" => false,
        "discount" => 20,
        "category" => "Vêtements"
    ],
    [
        "name" => "Chaussures de course",
        "price" => 59.99,
        "stock" => 10,
        "new" => false,
        "discount" => 10,
        "category" => "Sport"
    ],
    [
        "name" => "Casquette",
        "price" => 19.99,
        "stock" => 2,
        "new" => true,
        "discount" => 0,
        "category" => "Accessoires"
    ],
    [
        "name" => "Sweat à capuche",
        "price" => 49.99,
        "stock" => 5,
        "new" => false,
        "discount" => 15,
        "category" => "Vêtements"
    ]
];

// Compteurs pour les stats
$inStock = 0;
$onSale = 0;
$outOfStock = 0;

foreach ($products as $product) {
    if ($product["stock"] > 0) $inStock++;
    if ($product["discount"] > 0) $onSale++;
    if ($product["stock"] == 0) $outOfStock++;
}
?>
