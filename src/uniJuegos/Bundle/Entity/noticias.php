<?php

namespace uniJuegos\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * noticias
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class noticias
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
     * @ORM\Column(name="tituloNot", type="string", length=50)
     */
    private $tituloNot;

    /**
     * @var string
     *
     * @ORM\Column(name="textoNot", type="text")
     */
    private $textoNot;

    /**
     * @var string
     *
     * @ORM\Column(name="fotoNot", type="string", length=50)
     */
    private $fotoNot;


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
     * Set tituloNot
     *
     * @param string $tituloNot
     * @return noticias
     */
    public function setTituloNot($tituloNot)
    {
        $this->tituloNot = $tituloNot;

        return $this;
    }

    /**
     * Get tituloNot
     *
     * @return string 
     */
    public function getTituloNot()
    {
        return $this->tituloNot;
    }

    /**
     * Set textoNot
     *
     * @param string $textoNot
     * @return noticias
     */
    public function setTextoNot($textoNot)
    {
        $this->textoNot = $textoNot;

        return $this;
    }

    /**
     * Get textoNot
     *
     * @return string 
     */
    public function getTextoNot()
    {
        return $this->textoNot;
    }

    /**
     * Set fotoNot
     *
     * @param string $fotoNot
     * @return noticias
     */
    public function setFotoNot($fotoNot)
    {
        $this->fotoNot = $fotoNot;

        return $this;
    }

    /**
     * Get fotoNot
     *
     * @return string 
     */
    public function getFotoNot()
    {
        return $this->fotoNot;
    }
    
    /**
* @ORM\ManyToOne(targetEntity="juegos", inversedBy="juenots", cascade={"remove"})
*/

private $notjue;

    /**
     * Set notjue
     *
     * @param \uniJuegos\Bundle\Entity\juegos $notjue
     * @return noticias
     */
    public function setNotjue(\uniJuegos\Bundle\Entity\juegos $notjue = null)
    {
        $this->notjue = $notjue;

        return $this;
    }

    /**
     * Get notjue
     *
     * @return \uniJuegos\Bundle\Entity\juegos 
     */
    public function getNotjue()
    {
        return $this->notjue;
    }
    public function __toString() {
     return $this->tituloNot;}

}
