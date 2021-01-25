<?php

class Service {

    private ?int $numeroService;
    private ?string $nom;
    private ?string $ville;
  
    public function __construct(?int $numeroService = null,?string $nom = null,?string $ville= null)
    {
        $this->numeroService = $numeroService;
        $this->nom = $nom;
        $this->ville = $ville;
    }


    /**
     * Get the value of numeroService
     *
     * @return  int
     */
    public function getNumeroService() : ?int
    {
        return $this->numeroService;
    }

    /**
     * Set the value of numeroService
     *
     * @param   mixed  $numeroService  
     *
     * @return  self
     */
    public function setNumeroService(?int $numeroService) 
    {
        $this->numeroService = $numeroService;
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
     * Get the value of ville
     *
     * @return  mixed
     */
    public function getVille() : ?string
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @param   mixed  $ville  
     *
     * @return  self
     */
    public function setVille(?string $ville) 
    {
        $this->ville = $ville;
    }
}