<?php
// fichier : exercices/jour-08/Product.php

class Product {
    public $id;
    public $nom;
    public $description;
    public $prix;
    public $stock;
    public $categorie;

    public function __construct(
        int $id,
        string $nom,
        string $description,
        float $prix,
        int $stock,
        string $categorie
    ) {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->prix = $prix;
        $this->stock = $stock;
        $this->categorie = $categorie;
    }

    // Prix TTC
    public function getPriceIncludingTax(float $vat = 20): float {
        return $this->prix * (1 + $vat / 100);
    }

    // Vérifie si le produit est en stock
    public function isInStock(): bool {
        return $this->stock > 0;
    }

    // Réduire le stock
    public function reduceStock(int $quantity) {
        if ($quantity <= 0) {
            return false;
        }

        if ($quantity > $this->stock) {
            return false;
        }

        $this->stock -= $quantity;
        return true;
    }

    // Appliquer une réduction
    public function applyDiscount(float $percentage) {
        if ($percentage <= 0 || $percentage > 100) {
            return false;
        }

        $this->prix -= $this->prix * ($percentage / 100);
        return true;
    }
}
