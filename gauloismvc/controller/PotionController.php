<?php

namespace Controller;
use Model\Manager\PotionManager;
use Model\Manager\ComposeManager;
use Model\Manager\IngredientManager;

class PotionController {

/*----------------------------ALL---------------------------------*/

    public function allPotions(){

        $manPotion= new PotionManager();
        $potions = $manPotion->findAll();
        return [
            "view" => "potion.php",
            "data"=> [
                "potions" => $potions
            ],
            "titrePage"=> "Liste des potions"

        ];

    }

/*------------------------------DETAIL-------------------------------- */

    public function detailPotion($id){
        $manPotion= new PotionManager;
        $potion = $manPotion->findOneById($id);

        $manCompose= new ComposeManager();
        $composes = $manCompose->findIngredientByCompose($id);

     

        return [
            "view" => "detailPotion.php",
            "data"=> [
                "potion"=> $potion,
                "composes" => $composes,
                
            ],
            "titrePage"=> "Composition de la potion"

        ];

    }

 
    }