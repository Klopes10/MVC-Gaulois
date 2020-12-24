<?php

namespace Controller;

use Model\Manager\VillageoisManager;
use Model\Manager\LieuManager;
use Model\Manager\SpecialiteManager;

class VillageoisController {

    public function allVillageois() {

        $manVillageois = new VillageoisManager();
        $villageoiss = $manVillageois->findAll();

        return [
            "view" => "villageois/villageois.php",
            "data" => [
                "villageoiss" => $villageoiss
            ],
            "titrePage" => "Liste des Villageois",

        ];
    }

    public function detailVillageois($id){
        $manVillageois = new VillageoisManager();
        $villageois = $manVillageois->findOneById($id);

        return [
            "view" => "villageois/detailvillageois.php",
            "data" => [
                "villageois" => $villageois,
            ],
            "titrePage" => "Villageois"

        ];
    }

}