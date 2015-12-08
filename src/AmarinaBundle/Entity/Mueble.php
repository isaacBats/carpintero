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
     *@var Style
     *@ORM\ManyToOne(targetEntity="Style")
     *@ORM\Joincolumn(name="style_id", referencedColumnName="id")
     */
    private $style;

    /**
     *@var Type
     *@ORM\ManyToOne(targetEntity="Type")
     *@ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;

    /**
     *@var Group
     *@ORM\ManyToOne(targetEntity="Group")
     *@ORM\JoinColumn(name="group_id", referencedColumnName="id")
     */
    private $group;

    /**
     *@var Category
     *@ORM\ManyToOne(targetEntity="Category")
     *@ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     *@var Character
     *@ORM\ManyToOne(targetEntity="Character")
     *@ORM\JoinColumn(name="character_id", referencedColumnName="id") 
     */
    private $character;

    /**
     *@var Finish
     *@ORM\ManyToMany(targetEntity="Finish", inversedBy="muebles")
     *@ORM\JoinTable(name="muebles_finishs",
     *               joinColumns={
     *                  @ORM\JoinColumn(name="muebles_id", referencedColumnName="id")
     *               },
     *               inverseJoinColumns={
     *                  @ORM\JoinColumn(name="finish_id", referencedColumnName="id")       
     *               }
     * ) 
     */
    private $finishs;

    /**
     *@var CurrentFinish
     *@ORM\ManyToOne(targetEntity="CurrentFinish")
     *@ORM\JoinColumn(name="currentFinish_id", referencedColumnName="id")
     */
    private $currentFinish;

    public function __construct(){
        $this->finishs = new \Doctrine\Common\Collections\ArrayCollection();
    }


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

    /**
     * Set style
     *
     * @param \AmarinaBundle\Entity\Style $style
     *
     * @return Mueble
     */
    public function setStyle(\AmarinaBundle\Entity\Style $style = null)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style
     *
     * @return \AmarinaBundle\Entity\Style
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set type
     *
     * @param \AmarinaBundle\Entity\Type $type
     *
     * @return Mueble
     */
    public function setType(\AmarinaBundle\Entity\Type $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AmarinaBundle\Entity\Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set group
     *
     * @param \AmarinaBundle\Entity\Group $group
     *
     * @return Mueble
     */
    public function setGroup(\AmarinaBundle\Entity\Group $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \AmarinaBundle\Entity\Group
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set category
     *
     * @param \AmarinaBundle\Entity\Category $category
     *
     * @return Mueble
     */
    public function setCategory(\AmarinaBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AmarinaBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set character
     *
     * @param \AmarinaBundle\Entity\Character $character
     *
     * @return Mueble
     */
    public function setCharacter(\AmarinaBundle\Entity\Character $character = null)
    {
        $this->character = $character;

        return $this;
    }

    /**
     * Get character
     *
     * @return \AmarinaBundle\Entity\Character
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Add finish
     *
     * @param \AmarinaBundle\Entity\Finish $finish
     *
     * @return Mueble
     */
    public function addFinish(\AmarinaBundle\Entity\Finish $finish)
    {
        $this->finishs[] = $finish;

        return $this;
    }

    /**
     * Remove finish
     *
     * @param \AmarinaBundle\Entity\Finish $finish
     */
    public function removeFinish(\AmarinaBundle\Entity\Finish $finish)
    {
        $this->finishs->removeElement($finish);
    }

    /**
     * Get finishs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFinishs()
    {
        return $this->finishs;
    }

    /**
     * Set currentFinish
     *
     * @param \AmarinaBundle\Entity\CurrentFinish $currentFinish
     *
     * @return Mueble
     */
    public function setCurrentFinish(\AmarinaBundle\Entity\CurrentFinish $currentFinish = null)
    {
        $this->currentFinish = $currentFinish;

        return $this;
    }

    /**
     * Get currentFinish
     *
     * @return \AmarinaBundle\Entity\CurrentFinish
     */
    public function getCurrentFinish()
    {
        return $this->currentFinish;
    }
}
