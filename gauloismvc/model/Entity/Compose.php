<?php

namespace Model\Entity;

use App\AbstractEntity;

class Compose extends AbstractEntity
{
    private $id;
    private $ingredient;
    private $qte;

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

    public function getIngredient()
    {
        return $this->ingredient;
    }
    public function setIngredient($ingredient)
    {
        $this->ingredient = $ingredient;
        return $this;
    }

    public function getQte()
    {
        return $this->qte;
    }
    public function setQte($qte)
    {
        $this->qte = $qte;
        return $this;
    }

    public function __toString(){
        return $this->ingredient. "<br/>";
    }


}