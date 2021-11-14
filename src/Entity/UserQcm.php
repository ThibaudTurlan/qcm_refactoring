<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserQcm
 *
 * @ORM\Table(name="user_qcm", indexes={@ORM\Index(name="fk_user_qcm_user1_idx", columns={"user_id_user"})})
 * @ORM\Entity
 */
class UserQcm
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_result", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idResult;

    /**
     * @var string
     *
     * @ORM\Column(name="title_movie", type="string", length=32, nullable=false)
     */
    private $titleMovie;

    /**
     * @var binary
     *
     * @ORM\Column(name="reply1", type="binary", nullable=false)
     */
    private $reply1 = '0';

    /**
     * @var binary
     *
     * @ORM\Column(name="reply2", type="binary", nullable=false)
     */
    private $reply2 = '0';

    /**
     * @var binary
     *
     * @ORM\Column(name="reply3", type="binary", nullable=false)
     */
    private $reply3 = '0';

    /**
     * @var binary
     *
     * @ORM\Column(name="reply4", type="binary", nullable=false)
     */
    private $reply4 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="score_qcm", type="integer", nullable=true)
     */
    private $scoreQcm;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id_user", referencedColumnName="id_user")
     * })
     */
    private $userIdUser;


}
