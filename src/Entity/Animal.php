<?php

namespace App\Entity;

use App\Repository\AnimalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnimalRepository::class)
 */
class Animal
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
     * @ORM\Column(type="float")
     */
    private $tailleMoyenne;

    /**
     * @ORM\ManyToOne(targetEntity=Country::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $country;

    /**
     * @ORM\Column(type="float")
     */
    private $moyenneVie;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $artMartial;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $phoneNumber;

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

    public function getTailleMoyenne(): ?float
    {
        return $this->tailleMoyenne;
    }

    public function setTailleMoyenne(float $tailleMoyenne): self
    {
        $this->tailleMoyenne = $tailleMoyenne;

        return $this;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getMoyenneVie(): ?float
    {
        return $this->moyenneVie;
    }

    public function setMoyenneVie(float $moyenneVie): self
    {
        $this->moyenneVie = $moyenneVie;

        return $this;
    }

    public function getArtMartial(): ?string
    {
        return $this->artMartial;
    }

    public function setArtMartial(string $artMartial): self
    {
        $this->artMartial = $artMartial;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
}
