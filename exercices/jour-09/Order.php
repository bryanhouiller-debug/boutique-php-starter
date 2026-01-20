<?php

// USER
$user = new User("Alice Dupont", "alice@example.com", new DateTime());

// PRODUITS
$product1 = new Product(1, "Clavier", 50);
$product2 = new Product(2, "Souris", 20);

// PANIER
$cart = new Cart();
$cart->add($product1, 2);
$cart->add($product2, 3);

// COMMANDE
$order = new Order(
    1001,
    $user,
    $cart,
    new DateTime()
);

// AFFICHAGE
echo "Commande #" . $order->getId() . PHP_EOL;
echo "Client : " . $order->getUser()->getNom() . PHP_EOL;
echo "Statut : " . $order->getStatut() . PHP_EOL;
echo "Date : " . $order->getDate()->format('d/m/Y H:i') . PHP_EOL;

echo PHP_EOL . "Détails :" . PHP_EOL;
foreach ($order->getItems() as $item) {
    echo "- " . $item->getProduct()->getName();
    echo " x " . $item->getQuantity();
    echo " = " . $item->getTotal() . " €" . PHP_EOL;
}

echo PHP_EOL;
echo "Nombre total d’articles : " . $order->getItemCount() . PHP_EOL;
echo "Total commande : " . $order->getTotal() . " €" . PHP_EOL;

// CHANGEMENT DE STATUT
$order->setStatut('paid');
echo "Nouveau statut : " . $order->getStatut() . PHP_EOL;
