<?php

namespace AmarinaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mueble
 *
 * @ORM\Table(name="mueble")
 * @ORM\Entity(repositoryClass="AmarinaBundle\Repository\MuebleRepository")
 */
class Mueble
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
     * @var string
     *
     * @ORM\Column(name="cod_ur", type="string", length=40)
     */
    private $codUr;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", nullable=true)
     */
    private $price;

    /**
     * @var float
     *
     * @ORM\Column(name="width", type="float", nullable=true)
     */
    private $width;

    /**
     * @var float
     *
     * @ORM\Column(name="height", type="float", nullable=true)
     */
    private $height;

    /**
     * @var float
     *
     * @ORM\Column(name="deep", type="float", nullable=true)
     */
    private $deep;

    /**
     * @var float
     *
     * @ORM\Column(name="diameter", type="float", nullable=true)
     */
    private $diameter;


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
     * Set codUr
     *
     * @param string $codUr
     *
     * @return Mueble
     */
    public function setCodUr($codUr)
    {
        $this->codUr = $codUr;

        return $this;
    }

    /**
     * Get codUr
     *
     * @return string
     */
    public function getCodUr()
    {
        return $this->codUr;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Mueble
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

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Mueble
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set width
     *
     * @param float $width
     *
     * @return Mueble
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param float $height
     *
     * @return Mueble
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set deep
     *
     * @param float $deep
     *
     * @return Mueble
     */
    public function setDeep($deep)
    {
        $this->deep = $deep;

        return $this;
    }

    /**
     * Get deep
     *
     * @return float
     */
    public function getDeep()
    {
        return $this->deep;
    }

    /**
     * Set diameter
     *
     * @param float $diameter
     *
     * @return Mueble
     */
    public function setDiameter($diameter)
    {
        $this->diameter = $diameter;

        return $this;
    }

    /**
     * Get diameter
     *
     * @return float
     */
    public function getDiameter()
    {
        return $this->diameter;
    }
}

