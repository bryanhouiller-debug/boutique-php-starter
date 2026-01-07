<?php

$product = [
    "name" => "T-shirt Oversize",
    "description" => "T-shirt en coton bio, coupe ample",
    "price" => 29.99,

    "images" => [
        "https://example.com/image1.jpg",
        "https://example.com/image2.jpg",
        "https://example.com/image3.jpg"
    ],

    "sizes" => ["S", "M", "L", "XL"],

    "reviews" => [
        [
            "author" => "Alice",
            "rating" => 5,
            "comment" => "Très bonne qualité, je recommande !"
        ],
        [
            "author" => "Marc",
            "rating" => 4,
            "comment" => "Confortable mais taille un peu grand"
        ]
    ]
];

// Affichages demandés
echo "Deuxième image : " . $product["images"][1] . "<br>";
echo "Nombre de tailles disponibles : " . count($product["sizes"]) . "<br>";
echo "Note du premier avis : " . $product["reviews"][0]["rating"];

?>
