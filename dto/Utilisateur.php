<?php

class Utilisateur
{

    private ?int $id;
    private ?string $nom;
    private ?string $prenom;
    private ?string $mail;
    private ?string $motDePasse;

    public function __construct(
        ?int $id = null,
        ?string $nom = null,
        ?string $prenom = null,
        ?string $mail = null,
        ?string $motDePasse = null
    ) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->motDePasse = $motDePasse;
    }




    /**
     * Get the value of id
     *
     * @return  int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param   int  $id  
     *
     * @return  self
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of nom
     *
     * @return  string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param   string  $nom  
     *
     * @return  self
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get the value of prenom
     *
     * @return  string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param   string  $prenom  
     *
     * @return  self
     */
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Get the value of mail
     *
     * @return  string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @param   string  $mail  
     *
     * @return  self
     */
    public function setMail(string $mail)
    {
        $this->mail = $mail;
    }

    /**
     * Get the value of motDePasse
     *
     * @return  string
     */
    public function getMotDePasse(): string
    {
        return $this->motDePasse;
    }

    /**
     * Set the value of motDePasse
     *
     * @param   string  $motDePasse  
     *
     * @return  self
     */
    public function setMotDePasse(string $motDePasse)
    {
        $this->motDePasse = $motDePasse;
    }
}
