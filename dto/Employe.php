<?php

class Employe {

    private ?int $numeroEmploye;
    private ?string $nom;
    private ?string $prenom;
    private ?string $emploi;
    private ?int $sup;
    private ?string $dateEmbauche;
    private ?float $salaire;
    private ?float $commission;
    private ?int $noserv;
  
    public function __construct(?int $numeroEmploye = null,
    ?string $nom = null,
    ?string $prenom = null,
    ?string $emploi= null, 
    ?int $sup = null,
    ?string $dateEmbauche = null,
    ?float $salaire = null,
    ?float $commission = null,
    ?int $noserv = null)
    {
        $this->numeroEmploye = $numeroEmploye;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->emploi = $emploi;
        $this->sup = $sup;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;
        $this->commission = $commission;
        $this->noserv = $noserv;
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
    public function getSup(): ?int
    {
        return $this->sup;
    }

    /**
     * Set the value of sup
     *
     * @return  self
     */ 
    public function setSup($emploi)
    {
        if(strtoupper($emploi)=='SECRETAIRE' ||  strtoupper($emploi)=='DIRECTEUR' ||  strtoupper($emploi)=='BALAYEUR') {
            $sup = 1000;
        } elseif (strtoupper($emploi)=='TECHNICIEN') {
            $sup = 1200;
        } elseif (strtoupper($emploi)=='VENDEUR') {
            $sup = 1300;
        } elseif (strtoupper($emploi)=='PUPITREUR' ||  strtoupper($emploi)=='PROGRAMMEUR' ||  strtoupper($emploi)=='ANALYSTE') {
            $sup = 1500;
        } elseif (strtoupper($emploi)=='COMPTABLE') {
            $sup = 1600;
        } elseif (strtoupper($emploi)=='PRESIDENT') {
            $sup = null;
        }
        $this->sup = $sup;
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
     * Get the value of noserv
     */ 
    public function getNoserv(): ?int
    {
        return $this->noserv;
    }

    /**
     * Set the value of noserv
     *
     * @return  self
     */ 
    public function setNoserv(?int $noserv)
    {
        $this->noserv = $noserv;
    }
}