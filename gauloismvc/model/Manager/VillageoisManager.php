<?php

namespace Model\Manager;

use App\AbstractManager;

class VillageoisManager extends AbstractManager {

    private static $className = "Model\Entity\Villageois";

    public function __construct()
    {
        self::connect();
    }

    //récupère toutes les villageois
    public function findAll(){
        //requête à l'éxécuter
        $sql = "SELECT * 
                FROM villageois";

        return self::getResults(
            self::select($sql, null, true),
            self::$className
        );

    }

    //récupère un villageois en particulier d'après son id
    public function findOneById($id){
        $sql = "SELECT * 
                FROM villageois
                WHERE idvillageois = :id";

        return self::getOneOrNullResult(
            //On fait passer un tableau de paramètre
            self::select($sql, ["id" => $id], false),
            self::$className

        );

    }


}