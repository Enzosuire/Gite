<?php

namespace App\Entity;

use App\Repository\AnimauxRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimauxRepository::class)]
class Animaux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $accepte_animaux = null;

    #[ORM\Column]
    private ?float $tarif_animaux = null;

    #[ORM\ManyToOne(inversedBy: 'animauxes')]
    private ?Gites $gite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isAccepteAnimaux(): ?bool
    {
        return $this->accepte_animaux;
    }

    public function setAccepteAnimaux(bool $accepte_animaux): static
    {
        $this->accepte_animaux = $accepte_animaux;

        return $this;
    }

    public function getTarifAnimaux(): ?float
    {
        return $this->tarif_animaux;
    }

    public function setTarifAnimaux(float $tarif_animaux): static
    {
        $this->tarif_animaux = $tarif_animaux;

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
}
