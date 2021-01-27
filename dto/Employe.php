<?php

class Employe {

    private ?int $numeroEmploye;
    private ?string $nom;
    private ?string $prenom;
    private ?string $emploi;
    private ?Employe $superieur;
    private ?string $dateEmbauche;
    private ?float $salaire;
    private ?float $commission;
    private ?Service $service;
  
    public function __construct(?int $numeroEmploye = null,
    ?string $nom = null,
    ?string $prenom = null,
    ?string $emploi= null, 
    ?Employe $superieur = null,
    ?string $dateEmbauche = null,
    ?float $salaire = null,
    ?float $commission = null,
    ?Service $service = null)
    {
        $this->numeroEmploye = $numeroEmploye;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->emploi = $emploi;
        $this->superieur = $superieur;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;
        $this->commission = $commission;
        $this->service = $service;
    }


    /**
     * Get the value of numeroEmploye
     *
     * @return  int
     */
    public function getNumeroEmploye() : ?int
    {
        return $this->numeroEmploye;
    }

    /**
     * Set the value of numeroEmploye
     *
     * @param   mixed  $numeroEmploye  
     *
     * @return  self
     */
    public function setNumeroEmploye(?int $numeroEmploye) 
    {
        $this->numeroEmploye = $numeroEmploye;
    }

    /**
     * Get the value of nom
     *
     * @return  mixed
     */
    public function getNom() : ?string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param   mixed  $nom  
     *
     * @return  self
     */
    public function setNom(?string $nom) 
    {
        $this->nom = $nom;
    }

    /**
     * Get the value of emploi
     *
     * @return  mixed
     */
    public function getEmploi() : ?string
    {
        return $this->emploi;
    }

    /**
     * Set the value of emploi
     *
     * @param   mixed  $emploi  
     *
     * @return  self
     */
    public function setEmploi(?string $emploi) 
    {
        $this->emploi = $emploi;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom(?string $prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Get the value of sup
     */ 
    public function getSuperieur(): ?Employe
    {
        return $this->superieur;
    }

    /**
     * Set the value of sup
     *
     * @return  self
     */ 
    public function setSuperieur(?Employe $superieur)
    {
        $this->superieur = $superieur;
    }

    /**
     * Get the value of dateEmbauche
     */ 
    public function getDateEmbauche(): ?string
    {
        return $this->dateEmbauche;
    }

    /**
     * Set the value of dateEmbauche
     *
     * @return  self
     */ 
    public function setDateEmbauche(?string $dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire(): ?float
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire(?float $salaire)
    {
        $this->salaire = $salaire;
    }

    /**
     * Get the value of commission
     */ 
    public function getCommission(): ?float
    {
        return $this->commission;
    }

    /**
     * Set the value of commission
     *
     * @return  self
     */ 
    public function setCommission(?float $commission)
    {
        $this->commission = $commission;
    }

    /**
     * Get the value of noservice
     */ 
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set the value of noservice
     *
     * @return  self
     */ 
    public function setService(?Service $service)
    {
        $this->service = $service;

        return $this;
    }
}