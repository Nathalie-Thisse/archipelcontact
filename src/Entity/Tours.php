<?php

namespace App\Entity;

use App\Repository\ToursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ToursRepository::class)
 */
class Tours
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=300, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $duration;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $islands;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $map;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $included;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $notIncluded;

    /**
     * @ORM\OneToMany(targetEntity=Days::class, mappedBy="tours")
     */
    private $days;

    public function __construct()
    {
        $this->days = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getIslands(): ?string
    {
        return $this->islands;
    }

    public function setIslands(?string $islands): self
    {
        $this->islands = $islands;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getMap(): ?string
    {
        return $this->map;
    }

    public function setMap(?string $map): self
    {
        $this->map = $map;

        return $this;
    }

    public function getIncluded(): ?string
    {
        return $this->included;
    }

    public function setIncluded(?string $included): self
    {
        $this->included = $included;

        return $this;
    }

    public function getNotIncluded(): ?string
    {
        return $this->notIncluded;
    }

    public function setNotIncluded(?string $notIncluded): self
    {
        $this->notIncluded = $notIncluded;

        return $this;
    }

    /**
     * @return Collection|Days[]
     */
    public function getDays(): Collection
    {
        return $this->days;
    }

    public function addDay(Days $day): self
    {
        if (!$this->days->contains($day)) {
            $this->days[] = $day;
            $day->setTours($this);
        }

        return $this;
    }

    public function removeDay(Days $day): self
    {
        if ($this->days->removeElement($day)) {
            // set the owning side to null (unless already changed)
            if ($day->getTours() === $this) {
                $day->setTours(null);
            }
        }

        return $this;
    }
}
