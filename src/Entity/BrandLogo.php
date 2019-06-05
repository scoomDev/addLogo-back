<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\BrandLogoRepository")
 */
class BrandLogo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $brandName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logo1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logo2;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $accessPwd;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\BrandColor")
     */
    private $colors;

    public function __construct()
    {
        $this->colors = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    public function setBrandName(string $brandName): self
    {
        $this->brandName = $brandName;

        return $this;
    }

    public function getLogo1(): ?string
    {
        return $this->logo1;
    }

    public function setLogo1(?string $logo1): self
    {
        $this->logo1 = $logo1;

        return $this;
    }

    public function getLogo2(): ?string
    {
        return $this->logo2;
    }

    public function setLogo2(?string $logo2): self
    {
        $this->logo2 = $logo2;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getAccessPwd(): ?string
    {
        return $this->accessPwd;
    }

    public function setAccessPwd(string $accessPwd): self
    {
        $this->accessPwd = $accessPwd;

        return $this;
    }

    /**
     * @return Collection|BrandColor[]
     */
    public function getColors(): Collection
    {
        return $this->colors;
    }

    public function addColor(BrandColor $color): self
    {
        if (!$this->colors->contains($color)) {
            $this->colors[] = $color;
        }

        return $this;
    }

    public function removeColor(BrandColor $color): self
    {
        if ($this->colors->contains($color)) {
            $this->colors->removeElement($color);
        }

        return $this;
    }
}
