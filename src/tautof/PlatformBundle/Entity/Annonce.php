<?php

namespace tautof\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="Annonce", indexes={@ORM\Index(name="modele_id", columns={"modele_id", "couleur_id", "utilisateur_id"}), @ORM\Index(name="join_couleur", columns={"couleur_id"}), @ORM\Index(name="join_user", columns={"utilisateur_id"}), @ORM\Index(name="IDX_39E8AA79AC14B70A", columns={"modele_id"})})
 * @ORM\Entity
 */
class Annonce
{
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=80, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="boite", type="string", length=80, nullable=false)
     */
    private $boite;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="km", type="integer", nullable=false)
     */
    private $km;

    /**
     * @var string
     *
     * @ORM\Column(name="photo1", type="string", length=60, nullable=false)
     */
    private $photo1;

    /**
     * @var string
     *
     * @ORM\Column(name="photo2", type="string", length=60, nullable=false)
     */
    private $photo2;

    /**
     * @var string
     *
     * @ORM\Column(name="photo3", type="string", length=60, nullable=false)
     */
    private $photo3;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \tautof\PlatformBundle\Entity\Couleur
     *
     * @ORM\ManyToOne(targetEntity="tautof\PlatformBundle\Entity\Couleur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="couleur_id", referencedColumnName="id")
     * })
     */
    private $couleur;

    /**
     * @var \tautof\PlatformBundle\Entity\Modele
     *
     * @ORM\ManyToOne(targetEntity="tautof\PlatformBundle\Entity\Modele")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modele_id", referencedColumnName="id")
     * })
     */
    private $modele;

    /**
     * @var \tautof\PlatformBundle\Entity\Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="tautof\PlatformBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")
     * })
     */
    private $utilisateur;



    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set boite
     *
     * @param string $boite
     *
     * @return Annonce
     */
    public function setBoite($boite)
    {
        $this->boite = $boite;

        return $this;
    }

    /**
     * Get boite
     *
     * @return string
     */
    public function getBoite()
    {
        return $this->boite;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Annonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set km
     *
     * @param integer $km
     *
     * @return Annonce
     */
    public function setKm($km)
    {
        $this->km = $km;

        return $this;
    }

    /**
     * Get km
     *
     * @return integer
     */
    public function getKm()
    {
        return $this->km;
    }

    /**
     * Set photo1
     *
     * @param string $photo1
     *
     * @return Annonce
     */
    public function setPhoto1($photo1)
    {
        $this->photo1 = $photo1;

        return $this;
    }

    /**
     * Get photo1
     *
     * @return string
     */
    public function getPhoto1()
    {
        return $this->photo1;
    }

    /**
     * Set photo2
     *
     * @param string $photo2
     *
     * @return Annonce
     */
    public function setPhoto2($photo2)
    {
        $this->photo2 = $photo2;

        return $this;
    }

    /**
     * Get photo2
     *
     * @return string
     */
    public function getPhoto2()
    {
        return $this->photo2;
    }

    /**
     * Set photo3
     *
     * @param string $photo3
     *
     * @return Annonce
     */
    public function setPhoto3($photo3)
    {
        $this->photo3 = $photo3;

        return $this;
    }

    /**
     * Get photo3
     *
     * @return string
     */
    public function getPhoto3()
    {
        return $this->photo3;
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
     * Set couleur
     *
     * @param \tautof\PlatformBundle\Entity\Couleur $couleur
     *
     * @return Annonce
     */
    public function setCouleur(\tautof\PlatformBundle\Entity\Couleur $couleur = null)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return \tautof\PlatformBundle\Entity\Couleur
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set modele
     *
     * @param \tautof\PlatformBundle\Entity\Modele $modele
     *
     * @return Annonce
     */
    public function setModele(\tautof\PlatformBundle\Entity\Modele $modele = null)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return \tautof\PlatformBundle\Entity\Modele
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set utilisateur
     *
     * @param \tautof\PlatformBundle\Entity\Utilisateur $utilisateur
     *
     * @return Annonce
     */
    public function setUtilisateur(\tautof\PlatformBundle\Entity\Utilisateur $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \tautof\PlatformBundle\Entity\Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
    
  
}
