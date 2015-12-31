<?php

namespace uniJuegos\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * plataforma
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class plataforma
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
     * @ORM\Column(name="nombrePlat", type="string", length=50)
     */
    private $nombrePlat;


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
     * Set nombrePlat
     *
     * @param string $nombrePlat
     * @return plataforma
     */
    public function setNombrePlat($nombrePlat)
    {
        $this->nombrePlat = $nombrePlat;

        return $this;
    }

    /**
     * Get nombrePlat
     *
     * @return string 
     */
    public function getNombrePlat()
    {
        return $this->nombrePlat;
    }
    
    /**
* @ORM\ManyToMany(targetEntity="juegos", inversedBy="jueplat")
*/

private $platjue;

public function __construct() {
$this->platjue = new ArrayCollection();
}


    /**
     * Add platjue
     *
     * @param \uniJuegos\Bundle\Entity\juegos $platjue
     * @return plataforma
     */
    public function addPlatjue(\uniJuegos\Bundle\Entity\juegos $platjue)
    {
        $this->platjue[] = $platjue;

        return $this;
    }

    /**
     * Remove platjue
     *
     * @param \uniJuegos\Bundle\Entity\juegos $platjue
     */
    public function removePlatjue(\uniJuegos\Bundle\Entity\juegos $platjue)
    {
        $this->platjue->removeElement($platjue);
    }

    /**
     * Get platjue
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlatjue()
    {
        return $this->platjue;
    }
    public function __toString() {
     return $this->nombrePlat;}
}
