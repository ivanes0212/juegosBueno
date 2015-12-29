<?php

namespace uniJuegos\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * categorias
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class categorias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreCat", type="string", length=50)
     */
    private $nombreCat;

    /**
     * @var string
     *
     * @ORM\Column(name="descCat", type="string", length=50)
     */
    private $descCat;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreCat
     *
     * @param string $nombreCat
     * @return categorias
     */
    public function setNombreCat($nombreCat)
    {
        $this->nombreCat = $nombreCat;

        return $this;
    }

    /**
     * Get nombreCat
     *
     * @return string 
     */
    public function getNombreCat()
    {
        return $this->nombreCat;
    }

    /**
     * Set descCat
     *
     * @param string $descCat
     * @return categorias
     */
    public function setDescCat($descCat)
    {
        $this->descCat = $descCat;

        return $this;
    }

    /**
     * Get descCat
     *
     * @return string 
     */
    public function getDescCat()
    {
        return $this->descCat;
    }
    
    /**
* @ORM\OneToMany(targetEntity="juegos", mappedBy="juecat", cascade={"remove"})
*/

private $catjues;

public function __construct() {
$this->catjues = new ArrayCollection();
}

    /**
     * Add catjues
     *
     * @param \uniJuegos\Bundle\Entity\juegos $catjues
     * @return categorias
     */
    public function addCatjue(\uniJuegos\Bundle\Entity\juegos $catjues)
    {
        $this->catjues[] = $catjues;

        return $this;
    }

    /**
     * Remove catjues
     *
     * @param \uniJuegos\Bundle\Entity\juegos $catjues
     */
    public function removeCatjue(\uniJuegos\Bundle\Entity\juegos $catjues)
    {
        $this->catjues->removeElement($catjues);
    }

    /**
     * Get catjues
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCatjues()
    {
        return $this->catjues;
    }
    public function __toString() {
     return $this->nombreCat;}
}
