<?php

class Cart
{
    /** @var CartItem[] */
    private array $items = [];

    public function add(Product $product, int $quantity = 1): self
    {
        $id = $product->getId();

        if (isset($this->items[$id])) {
            $currentQuantity = $this->items[$id]->getQuantity();
            $this->items[$id]->setQuantity($currentQuantity + $quantity);
        } else {
            $this->items[$id] = new CartItem($product, $quantity);
        }

        return $this;
    }

    public function update(int $productId, int $quantity): self
    {
        if (isset($this->items[$productId])) {
            if ($quantity <= 0) {
                $this->remove($productId);
            } else {
                $this->items[$productId]->setQuantity($quantity);
            }
        }

        return $this;
    }

    public function remove(int $productId): self
    {
        unset($this->items[$productId]);
        return $this;
    }

    public function clear(): self
    {
        $this->items = [];
        return $this;
    }

    // Méthodes "lecture" → PAS fluent
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
}

