<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\BrandColorRepository")
 */
class BrandColor
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
    private $hex;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $red;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $green;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $blue;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHex(): ?string
    {
        return $this->hex;
    }

    public function setHex(string $hex): self
    {
        $this->hex = $hex;

        return $this;
    }

    public function getRed(): ?string
    {
        return $this->red;
    }

    public function setRed(?string $red): self
    {
        $this->red = $red;

        return $this;
    }

    public function getGreen(): ?string
    {
        return $this->green;
    }

    public function setGreen(?string $green): self
    {
        $this->green = $green;

        return $this;
    }

    public function getBlue(): ?string
    {
        return $this->blue;
    }

    public function setBlue(?string $blue): self
    {
        $this->blue = $blue;

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
}
