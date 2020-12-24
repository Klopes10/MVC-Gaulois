<?php

namespace Model\Manager;

use App\AbstractManager;

class SpecialiteManager extends AbstractManager {

    private static $className = "Model\Entity\Specialite";

    public function __construct()
    {
        self::connect();
    }

    //récupère toutes les specialites
    public function findAll(){
        //requête à l'éxécuter
        $sql = "SELECT * 
                FROM specialite";

        return self::getResults(
            self::select($sql, null, true),
            self::$className
        );

    }

      //récupère un specialite en particulier d'après son id
      public function findOneById($id){
        $sql = "SELECT * 
                FROM specialite
                WHERE idspecialite = :id";

        return self::getOneOrNullResult(
            //On fait passer un tableau de paramètre
            self::select($sql, ["id" => $id], false),
            self::$className

        );

    }

   

}