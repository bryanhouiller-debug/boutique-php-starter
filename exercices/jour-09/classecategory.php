<?php

class Category
{
    public int $id;
    public string $nom;
    public string $description;

    public function __construct(int $id, string $nom, string $description)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
    }

    public function getSlug(): string
    {
        // Met le nom en minuscules et remplace les espaces par des tirets
        return str_replace(' ', '-', strtolower($this->nom));
    }
}
