<?php

namespace App\Entity;

use App\Repository\GitesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GitesRepository::class)]
class Gites
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column]
    private ?float $surface_habitable = null;

    #[ORM\Column]
    private ?int $nombre_chambres = null;

    #[ORM\Column]
    private ?int $nombres_couchages = null;



    #[ORM\ManyToOne(targetEntity: Proprietaire::class, inversedBy: 'gites')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Proprietaire $proprietaire = null;

    #[ORM\ManyToOne(targetEntity: Contacts::class, inversedBy: 'gites')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Contacts $Contact = null;


    #[ORM\OneToMany(mappedBy: 'gite', targetEntity: Animaux::class)]
    private Collection $animaux;

    #[ORM\OneToMany(mappedBy: 'gite', targetEntity: Tarifs::class)]
    private Collection $tarifs;

    #[ORM\OneToMany(mappedBy: 'gite', targetEntity: Equipements::class, cascade: ['persist'])]
    private Collection $equipement;



    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\OneToMany(mappedBy: 'Gites', targetEntity: Services::class)]
    private Collection $services;

    #[ORM\Column(length: 255)]
    private ?string $region = null;

    #[ORM\Column(length: 255)]
    private ?string $departement = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    public function __construct()
    {
        $this->animaux = new ArrayCollection();
        $this->tarifs = new ArrayCollection();
        $this->equipement = new ArrayCollection();
        $this->services = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getSurfaceHabitable(): ?float
    {
        return $this->surface_habitable;
    }

    public function setSurfaceHabitable(float $surface_habitable): static
    {
        $this->surface_habitable = $surface_habitable;

        return $this;
    }

    public function getNombreChambres(): ?int
    {
        return $this->nombre_chambres;
    }

    public function setNombreChambres(int $nombre_chambres): static
    {
        $this->nombre_chambres = $nombre_chambres;

        return $this;
    }

    public function getNombresCouchages(): ?int
    {
        return $this->nombres_couchages;
    }

    public function setNombresCouchages(int $nombres_couchages): static
    {
        $this->nombres_couchages = $nombres_couchages;

        return $this;
    }



    /**
     * @return Collection<int, Animaux>
     */
    public function getanimaux(): Collection
    {
        return $this->animaux;
    }

    public function addAnimaux(Animaux $animaux): static
    {
        if (!$this->animaux->contains($animaux)) {
            $this->animaux->add($animaux);
            $animaux->setGite($this);
        }

        return $this;
    }

    public function removeAnimaux(Animaux $animaux): static
    {
        if ($this->animaux->removeElement($animaux)) {
            // set the owning side to null (unless already changed)
            if ($animaux->getGite() === $this) {
                $animaux->setGite(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Tarifs>
     */
    public function getTarifs(): Collection
    {
        return $this->tarifs;
    }

    public function addTarif(Tarifs $tarif): static
    {
        if (!$this->tarifs->contains($tarif)) {
            $this->tarifs->add($tarif);
            $tarif->setGite($this);
        }

        return $this;
    }

    public function removeTarif(Tarifs $tarif): static
    {
        if ($this->tarifs->removeElement($tarif)) {
            // set the owning side to null (unless already changed)
            if ($tarif->getGite() === $this) {
                $tarif->setGite(null);
            }
        }

        return $this;
    }

    /**
     * Get the value of Contact
     *
     * @return ?Contacts
     */
    public function getContact(): ?Contacts
    {
        return $this->Contact;
    }

    /**
     * Set the value of Contact
     *
     * @param ?Contacts $Contact
     *
     * @return self
     */
    public function setContact(?Contacts $Contact): self
    {
        $this->Contact = $Contact;

        return $this;
    }

    /**
     * @return Collection<int, Equipements>
     */
    public function getEquipement(): Collection
    {
        return $this->equipement;
    }

    public function addEquipement(Equipements $equipement): static
    {
        if (!$this->equipement->contains($equipement)) {
            $this->equipement->add($equipement);
            $equipement->setGite($this);
        }

        return $this;
    }

    public function removeEquipement(Equipements $equipement): static
    {
        if ($this->equipement->removeElement($equipement)) {
            // set the owning side to null (unless already changed)
            if ($equipement->getGite() === $this) {
                $equipement->setGite(null);
            }
        }

        return $this;
    }

    /**
     * Get the value of proprietaire
     *
     * @return ?Proprietaire
     */
    public function getProprietaire(): ?Proprietaire
    {
        return $this->proprietaire;
    }

    /**
     * Set the value of proprietaire
     *
     * @param ?Proprietaire $proprietaire
     *
     * @return self
     */
    public function setProprietaire(?Proprietaire $proprietaire): self
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * Get the value of services
     *
     * @return Collection
     */
    public function getServices(): Collection
    {
        return $this->services;
    }

    /**
     * Set the value of services
     *
     * @param Collection $services
     *
     * @return self
     */
    public function setServices(Collection $services): self
    {
        $this->services = $services;

        return $this;
    }

    public function addService(Services $service): static
    {
        if (!$this->services->contains($service)) {
            $this->services->add($service);
            $service->setGites($this);
        }

        return $this;
    }

    public function removeService(Services $service): static
    {
        if ($this->services->removeElement($service)) {
            // set the owning side to null (unless already changed)
            if ($service->getGites() === $this) {
                $service->setGites(null);
            }
        }

        return $this;
    }


    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of departement
     *
     * @return ?string
     */
    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    /**
     * Set the value of departement
     *
     * @param ?string $departement
     *
     * @return self
     */
    public function setDepartement(?string $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get the value of region
     *
     * @return ?string
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * Set the value of region
     *
     * @param ?string $region
     *
     * @return self
     */
    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }
}
