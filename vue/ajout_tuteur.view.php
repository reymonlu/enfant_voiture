<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <title>Inscription Tuteur</title>
  </head>
  <body>
    <h1>Rajouter un Tuteur</h1>
    <form action="../controller/controle_tuteur.ctrl.php" method="get">
      <label for="prenom">Prénom du tuteur : </label>
      <input id="prenom" type="text" name="prenom" /><br>
      <label for="nom_tuteur">Nom du tuteur : </label>
      <input id ="nom_tuteur" type="text" name="nom"><br>
      <label for="pourcentage">Pourcentage de disponibilité : </label>
      <input id="pourcentage" type="number" name="ptage_dispo" value=""><br>
      <h2>Jours de disponibilité </h2>
      <?php
      foreach ($this->jours as $jours) {
        ?>
        <label for="<?= $jours->getJour() ?>"><?= $jours->getJour() ?></label>
        <input id="<?= $jours->get_id() ?>" type="checkbox" name="jour_dispo[]" value="<?= $jours->get_id() ?>"><br>
      <?php }; ?>
      <input type="submit" name="valider" value="OK">
    </form>
  </body>
</html>
