<?php

$products = [
    ["name" => "Montre", "price" => 100, "stock" => 57],
    ["name" => "bague", "price" => 45, "stock" => 100],
    ["name" => "bracelet", "price" => 25, "stock" => 80],
    ["name" => "colier", "price" => 80, "stock" => 70],
    ["name" => "portable", "price" => 250 , "stock" => 157],
    ["name" => "pcPortable", "price" => 300 , "stock" => 102],
];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Catalogue</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    
<h1>Catalogue des produits</h1>

<div class="produits">
    <h2><?= $products[0]["name"] ?></h2>
    <p class="prix"><?= $products[0]["price"] ?> €</p>
    <p class="stock">Stock : <?= $products[0]["stock"] ?></p>
</div>

<div class="produit">
    <h2><?= $products[1]["name"] ?></h2>
    <p class="prix"><?= $products[1]["price"] ?> </p>
    <p class="stock">Stock : <?= $products[1]["stock"] ?></p>
</div>

<div class="produit">
    <h2><?= $products[2]["name"] ?></h2>
    <p class="prix"><?= $products[2]["price"] ?> €</p>
    <p class="stock">Stock : <?= $products[2]["stock"] ?></p>
</div>

<div class="produit">
    <h2><?= $products[3]["name"] ?></h2>
    <p class="prix"><?= $products[3]["price"] ?> €</p>
    <p class="stock">Stock : <?= $products[3]["stock"] ?></p>
</div>

<div class="produit">
    <h2><?= $products[4]["name"] ?></h2>
    <p class="prix"><?= $products[4]["price"] ?> €</p>
    <p class="stock">Stock : <?= $products[4]["stock"] ?></p>
</div>

<div class="produit">
    <h2><?= $products[5]["name"] ?></h2>
    <p class="prix"><?= $products[5]["price"] ?> €</p>
    <p class="stock">Stock : <?= $products[5]["stock"] ?></p>
</div>
</body>