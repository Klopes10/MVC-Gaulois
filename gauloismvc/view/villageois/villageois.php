<?php
    $villageoiss = $data["villageoiss"];
?>

<a href="index.php">Retour à l'accueil</a> <br>
<a href="index.php?ctrl=villageois&method=newVillageois">Ajout d'un nouveau villageois</a>

<table>
    <thead>
        <tr>
            <th>NOM</th>
            
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($villageoiss as $villageois): ?>
                <tr>
                    <td><a href="index.php?ctrl=villageois&method=detailVillageois&id=<?= $villageois->getIdvillageois() ?>"><?= $villageois->getNom() ?></td></a>
                    
                    <td><a href="index.php?ctrl=villageois&method=modifVillageois&id=<?= $villageois->getIdvillageois() ?>">MODIFIER</a> | <a onclick="return(confirm('Etes-vous sûr de vouloir supprimer cet acteur ?'));" 
                    href="index.php?ctrl=villageois&method=deleteVillageois&id=<?= $villageois->getIdvillageois() ?>"> SUPPRIMER </a>
            </tr>        
        <?php endforeach; ?>
    </tbody>

</table>

