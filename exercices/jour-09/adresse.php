<?php

class Address
{
    public function __construct(
        private string $rue,
        private string $ville,
        private string $codePostal,
        private string $pays,
        private bool $isDefault = false  // pour savoir si c'est l'adresse par défaut
    ) {}

    public function getRue(): string
    {
        return $this->rue;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

    public function getCodePostal(): string
    {
        return $this->codePostal;
    }

    public function getPays(): string
    {
        return $this->pays;
    }

    public function isDefault(): bool
    {
        return $this->isDefault;
    }

    public function setDefault(bool $default = true): void
    {
        $this->isDefault = $default;
    }
}
