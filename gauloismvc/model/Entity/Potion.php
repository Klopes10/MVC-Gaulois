<?php

namespace Model\Entity;

use App\AbstractEntity;

class Potion extends AbstractEntity{

    private $id;
    private $nompotion;

    //Constructeur

    public function __construct($data){
        parent::hydrate($data,$this);
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getNomPotion()
    {
        return $this->nompotion;
    }

    public function setNomPotion($nompotion)
    {
        $this->nompotion = $nompotion;
        return $this;
    }

    public function __toString(){
        return $this->nompotion. "<br/>";
    }

















}