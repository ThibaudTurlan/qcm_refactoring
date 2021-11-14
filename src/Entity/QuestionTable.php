<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionTable
 *
 * @ORM\Table(name="question_table")
 * @ORM\Entity
 */
class QuestionTable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_qestion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQestion;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=128, nullable=false)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="reply1", type="string", length=128, nullable=false)
     */
    private $reply1;

    /**
     * @var string
     *
     * @ORM\Column(name="reply2", type="string", length=128, nullable=false)
     */
    private $reply2;

    /**
     * @var string
     *
     * @ORM\Column(name="reply3", type="string", length=128, nullable=false)
     */
    private $reply3;

    /**
     * @var string
     *
     * @ORM\Column(name="reply4", type="string", length=128, nullable=false)
     */
    private $reply4;

    /**
     * @var string
     *
     * @ORM\Column(name="good_reply", type="string", length=128, nullable=false)
     */
    private $goodReply;


}
