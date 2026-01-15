<?php
// fichier : exercices/jour-08/user.php

class User {
    public $name;
    public $email;
    public $registrationDate;

    // Constructeur
    public function __construct($name, $email, $registrationDate = null) {
        $this->name = $name;
        $this->email = $email;

        // Si aucune date n'est fournie, on met la date du jour
        if ($registrationDate === null) {
            $this->registrationDate = date("Y-m-d");
        } else {
            $this->registrationDate = $registrationDate;
        }
    }

    // Vérifie si l'utilisateur est nouveau (< 30 jours)
    public function isNewMember() {
        $today = new DateTime(); // date actuelle
        $registration = new DateTime($this->registrationDate);

        $difference = $registration->diff($today);

        return $difference->days < 30;
    }
}