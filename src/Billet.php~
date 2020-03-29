<?php 
/** @Entity @Table(name="billet") **/

class Billet {
 /** @Id @Column(type="integer") @GeneratedValue **/
 private $id;

 /** @Column(type="text") **/
 private $intitule;

 /** @Column(type="text") **/
 private $contenu;

 /** @Column(type="date", nullable=true) **/
 private $datepost;

 

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set intitule.
     *
     * @param string $intitule
     *
     * @return Billet
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule.
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set datepost.
     *
     * @param \DateTime|null $datepost
     *
     * @return Billet
     */
    public function setDatepost($datepost = null)
    {
        $this->datepost = $datepost;

        return $this;
    }

    /**
     * Get datepost.
     *
     * @return \DateTime|null
     */
    public function getDatepost()
    {
        return $this->datepost;
    }

    /**
     * Set contenu.
     *
     * @param string $contenu
     *
     * @return Billet
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu.
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}
