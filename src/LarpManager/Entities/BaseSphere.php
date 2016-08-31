<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2016-08-31 18:33:36.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * LarpManager\Entities\Sphere
 *
 * @Entity()
 * @Table(name="sphere")
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"base":"BaseSphere", "extended":"Sphere"})
 */
class BaseSphere
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Column(type="string", length=45, nullable=true)
     */
    protected $label;

    /**
     * @OneToMany(targetEntity="Priere", mappedBy="sphere")
     * @JoinColumn(name="id", referencedColumnName="sphere_id", nullable=false)
     */
    protected $prieres;

    /**
     * @ManyToMany(targetEntity="Religion", inversedBy="spheres")
     * @JoinTable(name="religions_spheres",
     *     joinColumns={@JoinColumn(name="sphere_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@JoinColumn(name="religion_id", referencedColumnName="id", nullable=false)}
     * )
     */
    protected $religions;

    public function __construct()
    {
        $this->prieres = new ArrayCollection();
        $this->religions = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \LarpManager\Entities\Sphere
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
     * @return \LarpManager\Entities\Sphere
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
     * Add Priere entity to collection (one to many).
     *
     * @param \LarpManager\Entities\Priere $priere
     * @return \LarpManager\Entities\Sphere
     */
    public function addPriere(Priere $priere)
    {
        $this->prieres[] = $priere;

        return $this;
    }

    /**
     * Remove Priere entity from collection (one to many).
     *
     * @param \LarpManager\Entities\Priere $priere
     * @return \LarpManager\Entities\Sphere
     */
    public function removePriere(Priere $priere)
    {
        $this->prieres->removeElement($priere);

        return $this;
    }

    /**
     * Get Priere entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrieres()
    {
        return $this->prieres;
    }

    /**
     * Add Religion entity to collection.
     *
     * @param \LarpManager\Entities\Religion $religion
     * @return \LarpManager\Entities\Sphere
     */
    public function addReligion(Religion $religion)
    {
        $religion->addSphere($this);
        $this->religions[] = $religion;

        return $this;
    }

    /**
     * Remove Religion entity from collection.
     *
     * @param \LarpManager\Entities\Religion $religion
     * @return \LarpManager\Entities\Sphere
     */
    public function removeReligion(Religion $religion)
    {
        $religion->removeSphere($this);
        $this->religions->removeElement($religion);

        return $this;
    }

    /**
     * Get Religion entity collection.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReligions()
    {
        return $this->religions;
    }

    public function __sleep()
    {
        return array('id', 'label');
    }
}