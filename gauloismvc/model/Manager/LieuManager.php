<?php

namespace Model\Manager;

use App\AbstractManager;

class LieuManager extends AbstractManager {

    private static $className = "Model\Entity\Lieu";

    public function __construct()
    {
        self::connect();
    }

    //récupère toutes les lieu
    public function findAll(){
        //requête à l'éxécuter
        $sql = "SELECT * 
                FROM lieu";

        return self::getResults(
            self::select($sql, null, true),
            self::$className
        );

    }

      //récupère un villageois en particulier d'après son id
      public function findOneById($id){
        $sql = "SELECT * 
                FROM lieu
                WHERE idlieu = :id";

        return self::getOneOrNullResult(
            //On fait passer un tableau de paramètre
            self::select($sql, ["id" => $id], false),
            self::$className

        );

    }

   

}