<?php

namespace App\Entity;

use App\Repository\PhotographyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PhotographyRepository::class)]
class Photography
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: PhotoCategory::class, inversedBy: 'photographies')]
    private $Category;

    #[ORM\Column(type: 'string', length: 255)]
    private $location;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategory(): ?PhotoCategory
    {
        return $this->Category;
    }

    public function setCategory(?PhotoCategory $Category): self
    {
        $this->Category = $Category;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }
}
