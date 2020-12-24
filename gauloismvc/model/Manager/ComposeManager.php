<?php

namespace Model\Manager;

use App\AbstractManager;

class ComposeManager extends AbstractManager
{
    private static $className = "Model\Entity\Compose";

    public function __construct()
    {
        self::connect();        //pour aller se co à la BDD
    }

    public function findAll()
    {          //permet de recup toutes les acteurs
        //requête à exécuter et comment il doit renvoyer les infos
        $sql = "SELECT * 
                FROM compose";

        return self::getResults(
            self::select($sql, null, true),
            self::$className
        );
    }

    public function findOneById($id){  //recup un salarié par ID
        $sql = "SELECT * 
                FROM compose
                WHERE id = :id";    //:id => requete préparé

                return self::getOneOrNullResult(                // renvoie qu'un seul objet
                    self::select($sql, ["id"=> $id], false),
                    self::$className
                );
    }

    public function findIngredientByCompose($potionId){
        $sql="SELECT *
        FROM compose 
        WHERE potion_id = :id";

        return self::getResults(
        self::select($sql, ["id"=> $potionId], true),
        "Model\Entity\Compose"     //est ce que me renvoie la méthode
        );
        
    }


}