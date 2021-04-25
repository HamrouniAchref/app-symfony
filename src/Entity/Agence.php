<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AgenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\Voiture;

/**
 * @ORM\Entity(repositoryClass=AgenceRepository::class)
 */
class Agence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

// ...

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Voiture", mappedBy="agence")
     */
    private $voitures;

    public function __construct()
    {
        $this->voitures = new ArrayCollection();
    }

    /**
     * @return Collection|Voiture[]
     */
    public function getVoitures()
    {
        return $this->voitures;
    }



    /**
     * @ORM\Column(type="string", length=300)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel_agence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getTelAgence(): ?string
    {
        return $this->tel_agence;
    }

    public function setTelAgence(string $tel_agence): self
    {
        $this->tel_agence = $tel_agence;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }
    public function __toString()
    {
        return $this->Nom;
    }
}
