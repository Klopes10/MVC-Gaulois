<?php
    $potion = $data["potion"];
    
    $composes = $data["composes"];
    
?>

<a href="index.php?ctrl=home&method=index"> Retour accueil </a> <br>
<a href="index.php?ctrl=potion&method=allPotions"> Retour à la liste des potions </a>

<h1>Nom de potion : <?= $potion ?></h1>

<h2>Composition</h2>

<table>
    <thead>
        <tr>
            <td>Ingrédients</td>
            <td>Quantité</td>
            <td>Cout</td>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach($composes as $compose) { ?>
        <tr>
            <td><?= $compose->getIngredient()->getNomIngredient()?></td>
            <td><?= $compose->getQte()?></td>
            <td><?= $compose->getIngredient()->getCoutIngredient()?></td>
        </tr>
        <?php }
        ?>
    </tbody>
</table>