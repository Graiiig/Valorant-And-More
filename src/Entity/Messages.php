<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MessagesRepository")
 */
class Messages
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
    private $sender;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $receiver;

    /**
     * @ORM\Column(type="text")
     */
    private $msg;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $readbyreceiver;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $notified;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSender(): ?string
    {
        return $this->sender;
    }

    public function setSender(string $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getReceiver(): ?string
    {
        return $this->receiver;
    }

    public function setReceiver(string $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    public function getMsg(): ?string
    {
        return $this->msg;
    }

    public function setMsg(string $msg): self
    {
        $this->msg = $msg;

        return $this;
    }

    public function getReadbyreceiver(): ?string
    {
        return $this->readbyreceiver;
    }

    public function setReadbyreceiver(string $readbyreceiver): self
    {
        $this->readbyreceiver = $readbyreceiver;

        return $this;
    }

    public function getNotified(): ?string
    {
        return $this->notified;
    }

    public function setNotified(string $notified): self
    {
        $this->notified = $notified;

        return $this;
    }
}
