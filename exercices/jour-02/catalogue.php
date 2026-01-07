<?php

$products = [
    ["name" => "T-shirt", "price" => 20, "stock" => 15],
    ["name" => "Jean", "price" => 50, "stock" => 10],
    ["name" => "Pull", "price" => 35, "stock" => 8],
    ["name" => "Ceinture", "price" => 15, "stock" => 12],
    ["name" => "Montre", "price" => 120, "stock" => 5],
];

echo "Le nom du 3eme produits " . $products[2]["Pull"] . "\n";

echo "Le prix du premier produits " . $products[0]["20"] . "\n";

echo "Stock du dernier produit : " . $products[count($products)-1]["5"] . "\n";

$products[1]["stock"] += 10;

print_r($products);
?>