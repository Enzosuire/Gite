<?php

namespace App\Entity;

use App\Repository\EquipementsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipementsRepository::class)]
class Equipements
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $lavelinge = null;

    #[ORM\Column]
    private ?bool $climatisation = null;

    #[ORM\Column]
    private ?bool $television = null;

    #[ORM\Column]
    private ?bool $terrasse = null;

    #[ORM\Column]
    private ?bool $barbecue = null;

    #[ORM\Column]
    private ?bool $pisicinePrivee = null;

    #[ORM\Column]
    private ?bool $piscinePartagee = null;

    #[ORM\Column]
    private ?bool $tennis = null;

    #[ORM\Column]
    private ?bool $pingPong = null;

    #[ORM\ManyToOne(inversedBy: 'equipement')]
    private ?Gites $gite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isLavelinge(): ?bool
    {
        return $this->lavelinge;
    }

    public function setLavelinge(bool $lavelinge): static
    {
        $this->lavelinge = $lavelinge;

        return $this;
    }

    public function isClimatisation(): ?bool
    {
        return $this->climatisation;
    }

    public function setClimatisation(bool $climatisation): static
    {
        $this->climatisation = $climatisation;

        return $this;
    }

    public function isTelevision(): ?bool
    {
        return $this->television;
    }

    public function setTelevision(bool $television): static
    {
        $this->television = $television;

        return $this;
    }

    public function isTerrasse(): ?bool
    {
        return $this->terrasse;
    }

    public function setTerrasse(bool $terrasse): static
    {
        $this->terrasse = $terrasse;

        return $this;
    }

    public function isBarbecue(): ?bool
    {
        return $this->barbecue;
    }

    public function setBarbecue(bool $barbecue): static
    {
        $this->barbecue = $barbecue;

        return $this;
    }

    public function isPisicinePrivee(): ?bool
    {
        return $this->pisicinePrivee;
    }

    public function setPisicinePrivee(bool $pisicinePrivee): static
    {
        $this->pisicinePrivee = $pisicinePrivee;

        return $this;
    }

    public function isPiscinePartagee(): ?bool
    {
        return $this->piscinePartagee;
    }

    public function setPiscinePartagee(bool $piscinePartagee): static
    {
        $this->piscinePartagee = $piscinePartagee;

        return $this;
    }

    public function isTennis(): ?bool
    {
        return $this->tennis;
    }

    public function setTennis(bool $tennis): static
    {
        $this->tennis = $tennis;

        return $this;
    }

    public function isPingPong(): ?bool
    {
        return $this->pingPong;
    }

    public function setPingPong(bool $pingPong): static
    {
        $this->pingPong = $pingPong;

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
