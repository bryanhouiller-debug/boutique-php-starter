<?php

require 'CartItem.php';

class Cart
{
    // Tableau pour stocker les CartItem
    private array $items = [];

    // Ajouter un CartItem
    public function add(CartItem $item): void
    {
        // Vérifie si le produit est déjà dans le panier
        foreach ($this->items as $existingItem) {
            if ($existingItem->product === $item->product) {
                // Si oui, incrémente la quantité
                $existingItem->quantite += $item->quantite;
                return;
            }
        }
        // Sinon, ajoute le nouvel item
        $this->items[] = $item;
    }

    // Supprimer un produit
    public function remove(Product $product): void
    {
        foreach ($this->items as $key => $item) {
            if ($item->product === $product) {
                unset($this->items[$key]);
                // Ré-indexe le tableau
                $this->items = array_values($this->items);
                return;
            }
        }
    }

    // Mettre à jour la quantité d'un produit
    public function update(Product $product, int $quantite): void
    {
        foreach ($this->items as $item) {
            if ($item->product === $product) {
                $item->quantite = $quantite;
                return;
            }
        }
    }

    // Total du panier
    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getTotal();
        }
        return $total;
    }

    // Nombre d'items différents
    public function count(): int
    {
        return count($this->items);
    }

    // Vider le panier
    public function clear(): void
    {
        $this->items = [];
    }

    // Afficher le panier (pratique pour tester)
    public function display(): void
    {
        foreach ($this->items as $item) {
            echo $item->product->nom . " x " . $item->quantite . " = " . $item->getTotal() . " €" . PHP_EOL;
        }
        echo "Total général: " . $this->getTotal() . " €" . PHP_EOL;
    }
}

require 'Product.php';
require 'CartItem.php';
require 'Cart.php';

// Création des produits
$product1 = new Product('T-shirt', 15.99);
$product2 = new Product('Casquette', 9.99);
$product3 = new Product('Jean', 49.99);

// Création du panier
$cart = new Cart();

// Ajouter des items
$cart->add(new CartItem($product1, 2));
$cart->add(new CartItem($product2, 3));
$cart->add(new CartItem($product3, 1));

echo "Panier initial:" . PHP_EOL;
$cart->display();

// Mettre à jour la quantité
$cart->update($product1, 5);
echo PHP_EOL . "Après mise à jour de T-shirt à 5:" . PHP_EOL;
$cart->display();

// Supprimer un produit
$cart->remove($product2);
echo PHP_EOL . "Après suppression de la Casquette:" . PHP_EOL;
$cart->display();

// Vider le panier
$cart->clear();
echo PHP_EOL . "Après avoir vidé le panier:" . PHP_EOL;
$cart->display();