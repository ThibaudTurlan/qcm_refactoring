<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=16, nullable=false)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=32, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="text", length=0, nullable=false)
     */
    private $password;

    /**
     * @var binary|null
     *
     * @ORM\Column(name="author", type="binary", nullable=true)
     */
    private $author = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_time", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createTime = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=16, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="first_name", type="string", length=16, nullable=true)
     */
    private $firstName;

    /**
     * @var json|null
     *
     * @ORM\Column(name="roles", type="json", nullable=true)
     */
    private $roles;

    /**
     * @Assert\EqualTo(propertyPath="password",message="votre comfirmation mot de passe n'est pas valide")
     */
    public $confirme_password;

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getCreateTime(): ?\DateTimeInterface
    {
        return $this->createTime;
    }

    public function setCreateTime(?\DateTimeInterface $createTime): self
    {
        $this->createTime = $createTime;

        return $this;
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

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getRoles(): ?array
    {
        return $this->roles;
    }

    public function setRoles(?array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }


}
