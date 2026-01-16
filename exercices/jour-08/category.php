<?php

// Fichier : exercices/jour-08/category.php

class category {
    public $id;
    public $nom;
    public $description;

    public function __construct(int $id, string $nom, string $description) {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
    }

 // Génère le slug à partir du nom 
    public function getSlug(): string {
        $slug = strtolower($this->nom);
        $slug = str_replace(" ", "-", $slug);
        return $slug;
    }
}

$category1 = new Category(1, "Informatique", "Produits informatiques");
$category2 = new Category(2, "Audio Vidéo", "Produits audio et vidéo");
$category3 = new Category(3, "Maison Jardin", "Produits pour la maison");

$categories = [$category1, $category2, $category3];

foreach ($categories as $category) {
    echo $category->nom . " → " . $category->getSlug() . "<br>";
}

?>