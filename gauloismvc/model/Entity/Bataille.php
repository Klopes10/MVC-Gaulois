<?php

namespace Model\Entity;

use App\AbstractEntity;

class Bataille extends AbstractEntity
{
    private $id;
    private $lieu;
    private $nombataille;
    private $datebataille;

    //Constructeur

    public function __construct($data)
    {
        parent::hydrate($data, $this);
    }

    // getter et setter

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getLieu()
    {
        return $this->lieu;
    }
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
        return $this;
    }
    public function getNomBataille()
    {
        return $this->nombataille;
    }
    public function setNomBataille($nombataille)
    {
        $this->nombataille = $nombataille;
        return $this;
    }

    public function getDateBataille(){
        return $this->datebataille;
    }
    public function setDateBataille($datebataille){
        $this->datebataille = $datebataille;
        return $this;
    }

    public function __toString(){
        return $this->nombataille. "<br/>";
    }














}