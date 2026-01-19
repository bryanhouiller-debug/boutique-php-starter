<?php

class Cart
{
    /** @var CartItem[] */
    private array $items = [];

    public function add(Product $product, int $quantity = 1): void
    {
        $id = $product->getId();

        if (isset($this->items[$id])) {
            $currentQuantity = $this->items[$id]->getQuantity();
            $this->items[$id]->setQuantity($currentQuantity + $quantity);
        } else {
            $this->items[$id] = new CartItem($product, $quantity);
        }
    }

    public function update(int $productId, int $quantity): void
    {
        if (isset($this->items[$productId])) {
            if ($quantity <= 0) {
                $this->remove($productId);
            } else {
                $this->items[$productId]->setQuantity($quantity);
            }
        }
    }

    public function remove(int $productId): void
    {
        unset($this->items[$productId]);
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getTotal(): float
    {
        $total = 0;

        foreach ($this->items as $item) {
            $total += $item->getTotal();
        }

        return $total;
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function clear(): void
    {
        $this->items = [];
    }
}

$cart = new Cart();

$product1 = new Product(1, "Clavier", 50);
$product2 = new Product(2, "Souris", 20);
$product3 = new Product(3, "Écran", 200);

/* ADD */
$cart->add($product1, 2);
$cart->add($product2);
$cart->add($product1); // ajoute encore 1 clavier

echo "Nombre de produits différents : " . $cart->count() . PHP_EOL;

/* AFFICHAGE */
foreach ($cart->getItems() as $item) {
    echo $item->getProduct()->getName() . " x " . $item->getQuantity();
    echo " = " . $item->getTotal() . " €" . PHP_EOL;
}

echo "Total panier : " . $cart->getTotal() . " €" . PHP_EOL;
echo PHP_EOL;

/* UPDATE */
$cart->update(2, 3); // souris à 3
$cart->update(1, 1); // clavier à 1

echo "Après update :" . PHP_EOL;
foreach ($cart->getItems() as $item) {
    echo $item->getProduct()->getName() . " x " . $item->getQuantity() . PHP_EOL;
}

echo PHP_EOL;

/* REMOVE */
$cart->remove(1); // supprime clavier
echo "Après suppression du clavier, count = " . $cart->count() . PHP_EOL;

/* CLEAR */
$cart->clear();
echo "Après clear, count = " . $cart->count() . PHP_EOL;
