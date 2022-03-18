<?php

namespace App\Entity;

use App\Repository\TournoiRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TournoiRepository::class)]
class Tournoi
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 150)]
    private $nom;

    #[ORM\Column(type: 'string', length: 150, nullable: true)]
    private $ville;

    #[ORM\Column(type: 'date')]
    private $date;

    #[ORM\Column(type: 'boolean', options: ["default" => 0])]
    private $isClassed;

    #[ORM\Column(type: 'integer', nullable: true, options: ["default" => 0])]
    private $eloMin;

    #[ORM\Column(type: 'integer', nullable: true, options: ["default" => 0])]
    private $eloMax;

    #[ORM\Column(type: 'string', length: 1)]
    private $genreParticipants;

    #[ORM\Column(type: 'string', length: 100)]
    private $type;

    #[ORM\Column(type: 'integer', nullable: true, options: ["default" => 0])]
    private $nbRonde;

    #[ORM\Column(type: 'integer', nullable: true, options: ["default" => 2])]
    private $nbMinJoueurs;

    #[ORM\Column(type: 'integer', nullable: true, options: ["default" => 2])]
    private $nbMaxJoueurs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getIsClassed(): ?bool
    {
        return $this->isClassed;
    }

    public function setIsClassed(bool $isClassed): self
    {
        $this->isClassed = $isClassed;

        return $this;
    }

    public function getEloMin(): ?int
    {
        return $this->eloMin;
    }

    public function setEloMin(?int $eloMin): self
    {
        $this->eloMin = $eloMin;

        return $this;
    }

    public function getEloMax(): ?int
    {
        return $this->eloMax;
    }

    public function setEloMax(?int $eloMax): self
    {
        $this->eloMax = $eloMax;

        return $this;
    }

    public function getGenreParticipants(): ?string
    {
        return $this->genreParticipants;
    }

    public function setGenreParticipants(string $genreParticipants): self
    {
        $this->genreParticipants = $genreParticipants;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNbRonde(): ?int
    {
        return $this->nbRonde;
    }

    public function setNbRonde(int $nbRonde): self
    {
        $this->nbRonde = $nbRonde;

        return $this;
    }

    public function getNbMinJoueurs(): ?int
    {
        return $this->nbMinJoueurs;
    }

    public function setNbMinJoueurs(int $nbMinJoueurs): self
    {
        $this->nbMinJoueurs = $nbMinJoueurs;

        return $this;
    }

    public function getNbMaxJoueurs(): ?int
    {
        return $this->nbMaxJoueurs;
    }

    public function setNbMaxJoueurs(int $nbMaxJoueurs): self
    {
        $this->nbMaxJoueurs = $nbMaxJoueurs;

        return $this;
    }
}
