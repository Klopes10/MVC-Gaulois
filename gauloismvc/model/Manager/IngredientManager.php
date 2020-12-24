<?php

namespace Model\Manager;

use App\AbstractManager;

class IngredientManager extends AbstractManager
{
    private static $className = "Model\Entity\Ingredient";

    public function __construct()
    {
        self::connect();        //pour aller se co à la BDD
    }

    public function findAll()
    {          //permet de recup toutes les acteurs
        //requête à exécuter et comment il doit renvoyer les infos
        $sql = "SELECT * 
                FROM ingredient";

        return self::getResults(
            self::select($sql, null, true),
            self::$className
        );
    }

    public function findOneById($id){  //recup un salarié par ID
        $sql = "SELECT * 
                FROM ingredient
                WHERE id = :id";    //:id => requete préparé

                return self::getOneOrNullResult(                // renvoie qu'un seul objet
                    self::select($sql, ["id"=> $id], false),
                    self::$className
                );
    }

}