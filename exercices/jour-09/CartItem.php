<?php

class CartItem
{
    public function __construct(
        private Product $product,
        private int $quantite = 1
    ) {
        $this->quantite = max(1, $quantite);
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function getQuantite(): int
    {
        return $this->quantite;
    }

    public function incremente(): void
    {
        $this->quantite++;
    }

    public function decremente(): void
    {
        if ($this->quantite > 1) {
            $this->quantite--;
        }
    }

    public function getTotal(): float
    {
        return $this->product->getPrice() * $this->quantite;
    }
}

$product1 = new Product("Clavier", 49.99);
$product2 = new Product("Souris", 19.99);

$cartItem1 = new CartItem($product1, 2);
$cartItem2 = new CartItem($product2);

echo $cartItem1->getProduct()->getName() . PHP_EOL;
echo "Quantité : " . $cartItem1->getQuantite() . PHP_EOL;
echo "Total : " . $cartItem1->getTotal() . " €" . PHP_EOL;

$cartItem1->incremente();
echo "Après incrémentation : " . $cartItem1->getQuantite() . PHP_EOL;

$cartItem1->decremente();
$cartItem1->decremente(); // ne descendra pas sous 1
echo "Après décrémentations : " . $cartItem1->getQuantite() . PHP_EOL;

echo PHP_EOL;

echo $cartItem2->getProduct()->getName() . PHP_EOL;
echo "Total : " . $cartItem2->getTotal() . " €" . PHP_EOL;
