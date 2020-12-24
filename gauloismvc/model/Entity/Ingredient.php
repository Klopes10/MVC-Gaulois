<?php

namespace Model\Entity;

use App\AbstractEntity;

class Ingredient extends AbstractEntity
{
    private $id;
    private $nomingredient;
    private $coutingredient;

    //Constructeur

    public function __construct($data)
    {
        parent::hydrate($data, $this);
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

    public function getNomIngredient()
    {
        return $this->nomingredient;
    }
    public function setNomIngredient($nomingredient)
    {
        $this->nomingredient = $nomingredient;
        return $this;
    }

    public function getCoutIngredient()
    {
        return $this->coutingredient;
    }
    public function setCoutIngredient($coutingredient)
    {
        $this->coutingredient = $coutingredient;
        return $this;
    }
    public function __toString()
    {
        return $this->nomingredient. "<br/>";
    }
}