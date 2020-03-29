<?php
/** @Entity @Table(name="messages") **/

class Message {
 /** @Id @Column(type="integer") @GeneratedValue **/
 private $id;
 /** @Column(type="text") **/
 private $text;
 /** @Column(type="date", nullable=true) **/
 private $datepost;

 
    /**
     *  @ManyToOne (targetEntity="Utilisateur")
     *  @JoinColumn (nullable=false)
     **/
    private $utilisateur;

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
     * Set text.
     *
     * @param string $text
     *
     * @return Message
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set datepost.
     *
     * @param \DateTime|null $datepost
     *
     * @return Message
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
     * Set utilisateur.
     *
     * @param \Utilisateur $utilisateur
     *
     * @return Message
     */
    public function setUtilisateur(\Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur.
     *
     * @return \Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set categorie.
     *
     * @param string $categorie
     *
     * @return Message
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie.
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
