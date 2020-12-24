<a href="index.php">Retour à l'accueil</a> <br>

<a href="index.php?ctrl=villageois&method=allVillageois"> Retour à la liste des villageois</a>


<?php
    $villageois = $data["villageois"];


?>

<h2 class="detail"><?= $villageois->getNom() ?></h2>

<p><strong>Nom :</strong></p> <?= $villageois->getNom() ?></p>
<p><strong>Adresse :</strong></p> <?= $villageois->getAdresse() ?></p>
<p><strong>Img :</strong></p><img src=" <?= $villageois->getImage() ?>" alt="Obelix"></p>
<p><strong>Lieu :</strong></p>  <?= $villageois->getLieu() ?>
<p><strong>Specialite :</strong></p> <?= $villageois->getSpecialite() ?>
