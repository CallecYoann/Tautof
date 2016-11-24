<?php

namespace tautof\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="Modele", indexes={@ORM\Index(name="marque_id", columns={"marque_id"})})
 * @ORM\Entity
 */
class Modele
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=125, nullable=false)
     */
    private $nom = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \tautof\PlatformBundle\Entity\Marque
     *
     * @ORM\ManyToOne(targetEntity="tautof\PlatformBundle\Entity\Marque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="marque_id", referencedColumnName="id")
     * })
     */
    private $marque;



    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Modele
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

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
     * Set marque
     *
     * @param \tautof\PlatformBundle\Entity\Marque $marque
     *
     * @return Modele
     */
    public function setMarque(\tautof\PlatformBundle\Entity\Marque $marque = null)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return \tautof\PlatformBundle\Entity\Marque
     */
    public function getMarque()
    {
        return $this->marque;
    }

    public function __toString()
    {
        return $this->nom;
    }

}
