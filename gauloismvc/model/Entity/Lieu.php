<?php

namespace Model\Entity;

use App\AbstractEntity;

class Lieu extends AbstractEntity {

    private $idlieu;
    private $nomlieu;

    public function __construct($data) {
        parent::hydrate($data, $this);        
    }
 
    public function getIdlieu()
    {
        return $this->idlieu;
    }

    public function setIdlieu($idlieu)
    {
        $this->idlieu = $idlieu;

        return $this;
    }

    public function getNomlieu()
    {
        return $this->nomlieu;
    }


    public function setNomlieu($nomlieu)
    {
        $this->nomlieu = $nomlieu;

        return $this;
    }

    
    public function __toString() {
        return $this->nomlieu;
    }
}