<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\FrancaisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FrancaisRepository::class)]
#[ApiResource]
class Francais
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $groupe_de_mots = null;

    #[ORM\Column(length: 255)]
    private ?string $fonction = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $personne = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupeDeMots(): ?string
    {
        return $this->groupe_de_mots;
    }

    public function setGroupeDeMots(string $groupe_de_mots): self
    {
        $this->groupe_de_mots = $groupe_de_mots;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getPersonne(): ?string
    {
        return $this->personne;
    }

    public function setPersonne(?string $personne): self
    {
        $this->personne = $personne;

        return $this;
    }
}
