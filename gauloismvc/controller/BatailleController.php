<?php

namespace Controller;
use Model\Manager\BatailleManager;


class BatailleController
{

/*----------------------------ALL---------------------------------*/

    public function allBatailles()
    {
        $manBataille= new BatailleManager();
        $batailles = $manBataille->findAll();
        return [
            "view" => "Bataille.php",
            "data"=> [
                "batailles" => $batailles
            ],
            "titrePage"=> "Liste des Batailles"

        ];
    }


    public function detailBataille($id){
    $manBataille= new BatailleManager;
    $bataille = $manBataille->findOneById($id);

    $manLieu= new BatailleManager();
    $lieux = $manLieu->findLieuByBataille($id);

 

    return [
        "view" => "detailBataille.php",
        "data"=> [
            "bataille"=> $bataille,
            "lieux" => $lieux,
            
        ],
        "titrePage"=> "Liste des batailles"

    ];

    }
}