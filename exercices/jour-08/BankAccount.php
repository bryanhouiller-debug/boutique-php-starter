<?php
// fichier : exercices/jour-08/BankAccount.php

class BankAccount {
    private $balance;

    // Constructeur (solde initial optionnel)
    public function __construct($balance = 0) {
        if ($balance < 0) {
            $this->balance = 0;
        } else {
            $this->balance = $balance;
        }
    }

    // Ajouter de l'argent
    public function deposit($amount) {
        if ($amount <= 0) {
            return false; // montant invalide
        }

        $this->balance += $amount;
        return true;
    }

    // Retirer de l'argent
    public function withdraw($amount) {
        if ($amount <= 0) {
            return false; // montant invalide
        }

        if ($amount > $this->balance) {
            return false; // solde insuffisant
        }

        $this->balance -= $amount;
        return true;
    }

    // Consulter le solde
    public function getBalance() {
        return $this->balance;
    }
}

