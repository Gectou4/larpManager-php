<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2015-08-16 22:39:13.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * LarpManager\Entities\Personnage
 *
 * @Entity()
 * @Table(name="personnage", indexes={@Index(name="fk_personnage_groupe1_idx", columns={"groupe_id"}), @Index(name="fk_personnage_users1_idx", columns={"users_id"}), @Index(name="fk_personnage_archetype1_idx", columns={"archetype_id"}), @Index(name="fk_personnage_age1_idx", columns={"age_id"}), @Index(name="fk_personnage_sexe1_idx", columns={"sexe_id"})})
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"base":"BasePersonnage", "extended":"Personnage"})
 */
class BasePersonnage
{
    /**
     * @Id
     * @Column(type="integer")
     */
    protected $id;

    /**
     * @Column(type="string", length=100)
     */
    protected $nom;

    /**
     * @Column(type="string", length=100, nullable=true)
     */
    protected $surnom;

    /**
     * @Column(type="boolean", nullable=true)
     */
    protected $intrigue;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $renomme;

    /**
     * @Column(type="string", length=100, nullable=true)
     */
    protected $photo;

    /**
     * @ManyToOne(targetEntity="Groupe", inversedBy="personnages")
     * @JoinColumn(name="groupe_id", referencedColumnName="id")
     */
    protected $groupe;

    /**
     * @ManyToOne(targetEntity="User", inversedBy="personnages")
     * @JoinColumn(name="users_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ManyToOne(targetEntity="Classe", inversedBy="personnages")
     * @JoinColumn(name="archetype_id", referencedColumnName="id")
     */
    protected $classe;

    /**
     * @ManyToOne(targetEntity="Age", inversedBy="personnages")
     * @JoinColumn(name="age_id", referencedColumnName="id")
     */
    protected $age;

    /**
     * @ManyToOne(targetEntity="Sexe", inversedBy="personnages")
     * @JoinColumn(name="sexe_id", referencedColumnName="id")
     */
    protected $sexe;

    /**
     * @ManyToMany(targetEntity="Confrerie", inversedBy="personnages")
     * @JoinTable(name="confrerie_postulant",
     *     joinColumns={@JoinColumn(name="personnage_id", referencedColumnName="id")},
     *     inverseJoinColumns={@JoinColumn(name="confrerie_id", referencedColumnName="id")}
     * )
     */
    protected $confreries;

    /**
     * @ManyToMany(targetEntity="Culte", mappedBy="personnages")
     */
    protected $cultes;

    /**
     * @ManyToMany(targetEntity="Guilde", mappedBy="personnages")
     */
    protected $guildes;

    /**
     * @ManyToMany(targetEntity="Gn", inversedBy="personnages")
     * @JoinTable(name="personnage_gn",
     *     joinColumns={@JoinColumn(name="personnage_id", referencedColumnName="id")},
     *     inverseJoinColumns={@JoinColumn(name="gn_id", referencedColumnName="id")}
     * )
     */
    protected $gns;

    /**
     * @ManyToMany(targetEntity="Langue", inversedBy="personnages")
     * @JoinTable(name="personnage_langue",
     *     joinColumns={@JoinColumn(name="personnage_id", referencedColumnName="id")},
     *     inverseJoinColumns={@JoinColumn(name="langue_id", referencedColumnName="id")}
     * )
     */
    protected $langues;

    public function __construct()
    {
        $this->confreries = new ArrayCollection();
        $this->cultes = new ArrayCollection();
        $this->guildes = new ArrayCollection();
        $this->gns = new ArrayCollection();
        $this->langues = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \LarpManager\Entities\Personnage
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
     * @return \LarpManager\Entities\Personnage
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
     * Set the value of surnom.
     *
     * @param string $surnom
     * @return \LarpManager\Entities\Personnage
     */
    public function setSurnom($surnom)
    {
        $this->surnom = $surnom;

        return $this;
    }

    /**
     * Get the value of surnom.
     *
     * @return string
     */
    public function getSurnom()
    {
        return $this->surnom;
    }

    /**
     * Set the value of intrigue.
     *
     * @param boolean $intrigue
     * @return \LarpManager\Entities\Personnage
     */
    public function setIntrigue($intrigue)
    {
        $this->intrigue = $intrigue;

        return $this;
    }

    /**
     * Get the value of intrigue.
     *
     * @return boolean
     */
    public function getIntrigue()
    {
        return $this->intrigue;
    }

    /**
     * Set the value of renomme.
     *
     * @param integer $renomme
     * @return \LarpManager\Entities\Personnage
     */
    public function setRenomme($renomme)
    {
        $this->renomme = $renomme;

        return $this;
    }

    /**
     * Get the value of renomme.
     *
     * @return integer
     */
    public function getRenomme()
    {
        return $this->renomme;
    }

    /**
     * Set the value of photo.
     *
     * @param string $photo
     * @return \LarpManager\Entities\Personnage
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get the value of photo.
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set Groupe entity (many to one).
     *
     * @param \LarpManager\Entities\Groupe $groupe
     * @return \LarpManager\Entities\Personnage
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
     * Set User entity (many to one).
     *
     * @param \LarpManager\Entities\User $user
     * @return \LarpManager\Entities\Personnage
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get User entity (many to one).
     *
     * @return \LarpManager\Entities\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set Classe entity (many to one).
     *
     * @param \LarpManager\Entities\Classe $classe
     * @return \LarpManager\Entities\Personnage
     */
    public function setClasse(Classe $classe = null)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get Classe entity (many to one).
     *
     * @return \LarpManager\Entities\Classe
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set Age entity (many to one).
     *
     * @param \LarpManager\Entities\Age $age
     * @return \LarpManager\Entities\Personnage
     */
    public function setAge(Age $age = null)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get Age entity (many to one).
     *
     * @return \LarpManager\Entities\Age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set Sexe entity (many to one).
     *
     * @param \LarpManager\Entities\Sexe $sexe
     * @return \LarpManager\Entities\Personnage
     */
    public function setSexe(Sexe $sexe = null)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get Sexe entity (many to one).
     *
     * @return \LarpManager\Entities\Sexe
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Add Confrerie entity to collection.
     *
     * @param \LarpManager\Entities\Confrerie $confrerie
     * @return \LarpManager\Entities\Personnage
     */
    public function addConfrerie(Confrerie $confrerie)
    {
        $confrerie->addPersonnage($this);
        $this->confreries[] = $confrerie;

        return $this;
    }

    /**
     * Remove Confrerie entity from collection.
     *
     * @param \LarpManager\Entities\Confrerie $confrerie
     * @return \LarpManager\Entities\Personnage
     */
    public function removeConfrerie(Confrerie $confrerie)
    {
        $confrerie->removePersonnage($this);
        $this->confreries->removeElement($confrerie);

        return $this;
    }

    /**
     * Get Confrerie entity collection.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConfreries()
    {
        return $this->confreries;
    }

    /**
     * Add Culte entity to collection.
     *
     * @param \LarpManager\Entities\Culte $culte
     * @return \LarpManager\Entities\Personnage
     */
    public function addCulte(Culte $culte)
    {
        $this->cultes[] = $culte;

        return $this;
    }

    /**
     * Remove Culte entity from collection.
     *
     * @param \LarpManager\Entities\Culte $culte
     * @return \LarpManager\Entities\Personnage
     */
    public function removeCulte(Culte $culte)
    {
        $this->cultes->removeElement($culte);

        return $this;
    }

    /**
     * Get Culte entity collection.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCultes()
    {
        return $this->cultes;
    }

    /**
     * Add Guilde entity to collection.
     *
     * @param \LarpManager\Entities\Guilde $guilde
     * @return \LarpManager\Entities\Personnage
     */
    public function addGuilde(Guilde $guilde)
    {
        $this->guildes[] = $guilde;

        return $this;
    }

    /**
     * Remove Guilde entity from collection.
     *
     * @param \LarpManager\Entities\Guilde $guilde
     * @return \LarpManager\Entities\Personnage
     */
    public function removeGuilde(Guilde $guilde)
    {
        $this->guildes->removeElement($guilde);

        return $this;
    }

    /**
     * Get Guilde entity collection.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGuildes()
    {
        return $this->guildes;
    }

    /**
     * Add Gn entity to collection.
     *
     * @param \LarpManager\Entities\Gn $gn
     * @return \LarpManager\Entities\Personnage
     */
    public function addGn(Gn $gn)
    {
        $gn->addPersonnage($this);
        $this->gns[] = $gn;

        return $this;
    }

    /**
     * Remove Gn entity from collection.
     *
     * @param \LarpManager\Entities\Gn $gn
     * @return \LarpManager\Entities\Personnage
     */
    public function removeGn(Gn $gn)
    {
        $gn->removePersonnage($this);
        $this->gns->removeElement($gn);

        return $this;
    }

    /**
     * Get Gn entity collection.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGns()
    {
        return $this->gns;
    }

    /**
     * Add Langue entity to collection.
     *
     * @param \LarpManager\Entities\Langue $langue
     * @return \LarpManager\Entities\Personnage
     */
    public function addLangue(Langue $langue)
    {
        $langue->addPersonnage($this);
        $this->langues[] = $langue;

        return $this;
    }

    /**
     * Remove Langue entity from collection.
     *
     * @param \LarpManager\Entities\Langue $langue
     * @return \LarpManager\Entities\Personnage
     */
    public function removeLangue(Langue $langue)
    {
        $langue->removePersonnage($this);
        $this->langues->removeElement($langue);

        return $this;
    }

    /**
     * Get Langue entity collection.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLangues()
    {
        return $this->langues;
    }

    public function __sleep()
    {
        return array('id', 'nom', 'surnom', 'intrigue', 'groupe_id', 'users_id', 'archetype_id', 'age_id', 'sexe_id', 'renomme', 'photo');
    }
}