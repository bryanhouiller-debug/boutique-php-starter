<?php

class Category
{
    public function __construct(
        private int $id,
        private string $name
    ) {}

    public function getName(): string
    {
        return $this->name;
    }
}

class Product
{
    public function __construct(
        private string $name,
        private float $price,
        private Category $category
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }
}

$category1 = new Category(1, "Informatique");
$category2 = new Category(2, "Livres");
$category3 = new Category(3, "Vêtements");

$products = [
    new Product("Ordinateur portable", 1200, $category1),
    new Product("Souris", 25, $category1),
    new Product("Roman", 15, $category2),
    new Product("T-shirt", 20, $category3),
    new Product("Jean", 50, $category3),
];

foreach ($products as $product) {
    echo "Produit : " . $product->getName();
    echo " | Prix : " . $product->getPrice() . " €";
    echo " | Catégorie : " . $product->getCategory()->getName();
    echo "<br>";
}
