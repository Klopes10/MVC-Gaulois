<?php

namespace Model\Entity;

use App\AbstractEntity;

class Specialite extends AbstractEntity {

    private $idspecialite;
    private $nomspecialite;

    public function __construct($data) {
        parent::hydrate($data, $this);        
    }

    


    /**
     * Get the value of idspecialite
     */ 
    public function getIdspecialite()
    {
        return $this->idspecialite;
    }

    /**
     * Set the value of idspecialite
     *
     * @return  self
     */ 
    public function setIdspecialite($idspecialite)
    {
        $this->idspecialite = $idspecialite;

        return $this;
    }

    /**
     * Get the value of nomspecialite
     */ 
    public function getNomspecialite()
    {
        return $this->nomspecialite;
    }

    /**
     * Set the value of nomspecialite
     *
     * @return  self
     */ 
    public function setNomspecialite($nomspecialite)
    {
        $this->nomspecialite = $nomspecialite;

        return $this;
    }

    public function __toString() {
        return $this->nomspecialite;
    }
}