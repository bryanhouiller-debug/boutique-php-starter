<?php

// Fonction sans paramètre
function greet() {
    echo "Bienvenue sur la boutique !\n";
}

// Fonction avec paramètre
function greetClient($name) {
    echo "Bonjour $name !\n";
}

// Appels des fonctions
greet();
greet();

greetClient("Alice");
greetClient("Bob");
greetClient("Charlie");
