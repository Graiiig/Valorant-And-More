<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TeamsRepository")
 */
class Teams
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $creator;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateposted;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $availableslots;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $requirements;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mediumlevel;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $premium_status;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $member1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $member2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $member3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $member4;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
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

    public function getCreator(): ?string
    {
        return $this->creator;
    }

    public function setCreator(?string $creator): self
    {
        $this->creator = $creator;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDateposted(): ?\DateTimeInterface
    {
        return $this->dateposted;
    }

    public function setDateposted(?\DateTimeInterface $dateposted): self
    {
        $this->dateposted = $dateposted;

        return $this;
    }

    public function getAvailableslots(): ?string
    {
        return $this->availableslots;
    }

    public function setAvailableslots(?string $availableslots): self
    {
        $this->availableslots = $availableslots;

        return $this;
    }


    public function getRequirements(): ?string
    {
        return $this->requirements;
    }

    public function setRequirements(?string $requirements): self
    {
        $this->requirements = $requirements;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getMediumlevel(): ?string
    {
        return $this->mediumlevel;
    }

    public function setMediumlevel(?string $mediumlevel): self
    {
        $this->mediumlevel = $mediumlevel;

        return $this;
    }

    public function getPremiumStatus(): ?string
    {
        return $this->premium_status;
    }

    public function setPremiumStatus(?string $premium_status): self
    {
        $this->premium_status = $premium_status;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getMember1(): ?string
    {
        return $this->member1;
    }

    public function setMember1(string $member1): self
    {
        $this->member1 = $member1;

        return $this;
    }

    public function getMember2(): ?string
    {
        return $this->member2;
    }

    public function setMember2(string $member2): self
    {
        $this->member2 = $member2;

        return $this;
    }

    public function getMember3(): ?string
    {
        return $this->member3;
    }

    public function setMember3(string $member3): self
    {
        $this->member3 = $member3;

        return $this;
    }

    public function getMember4(): ?string
    {
        return $this->member4;
    }

    public function setMember4(string $member4): self
    {
        $this->member4 = $member4;

        return $this;
    }
}
