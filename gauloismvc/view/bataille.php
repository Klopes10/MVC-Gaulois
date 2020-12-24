<?php

// affiche la liste des entreprises
    $batailles = $data["batailles"];
   
?>
<a href="index.php?ctrl=home&method=index"> Retour accueil </a> <br>
<a href="index.php?ctrl=bataille&method=newBataille">Ajout d'une bataille</a>
<table>
    <thead>
        <tr>
            <th>Nom de la bataille</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php    
        foreach ($batailles as $bataille) { ?>
        <tr>
            <td><a href="index.php?ctrl=bataille&method=detailBataille&id=<?= $bataille->getId()?>"><?= $bataille ?></a></td>            
            <td>
                <a href="index.php?ctrl=bataille&method=editBataille&id=<?= $bataille->getId()?>"> editer </a>
                <a onclick ="return(confirm('Etes-vous sûr de vouloir supprimer cette bataille ?'));"href="index.php?ctrl=bataille&method=deletebataille&id=<?= $bataille->getId()?>"> supprimer </a>
            </td>
        </tr>
        <?php }
    ?>
    </tbody>
</table>