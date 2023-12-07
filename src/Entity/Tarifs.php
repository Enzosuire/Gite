<?php

namespace App\Entity;

use App\Repository\TarifsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TarifsRepository::class)]
class Tarifs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $periode_debut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $periode_fin = null;

    #[ORM\Column]
    private ?float $tarif_hebdomadaire = null;

    #[ORM\ManyToOne(inversedBy: 'tarifs')]
    private ?Gites $gite = null;

    #[ORM\Column(length: 255)]
    private ?string $Saison = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPeriodeDebut(): ?\DateTimeInterface
    {
        return $this->periode_debut;
    }

    public function setPeriodeDebut(\DateTimeInterface $periode_debut): static
    {
        $this->periode_debut = $periode_debut;

        return $this;
    }

    public function getPeriodeFin(): ?\DateTimeInterface
    {
        return $this->periode_fin;
    }

    public function setPeriodeFin(\DateTimeInterface $periode_fin): static
    {
        $this->periode_fin = $periode_fin;

        return $this;
    }

    public function getTarifHebdomadaire(): ?float
    {
        return $this->tarif_hebdomadaire;
    }

    public function setTarifHebdomadaire(float $tarif_hebdomadaire): static
    {
        $this->tarif_hebdomadaire = $tarif_hebdomadaire;

        return $this;
    }

    public function getGite(): ?Gites
    {
        return $this->gite;
    }

    public function setGite(?Gites $gite): static
    {
        $this->gite = $gite;

        return $this;
    }

    public function getSaison(): ?string
    {
        return $this->Saison;
    }

    public function setSaison(string $Saison): static
    {
        $this->Saison = $Saison;

        return $this;
    }
}
