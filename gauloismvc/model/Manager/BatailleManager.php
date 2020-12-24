<?php

namespace Model\Manager;

use App\AbstractManager;

class BatailleManager extends AbstractManager
{
    private static $className = "Model\Entity\Bataille";

    public function __construct()
    {
        self::connect();        //pour aller se co à la BDD
    }

    public function findAll()
    {          //permet de recup toutes les acteurs
        //requête à exécuter et comment il doit renvoyer les infos
        $sql = "SELECT * 
                FROM bataille";

        return self::getResults(
            self::select($sql, null, true),
            self::$className
        );
    }

    public function findOneById($id){  //recup un salarié par ID
        $sql = "SELECT * 
                FROM bataille
                WHERE id = :id";    //:id => requete préparé

                return self::getOneOrNullResult(                // renvoie qu'un seul objet
                    self::select($sql, ["id"=> $id], false),
                    self::$className
                );
    }

    public function findLieuByBataille($potionId){
        $sql="SELECT *
        FROM bataille 
        WHERE lieu_id = :id";

        return self::getResults(
        self::select($sql, ["id"=> $potionId], true),
        self::$className    //est ce que me renvoie la méthode
        );
        
    }

}