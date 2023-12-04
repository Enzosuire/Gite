<?php

namespace App\Entity;

use App\Repository\ContactsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactsRepository::class)]
class Contacts
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 20)]
    private ?string $telephone = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $horaires_disponibilite = null;


    #[ORM\OneToMany(mappedBy: 'contacts', targetEntity: Gites::class)]
    private Collection $gites;

    public function __construct()
    {
        $this->gites = new ArrayCollection();
    }
    


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getHorairesDisponibilite(): ?string
    {
        return $this->horaires_disponibilite;
    }

    public function setHorairesDisponibilite(string $horaires_disponibilite): static
    {
        $this->horaires_disponibilite = $horaires_disponibilite;

        return $this;
    }



    /**
     * Get the value of gites
     *
     * @return Collection
     */
    public function getGites(): Collection
    {
        return $this->gites;
    }

    /**
     * Set the value of gites
     *
     * @param Collection $gites
     *
     * @return self
     */
    public function setGites(Collection $gites): self
    {
        $this->gites = $gites;

        return $this;
    }
}
