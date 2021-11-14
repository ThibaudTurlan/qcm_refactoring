<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QcmTable
 *
 * @ORM\Table(name="qcm_table", indexes={@ORM\Index(name="fk_qcm_table_user1_idx", columns={"user_id_user"}), @ORM\Index(name="fk_qcm_table_question_table1_idx", columns={"question_table_id_qestion"})})
 * @ORM\Entity
 */
class QcmTable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_qcm", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQcm;

    /**
     * @var string
     *
     * @ORM\Column(name="title_movie", type="string", length=64, nullable=false)
     */
    private $titleMovie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="poster_movie", type="string", length=128, nullable=true)
     */
    private $posterMovie;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_at", type="datetime", nullable=true)
     */
    private $dateAt;

    /**
     * @var \QuestionTable
     *
     * @ORM\ManyToOne(targetEntity="QuestionTable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="question_table_id_qestion", referencedColumnName="id_qestion")
     * })
     */
    private $questionTableIdQestion;

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
