<?php

class ProductRepository
{
    public function __construct(
        private PDO $pdo
    ) {}

    public function find(int $id): ?Product
    {
        $stmt = $this->pdo->prepare(
            "SELECT id, name, price FROM products WHERE id = :id"
        );
        $stmt->execute(['id' => $id]);

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$data) {
            return null;
        }

        return new Product(
            (int) $data['id'],
            $data['name'],
            (float) $data['price']
        );
    }

    /**
     * @return Product[]
     */
    public function findAll(): array
    {
        $stmt = $this->pdo->query(
            "SELECT id, name, price FROM products"
        );

        $products = [];

        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $products[] = new Product(
                (int) $data['id'],
                $data['name'],
                (float) $data['price']
            );
        }

        return $products;
    }
}

