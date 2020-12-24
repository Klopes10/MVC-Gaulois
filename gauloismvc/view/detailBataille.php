<a href="index.php">Retour à l'accueil</a> <br>

<a href="index.php?ctrl=bataille&method=allBatailles"> Retour à la liste des batailles</a>


<?php
    $bataille = $data["bataille"];


?>

<h2 class="detail"><?= $bataille->getNomBataille() ?></h2>

<p><strong>Lieu :</strong></p>  <?= $bataille->getLieu() ?>
<p><strong>Date :</strong></p> <?= $bataille->getDateBataille() ?>
