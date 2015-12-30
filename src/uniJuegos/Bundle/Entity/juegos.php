<?php

namespace uniJuegos\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * juegos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class juegos
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
     * @ORM\Column(name="tituloJue", type="string", length=50)
     */
    private $tituloJue;

    /**
     * @var string
     *
     * @ORM\Column(name="descJue", type="text")
     */
    private $descJue;

    /**
     * @var string
     *
     * @ORM\Column(name="compJue", type="string", length=50)
     */
    private $compJue;

    /**
     * @var string
     *
     * @ORM\Column(name="fotoJue", type="string", length=50)
     */
    private $fotoJue;

    /**
     * @var string
     *
     * @ORM\Column(name="iconoJue", type="string", length=50)
     */
    private $iconoJue;


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
     * Set tituloJue
     *
     * @param string $tituloJue
     * @return juegos
     */
    public function setTituloJue($tituloJue)
    {
        $this->tituloJue = $tituloJue;

        return $this;
    }

    /**
     * Get tituloJue
     *
     * @return string 
     */
    public function getTituloJue()
    {
        return $this->tituloJue;
    }

    /**
     * Set descJue
     *
     * @param string $descJue
     * @return juegos
     */
    public function setDescJue($descJue)
    {
        $this->descJue = $descJue;

        return $this;
    }

    /**
     * Get descJue
     *
     * @return string 
     */
    public function getDescJue()
    {
        return $this->descJue;
    }

    /**
     * Set compJue
     *
     * @param string $compJue
     * @return juegos
     */
    public function setCompJue($compJue)
    {
        $this->compJue = $compJue;

        return $this;
    }

    /**
     * Get compJue
     *
     * @return string 
     */
    public function getCompJue()
    {
        return $this->compJue;
    }

    /**
     * Set fotoJue
     *
     * @param string $fotoJue
     * @return juegos
     */
    public function setFotoJue($fotoJue)
    {
        $this->fotoJue = $fotoJue;

        return $this;
    }

    /**
     * Get fotoJue
     *
     * @return string 
     */
    public function getFotoJue()
    {
        return $this->fotoJue;
    }

    /**
     * Set iconoJue
     *
     * @param string $iconoJue
     * @return juegos
     */
    public function setIconoJue($iconoJue)
    {
        $this->iconoJue = $iconoJue;

        return $this;
    }

    /**
     * Get iconoJue
     *
     * @return string 
     */
    public function getIconoJue()
    {
        return $this->iconoJue;
    }
    
           /**
* @ORM\ManyToOne(targetEntity="categorias", inversedBy="catjues", cascade={"remove"})
*/

private $juecat;

    /**
     * Set juecat
     *
     * @param \uniJuegos\Bundle\Entity\categorias $juecat
     * @return juegos
     */
    public function setJuecat(\uniJuegos\Bundle\Entity\categorias $juecat = null)
    {
        $this->juecat = $juecat;

        return $this;
    }

    /**
     * Get juecat
     *
     * @return \uniJuegos\Bundle\Entity\categorias 
     */
    public function getJuecat()
    {
        return $this->juecat;
    }
    public function __toString() {
     return $this->tituloJue;}
     
     
           /**
* @ORM\ManyToMany(targetEntity="plataforma", mappedBy="platjue")
*/

private $jueplat;

public function __construct() {
$this->jueplat = new ArrayCollection();
$this->juenots = new ArrayCollection();
}

    /**
     * Add jueplat
     *
     * @param \uniJuegos\Bundle\Entity\plataforma $jueplat
     * @return juegos
     */
    public function addJueplat(\uniJuegos\Bundle\Entity\plataforma $jueplat)
    {
        $this->jueplat[] = $jueplat;

        return $this;
    }

    /**
     * Remove jueplat
     *
     * @param \uniJuegos\Bundle\Entity\plataforma $jueplat
     */
    public function removeJueplat(\uniJuegos\Bundle\Entity\plataforma $jueplat)
    {
        $this->jueplat->removeElement($jueplat);
    }

    /**
     * Get jueplat
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJueplat()
    {
        return $this->jueplat;
    }
    
    /**
* @ORM\OneToMany(targetEntity="noticias", mappedBy="notjue", cascade={"remove"})
*/

private $juenots;

    /**
     * Add juenots
     *
     * @param \uniJuegos\Bundle\Entity\noticias $juenots
     * @return juegos
     */
    public function addJuenot(\uniJuegos\Bundle\Entity\noticias $juenots)
    {
        $this->juenots[] = $juenots;

        return $this;
    }

    /**
     * Remove juenots
     *
     * @param \uniJuegos\Bundle\Entity\noticias $juenots
     */
    public function removeJuenot(\uniJuegos\Bundle\Entity\noticias $juenots)
    {
        $this->juenots->removeElement($juenots);
    }

    /**
     * Get juenots
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJuenots()
    {
        return $this->juenots;
    }
}
