<?php

require 'exercices/jour-08/Category.php';

$cat1 = new Category(1, 'Développement Web', 'Tout sur le web');
$cat2 = new Category(2, 'Programmation Orientée Objet', 'Concepts POO');
$cat3 = new Category(3, 'Bases de Données', 'SQL et bases relationnelles');

echo $cat1->getSlug() . PHP_EOL;
echo $cat2->getSlug() . PHP_EOL;
echo $cat3->getSlug() . PHP_EOL;
