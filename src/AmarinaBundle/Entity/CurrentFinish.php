<?php

namespace AmarinaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CurrentFinish
 *
 * @ORM\Table(name="current_finish")
 * @ORM\Entity(repositoryClass="AmarinaBundle\Repository\CurrentFinishRepository")
 */
class CurrentFinish
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="codFinist", type="integer")
     */
    private $codFinist;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=80)
     */
    private $name;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codFinist
     *
     * @param integer $codFinist
     *
     * @return CurrentFinish
     */
    public function setCodFinist($codFinist)
    {
        $this->codFinist = $codFinist;

        return $this;
    }

    /**
     * Get codFinist
     *
     * @return int
     */
    public function getCodFinist()
    {
        return $this->codFinist;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return CurrentFinish
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

