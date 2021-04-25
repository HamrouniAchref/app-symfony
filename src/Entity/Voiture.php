<?php

namespace App\Entity;

use App\Entity\Agence;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\VoitureRepository;

/**
 * @ORM\Entity(repositoryClass=VoitureRepository::class)
 */
class Voiture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Agence", inversedBy="voitures")
     * @ORM\JoinColumn(nullable=false)

     */
    private $agence;

    public function getAgence(): ?Agence
    {
        return $this->agence;
    }

    public function setAgence(?Agence $agence): self
    {
        $this->agence = $agence;

        return $this;
    }
    
    
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Matricule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Marque;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Couleur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Carburant;

    /**
     * @ORM\Column(type="integer")
     */
    private $NbrPlace;

    /**
     * @ORM\Column(type="string", length=600)
     */
    private $Description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Disponibilite;

    /**
     * @ORM\Column(type="date")
     */
    private $dateMiseEnCirculation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->Matricule;
    }

    public function setMatricule(?string $Matricule): self
    {
        $this->Matricule = $Matricule;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->Marque;
    }

    public function setMarque(string $Marque): self
    {
        $this->Marque = $Marque;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->Couleur;
    }

    public function setCouleur(string $Couleur): self
    {
        $this->Couleur = $Couleur;

        return $this;
    }

    public function getCarburant(): ?string
    {
        return $this->Carburant;
    }

    public function setCarburant(string $Carburant): self
    {
        $this->Carburant = $Carburant;

        return $this;
    }

    public function getNbrPlace(): ?int
    {
        return $this->NbrPlace;
    }

    public function setNbrPlace(int $NbrPlace): self
    {
        $this->NbrPlace = $NbrPlace;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getDisponibilite(): ?bool
    {
        return $this->Disponibilite;
    }

    public function setDisponibilite(bool $Disponibilite): self
    {
        $this->Disponibilite = $Disponibilite;

        return $this;
    }

    public function getDateMiseEnCirculation(): ?\DateTimeInterface
    {
        return $this->dateMiseEnCirculation;
    }

    public function setDateMiseEnCirculation(\DateTimeInterface $dateMiseEnCirculation): self
    {
        $this->dateMiseEnCirculation = $dateMiseEnCirculation;

        return $this;
    }

    
}
