<?php

class User
{
    /** @var Address[] */
    private array $addresses = [];

    public function __construct(
        private string $nom,
        private string $email,
        private DateTime $dateInscription
    ) {}

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getDateInscription(): DateTime
    {
        return $this->dateInscription;
    }

    public function addAddress(Address $address): void
    {
        // Si c'est la première adresse, elle devient par défaut
        if (empty($this->addresses)) {
            $address->setDefault(true);
        }
        $this->addresses[] = $address;
    }

    /**
     * Retourne toutes les adresses
     * @return Address[]
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * Retourne l'adresse par défaut (ou null si aucune)
     */
    public function getDefaultAddress(): ?Address
    {
        foreach ($this->addresses as $address) {
            if ($address->isDefault()) {
                return $address;
            }
        }
        return null;
    }
}



$user = new User("Alice Dupont", "alice@example.com", new DateTime("2026-01-19"));

$adresse1 = new Address("12 rue de Paris", "Paris", "75001", "France");
$adresse2 = new Address("34 avenue Lyon", "Lyon", "69000", "France");

$user->addAddress($adresse1);
$user->addAddress($adresse2);

echo "Nom : " . $user->getNom() . PHP_EOL;
echo "Email : " . $user->getEmail() . PHP_EOL;
echo "Adresse par défaut : " . $user->getDefaultAddress()->getRue() . ", " . $user->getDefaultAddress()->getVille() . PHP_EOL;

echo "Toutes les adresses :" . PHP_EOL;
foreach ($user->getAddresses() as $addr) {
    echo "- " . $addr->getRue() . ", " . $addr->getVille() . ", " . $addr->getPays();
    echo $addr->isDefault() ? " (Par défaut)" : "";
    echo PHP_EOL;
}
