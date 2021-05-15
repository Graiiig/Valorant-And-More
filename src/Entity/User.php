<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
/**
 * @ORM\Entity
 * @UniqueEntity("email",
 * message="email.already.used")

 * @UniqueEntity("username",
 * message="username.already.used")
 */

class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $username;

    /**
     * @var string The email
     * @ORM\Column(type="string", unique=true)
     */
    private $email;

    /**
     * @var string the agent the user wants to play
     * @ORM\Column(type="string")
     */
    private $agent;


    /**
     *
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avatar;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $level;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateSignIn;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $languages;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $friendask;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $friendsend;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $teams;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $online;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    /**
     * @Assert\Regex(
     *          pattern = "(^.*[^\(.*[!@#$%^&*\]]{4,12}$)",
     *          match=true,
     *          message="username.not.valid")
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }



     /**
     * Email.
     *
     * @see UserInterface
     */
    /**
     * @Assert\Regex(
     *          pattern = "(^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$)",
     *          match=true,
     *          message="email.not.valid")
     */
    public function getEmail(): string
    {
        return (string) $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Agent.
     *
     * @see UserInterface
     */

    public function getAgent(): string
    {
        return (string) $this->agent;
    }

    public function setAgent(string $agent): self
    {
        $this->agent = $agent;

        return $this;
    }

     /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    /**
     * @Assert\Regex(
     *          pattern = "(^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$)",
     *          match=true,
     *          message="password.not.valid")
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

     /**
     * Many Users have Many Users.
     * @ORM\ManyToMany(targetEntity="User", mappedBy="myFriends")
     */
    private $friendsWithMe;

    /**
     * Many Users have many Users.
     * @ORM\ManyToMany(targetEntity="User", inversedBy="friendsWithMe")
     * @ORM\JoinTable(name="friends",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="friend_user_id", referencedColumnName="id")}
     *      )
     */
    private $myFriends;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $announce_status = "0";

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $premium ='0';


    public function __construct() {
        $this->friendsWithMe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->myFriends = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(string $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getDateSignIn(): ?\DateTimeInterface
    {
        return $this->DateSignIn;
    }

    public function setDateSignIn(\DateTimeInterface $DateSignIn): self
    {
        $this->DateSignIn = $DateSignIn;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLanguages(): ?string
    {
        return $this->languages;
    }

    public function setLanguages(?string $languages): self
    {
        $this->languages = $languages;

        return $this;
    }

    public function getFriendask(): ?string
    {
        return $this->friendask;
    }

    public function setFriendask(?string $friendask): self
    {
        $this->friendask = $friendask;

        return $this;
    }

    public function getFriendsend(): ?string
    {
        return $this->friendsend;
    }

    public function setFriendsend(?string $friendsend): self
    {
        $this->friendsend = $friendsend;

        return $this;
    }

    public function getTeams(): ?string
    {
        return $this->teams;
    }

    public function setTeams(?string $teams): self
    {
        $this->teams = $teams;

        return $this;
    }

    public function getOnline(): ?string
    {
        return $this->online;
    }

    public function setOnline(?string $online): self
    {
        $this->online = $online;

        return $this;
    }

    public function getMyFriends(){
        return $this->myFriends;
    }

    public function getfriendsWithMe(){
        return $this->friendsWithMe;
    }

    public function addFriend(User $friend){
        $this->myFriends->add($friend);
        // $friend->myFriends->add($this);
    }

    public function removeFriend(User $friend){
        $this->myFriends->removeElement($friend);
    }

    public function getAnnounceStatus(): ?string
    {
        return $this->announce_status;
    }

    public function setAnnounceStatus(string $announce_status): self
    {
        $this->announce_status = $announce_status;

        return $this;
    }

    public function getPremium(): ?string
    {
        return $this->premium;
    }

    public function setPremium(string $premium): self
    {
        $this->premium = $premium;

        return $this;
    }



}
