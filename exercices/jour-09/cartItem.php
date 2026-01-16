<?php


require 'product.php';
require 'cartItem.php';
class CartItem
{
    public Product $product;
    public int $quantite;

    public function __construct(Product $product, int $quantite)
    {
        $this->product = $product;
        $this->quantite = $quantite;
    }

    // Calcule le total pour cet item
    public function getTotal(): float
    {
        return $this->product->prix * $this->quantite;
    }

    // Incrémente la quantité
    public function incremente(): void
    {
        $this->quantite++;
    }

    // Décrémente la quantité
    public function decremente(): void
    {
        if ($this->quantite > 0) {
            $this->quantite--;
        }
    }
}

// Création de produits
$product1 = new Product('T-shirt', 15.99);
$product2 = new Product('Casquette', 9.99);

// Création de CartItems
$cartItem1 = new CartItem($product1, 2);
$cartItem2 = new CartItem($product2, 3);

// Tester les méthodes
echo $cartItem1->getTotal() . PHP_EOL;
$cartItem1->incremente();
echo $cartItem1->getTotal() . PHP_EOL;

