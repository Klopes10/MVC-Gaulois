<?php

// affiche la liste des entreprises
    $potions = $data["potions"];
   
?>
<a href="index.php?ctrl=home&method=index"> Retour accueil </a> <br>
<a href="index.php?ctrl=potion&method=newPotion">Ajout d'une potion</a>
<table>
    <thead>
        <tr>
            <th>Nom de la potion</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php    
        foreach ($potions as $potion) { ?>
        <tr>
            <td><a href="index.php?ctrl=potion&method=detailPotion&id=<?= $potion->getId()?>"><?= $potion ?></a></td>            
            <td>
                <a href="index.php?ctrl=potion&method=editPotion&id=<?= $potion->getId()?>"> editer </a>
                <a onclick ="return(confirm('Etes-vous sûr de vouloir supprimer cette potion ?'));"href="index.php?ctrl=potion&method=deletePotion&id=<?= $potion->getId()?>"> supprimer </a>
            </td>
        </tr>
        <?php }
    ?>
    </tbody>
</table>