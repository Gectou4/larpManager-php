<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2016-08-31 18:33:32.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * LarpManager\Entities\Domaine
 *
 * @Entity()
 * @Table(name="domaine")
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"base":"BaseDomaine", "extended":"Domaine"})
 */
class BaseDomaine
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Column(type="string", length=45)
     */
    protected $label;

    /**
     * @Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * @OneToMany(targetEntity="Sort", mappedBy="domaine")
     * @JoinColumn(name="id", referencedColumnName="domaine_id", nullable=false)
     */
    protected $sorts;

    /**
     * @ManyToMany(targetEntity="Personnage", mappedBy="domaines")
     */
    protected $personnages;

    public function __construct()
    {
        $this->sorts = new ArrayCollection();
        $this->personnages = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \LarpManager\Entities\Domaine
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
     * Set the value of label.
     *
     * @param string $label
     * @return \LarpManager\Entities\Domaine
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get the value of label.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set the value of description.
     *
     * @param string $description
     * @return \LarpManager\Entities\Domaine
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add Sort entity to collection (one to many).
     *
     * @param \LarpManager\Entities\Sort $sort
     * @return \LarpManager\Entities\Domaine
     */
    public function addSort(Sort $sort)
    {
        $this->sorts[] = $sort;

        return $this;
    }

    /**
     * Remove Sort entity from collection (one to many).
     *
     * @param \LarpManager\Entities\Sort $sort
     * @return \LarpManager\Entities\Domaine
     */
    public function removeSort(Sort $sort)
    {
        $this->sorts->removeElement($sort);

        return $this;
    }

    /**
     * Get Sort entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSorts()
    {
        return $this->sorts;
    }

    /**
     * Add Personnage entity to collection.
     *
     * @param \LarpManager\Entities\Personnage $personnage
     * @return \LarpManager\Entities\Domaine
     */
    public function addPersonnage(Personnage $personnage)
    {
        $this->personnages[] = $personnage;

        return $this;
    }

    /**
     * Remove Personnage entity from collection.
     *
     * @param \LarpManager\Entities\Personnage $personnage
     * @return \LarpManager\Entities\Domaine
     */
    public function removePersonnage(Personnage $personnage)
    {
        $this->personnages->removeElement($personnage);

        return $this;
    }

    /**
     * Get Personnage entity collection.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonnages()
    {
        return $this->personnages;
    }

    public function __sleep()
    {
        return array('id', 'label', 'description');
    }
}