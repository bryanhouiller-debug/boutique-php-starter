<?php
// fichier : exercices/jour-08/Car.php

class car {
    public $brand;
    public $model;
    public $year;

  // Constructeur pour initialiser la voiture
    public function __construct($brand, $model, $year) {
       $this->brand = $brand;
       $this->model = $model;
       $this->year = $year;
    }

  //Méthode pour calculer l'age de la voiture
   public function getAge() {
    $currentYear = date("Y"); // année actuelle
    return $currentYear - $this->year;
   }

   // Méthode pour afficher la voiture
   public function display() {
       return $this->brand . " " . $this->model . "(" . $this->getAge() . " ans)";
   }
}

// Création de 3 voitures
$car1 = new car("Peugot", "208", 2018);
$car2 = new car("Toyota", "Corolla", 2015);
$car3 = new car("Renault", "Clio", 2020);

// Affichage des voitures
echo $car1->display() . "\n";
echo $car2->display() . "\n";
echo $car3->display() . "\n";
?>