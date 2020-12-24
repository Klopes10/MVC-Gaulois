<?php

namespace Model\Entity;

use App\AbstractEntity;

class Villageois extends AbstractEntity {

    private $idvillageois;
    private $lieu;
    private $specialite;
    private $nom;
    private $adresse;
    private $image;

    public function __construct($data) {
        parent::hydrate($data, $this);        
    }

    public function getIdvillageois() {
        return $this->idvillageois;
    }

    public function setIdvillageois($idvillageois) {
        $this->idvillageois = $idvillageois;
        return $this;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
        return $this;
    }

    public function getLieu() {
        return $this->lieu;
    }

    public function setLieu($lieu) {
        $this->lieu = $lieu;
        return $this;
    }

    public function getSpecialite() {
        return $this->specialite;
    }

    public function setSpecialite($specialite) {
        $this->specialite = $specialite;
        return $this;
    }

    public function __toString() {
        return $this->nom;
    }
}