<?php

namespace App\Entity;

use App\Repository\PersonnageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonnageRepository::class)
 */
class Personnage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $life;

    /**
     * @ORM\Column(type="integer")
     */
    private $hungry;

    /**
     * @ORM\Column(type="integer")
     */
    private $psychic;

    /**
     * @ORM\Column(type="integer")
     */
    private $strike;

    /**
     * @ORM\Column(type="integer")
     */
    private $end;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLife(): ?int
    {
        return $this->life;
    }

    public function setLife(int $life): self
    {
        $this->life = $life;

        return $this;
    }

    public function getHungry(): ?int
    {
        return $this->hungry;
    }

    public function setHungry(int $hungry): self
    {
        $this->hungry = $hungry;

        return $this;
    }

    public function getPsychic(): ?int
    {
        return $this->psychic;
    }

    public function setPsychic(int $psychic): self
    {
        $this->psychic = $psychic;

        return $this;
    }

    public function getStrike(): ?int
    {
        return $this->strike;
    }

    public function setStrike(int $strike): self
    {
        $this->strike = $strike;

        return $this;
    }

    public function getEnd(): ?int
    {
        return $this->end;
    }

    public function setEnd(int $end): self
    {
        $this->end = $end;

        return $this;
    }
}
