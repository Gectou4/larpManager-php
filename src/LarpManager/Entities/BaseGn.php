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
 * LarpManager\Entities\Gn
 *
 * @Entity()
 * @Table(name="gn", indexes={@Index(name="fk_gn_topic1_idx", columns={"topic_id"})})
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"base":"BaseGn", "extended":"Gn"})
 */
class BaseGn
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
     * @Column(type="integer", nullable=true)
     */
    protected $xp_creation;

    /**
     * @Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * @Column(type="datetime", nullable=true)
     */
    protected $date_debut;

    /**
     * @Column(type="datetime", nullable=true)
     */
    protected $date_fin;

    /**
     * @Column(type="datetime", nullable=true)
     */
    protected $date_installation_joueur;

    /**
     * @Column(type="datetime", nullable=true)
     */
    protected $date_fin_orga;

    /**
     * @Column(type="string", length=45, nullable=true)
     */
    protected $adresse;

    /**
     * @Column(type="boolean")
     */
    protected $actif;

    /**
     * @Column(type="text", nullable=true)
     */
    protected $billetterie;

    /**
     * @OneToMany(targetEntity="Annonce", mappedBy="gn")
     * @JoinColumn(name="id", referencedColumnName="gn_id", nullable=false)
     */
    protected $annonces;

    /**
     * @OneToMany(targetEntity="Background", mappedBy="gn")
     * @JoinColumn(name="id", referencedColumnName="gn_id", nullable=false)
     */
    protected $backgrounds;

    /**
     * @OneToMany(targetEntity="Billet", mappedBy="gn")
     * @JoinColumn(name="id", referencedColumnName="gn_id", nullable=false)
     */
    protected $billets;

    /**
     * @OneToMany(targetEntity="Participant", mappedBy="gn", cascade={"persist"})
     * @JoinColumn(name="id", referencedColumnName="gn_id", nullable=false)
     */
    protected $participants;

    /**
     * @ManyToOne(targetEntity="Topic", inversedBy="gns", cascade={"persist"})
     * @JoinColumn(name="topic_id", referencedColumnName="id", nullable=false)
     */
    protected $topic;

    public function __construct()
    {
        $this->annonces = new ArrayCollection();
        $this->backgrounds = new ArrayCollection();
        $this->billets = new ArrayCollection();
        $this->participants = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \LarpManager\Entities\Gn
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
     * @return \LarpManager\Entities\Gn
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
     * Set the value of xp_creation.
     *
     * @param integer $xp_creation
     * @return \LarpManager\Entities\Gn
     */
    public function setXpCreation($xp_creation)
    {
        $this->xp_creation = $xp_creation;

        return $this;
    }

    /**
     * Get the value of xp_creation.
     *
     * @return integer
     */
    public function getXpCreation()
    {
        return $this->xp_creation;
    }

    /**
     * Set the value of description.
     *
     * @param string $description
     * @return \LarpManager\Entities\Gn
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
     * Set the value of date_debut.
     *
     * @param \DateTime $date_debut
     * @return \LarpManager\Entities\Gn
     */
    public function setDateDebut($date_debut)
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    /**
     * Get the value of date_debut.
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * Set the value of date_fin.
     *
     * @param \DateTime $date_fin
     * @return \LarpManager\Entities\Gn
     */
    public function setDateFin($date_fin)
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    /**
     * Get the value of date_fin.
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * Set the value of date_installation_joueur.
     *
     * @param \DateTime $date_installation_joueur
     * @return \LarpManager\Entities\Gn
     */
    public function setDateInstallationJoueur($date_installation_joueur)
    {
        $this->date_installation_joueur = $date_installation_joueur;

        return $this;
    }

    /**
     * Get the value of date_installation_joueur.
     *
     * @return \DateTime
     */
    public function getDateInstallationJoueur()
    {
        return $this->date_installation_joueur;
    }

    /**
     * Set the value of date_fin_orga.
     *
     * @param \DateTime $date_fin_orga
     * @return \LarpManager\Entities\Gn
     */
    public function setDateFinOrga($date_fin_orga)
    {
        $this->date_fin_orga = $date_fin_orga;

        return $this;
    }

    /**
     * Get the value of date_fin_orga.
     *
     * @return \DateTime
     */
    public function getDateFinOrga()
    {
        return $this->date_fin_orga;
    }

    /**
     * Set the value of adresse.
     *
     * @param string $adresse
     * @return \LarpManager\Entities\Gn
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of adresse.
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of actif.
     *
     * @param boolean $actif
     * @return \LarpManager\Entities\Gn
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get the value of actif.
     *
     * @return boolean
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set the value of billetterie.
     *
     * @param string $billetterie
     * @return \LarpManager\Entities\Gn
     */
    public function setBilletterie($billetterie)
    {
        $this->billetterie = $billetterie;

        return $this;
    }

    /**
     * Get the value of billetterie.
     *
     * @return string
     */
    public function getBilletterie()
    {
        return $this->billetterie;
    }

    /**
     * Add Annonce entity to collection (one to many).
     *
     * @param \LarpManager\Entities\Annonce $annonce
     * @return \LarpManager\Entities\Gn
     */
    public function addAnnonce(Annonce $annonce)
    {
        $this->annonces[] = $annonce;

        return $this;
    }

    /**
     * Remove Annonce entity from collection (one to many).
     *
     * @param \LarpManager\Entities\Annonce $annonce
     * @return \LarpManager\Entities\Gn
     */
    public function removeAnnonce(Annonce $annonce)
    {
        $this->annonces->removeElement($annonce);

        return $this;
    }

    /**
     * Get Annonce entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnnonces()
    {
        return $this->annonces;
    }

    /**
     * Add Background entity to collection (one to many).
     *
     * @param \LarpManager\Entities\Background $background
     * @return \LarpManager\Entities\Gn
     */
    public function addBackground(Background $background)
    {
        $this->backgrounds[] = $background;

        return $this;
    }

    /**
     * Remove Background entity from collection (one to many).
     *
     * @param \LarpManager\Entities\Background $background
     * @return \LarpManager\Entities\Gn
     */
    public function removeBackground(Background $background)
    {
        $this->backgrounds->removeElement($background);

        return $this;
    }

    /**
     * Get Background entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBackgrounds()
    {
        return $this->backgrounds;
    }

    /**
     * Add Billet entity to collection (one to many).
     *
     * @param \LarpManager\Entities\Billet $billet
     * @return \LarpManager\Entities\Gn
     */
    public function addBillet(Billet $billet)
    {
        $this->billets[] = $billet;

        return $this;
    }

    /**
     * Remove Billet entity from collection (one to many).
     *
     * @param \LarpManager\Entities\Billet $billet
     * @return \LarpManager\Entities\Gn
     */
    public function removeBillet(Billet $billet)
    {
        $this->billets->removeElement($billet);

        return $this;
    }

    /**
     * Get Billet entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBillets()
    {
        return $this->billets;
    }

    /**
     * Add Participant entity to collection (one to many).
     *
     * @param \LarpManager\Entities\Participant $participant
     * @return \LarpManager\Entities\Gn
     */
    public function addParticipant(Participant $participant)
    {
        $this->participants[] = $participant;

        return $this;
    }

    /**
     * Remove Participant entity from collection (one to many).
     *
     * @param \LarpManager\Entities\Participant $participant
     * @return \LarpManager\Entities\Gn
     */
    public function removeParticipant(Participant $participant)
    {
        $this->participants->removeElement($participant);

        return $this;
    }

    /**
     * Get Participant entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * Set Topic entity (many to one).
     *
     * @param \LarpManager\Entities\Topic $topic
     * @return \LarpManager\Entities\Gn
     */
    public function setTopic(Topic $topic = null)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get Topic entity (many to one).
     *
     * @return \LarpManager\Entities\Topic
     */
    public function getTopic()
    {
        return $this->topic;
    }

    public function __sleep()
    {
        return array('id', 'label', 'xp_creation', 'description', 'date_debut', 'date_fin', 'date_installation_joueur', 'date_fin_orga', 'adresse', 'topic_id', 'actif', 'billetterie');
    }
}