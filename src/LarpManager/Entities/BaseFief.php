<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-07-01 07:10:34.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * LarpManager\Entities\Fief
 *
 * @Entity()
 * @Table(name="fief", indexes={@Index(name="fk_fief_groupe1_idx", columns={"groupe_id"})})
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"base":"BaseFief", "extended":"Fief"})
 */
class BaseFief
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Column(type="string", length=100, nullable=true)
     */
    protected $nom;

    /**
     * @Column(type="string", length=100, nullable=true)
     */
    protected $dirigeant;

    /**
     * @Column(type="string", length=100, nullable=true)
     */
    protected $capitale;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $protection;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $puissance;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $puissance_max;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $impot;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $richesse;

    /**
     * @Column(type="integer")
     */
    protected $groupe_id;

    /**
     * @ManyToOne(targetEntity="Groupe", inversedBy="fiefs")
     * @JoinColumn(name="groupe_id", referencedColumnName="id")
     */
    protected $groupe;

    /**
     * @ManyToMany(targetEntity="Pays", inversedBy="fiefs")
     * @JoinTable(name="pays_fief",
     *     joinColumns={@JoinColumn(name="fief_id", referencedColumnName="id")},
     *     inverseJoinColumns={@JoinColumn(name="pays_id", referencedColumnName="id")}
     * )
     */
    protected $pays;

    public function __construct()
    {
        $this->pays = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \LarpManager\Entities\Fief
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of nom.
     *
     * @param string $nom
     * @return \LarpManager\Entities\Fief
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of dirigeant.
     *
     * @param string $dirigeant
     * @return \LarpManager\Entities\Fief
     */
    public function setDirigeant($dirigeant)
    {
        $this->dirigeant = $dirigeant;

        return $this;
    }

    /**
     * Get the value of dirigeant.
     *
     * @return string
     */
    public function getDirigeant()
    {
        return $this->dirigeant;
    }

    /**
     * Set the value of capitale.
     *
     * @param string $capitale
     * @return \LarpManager\Entities\Fief
     */
    public function setCapitale($capitale)
    {
        $this->capitale = $capitale;

        return $this;
    }

    /**
     * Get the value of capitale.
     *
     * @return string
     */
    public function getCapitale()
    {
        return $this->capitale;
    }

    /**
     * Set the value of protection.
     *
     * @param integer $protection
     * @return \LarpManager\Entities\Fief
     */
    public function setProtection($protection)
    {
        $this->protection = $protection;

        return $this;
    }

    /**
     * Get the value of protection.
     *
     * @return integer
     */
    public function getProtection()
    {
        return $this->protection;
    }

    /**
     * Set the value of puissance.
     *
     * @param integer $puissance
     * @return \LarpManager\Entities\Fief
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get the value of puissance.
     *
     * @return integer
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set the value of puissance_max.
     *
     * @param integer $puissance_max
     * @return \LarpManager\Entities\Fief
     */
    public function setPuissanceMax($puissance_max)
    {
        $this->puissance_max = $puissance_max;

        return $this;
    }

    /**
     * Get the value of puissance_max.
     *
     * @return integer
     */
    public function getPuissanceMax()
    {
        return $this->puissance_max;
    }

    /**
     * Set the value of impot.
     *
     * @param integer $impot
     * @return \LarpManager\Entities\Fief
     */
    public function setImpot($impot)
    {
        $this->impot = $impot;

        return $this;
    }

    /**
     * Get the value of impot.
     *
     * @return integer
     */
    public function getImpot()
    {
        return $this->impot;
    }

    /**
     * Set the value of richesse.
     *
     * @param integer $richesse
     * @return \LarpManager\Entities\Fief
     */
    public function setRichesse($richesse)
    {
        $this->richesse = $richesse;

        return $this;
    }

    /**
     * Get the value of richesse.
     *
     * @return integer
     */
    public function getRichesse()
    {
        return $this->richesse;
    }

    /**
     * Set the value of groupe_id.
     *
     * @param integer $groupe_id
     * @return \LarpManager\Entities\Fief
     */
    public function setGroupeId($groupe_id)
    {
        $this->groupe_id = $groupe_id;

        return $this;
    }

    /**
     * Get the value of groupe_id.
     *
     * @return integer
     */
    public function getGroupeId()
    {
        return $this->groupe_id;
    }

    /**
     * Set Groupe entity (many to one).
     *
     * @param \LarpManager\Entities\Groupe $groupe
     * @return \LarpManager\Entities\Fief
     */
    public function setGroupe(Groupe $groupe = null)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get Groupe entity (many to one).
     *
     * @return \LarpManager\Entities\Groupe
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Add Pays entity to collection.
     *
     * @param \LarpManager\Entities\Pays $pays
     * @return \LarpManager\Entities\Fief
     */
    public function addPays(Pays $pays)
    {
        $pays->addFief($this);
        $this->pays[] = $pays;

        return $this;
    }

    /**
     * Remove Pays entity from collection.
     *
     * @param \LarpManager\Entities\Pays $pays
     * @return \LarpManager\Entities\Fief
     */
    public function removePays(Pays $pays)
    {
        $pays->removeFief($this);
        $this->pays->removeElement($pays);

        return $this;
    }

    /**
     * Get Pays entity collection.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPays()
    {
        return $this->pays;
    }

    public function __sleep()
    {
        return array('id', 'nom', 'dirigeant', 'capitale', 'protection', 'puissance', 'puissance_max', 'impot', 'richesse', 'groupe_id');
    }
}