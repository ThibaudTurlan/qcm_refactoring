<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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


}
