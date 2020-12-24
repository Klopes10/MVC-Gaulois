<?php

namespace Model\Manager;

use App\AbstractManager;

class PotionManager extends AbstractManager
{
    private static $className = "Model\Entity\Potion";

    public function __construct()
    {
        self::connect();        //pour aller se co à la BDD
    }

    public function findAll()
    {          //permet de recup toutes les acteurs
        //requête à exécuter et comment il doit renvoyer les infos
        $sql = "SELECT * 
                FROM potion";

        return self::getResults(
            self::select($sql, null, true),
            self::$className
        );
    }

    public function findOneById($id){  //recup un salarié par ID
        $sql = "SELECT * 
                FROM potion
                WHERE id = :id";    //:id => requete préparé

                return self::getOneOrNullResult(                // renvoie qu'un seul objet
                    self::select($sql, ["id"=> $id], false),
                    self::$className
                );
    }

}