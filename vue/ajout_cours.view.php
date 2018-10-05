<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ajout Cours</title>
  </head>
  <body>
    <h1>Rajouter un cours</h1>
    <form action="../controller/controle_cours.ctrl.php" method="get">
      <label for="libelle">Libellé : </label>
      <input id="libelle" type="text" name="libelle" /><br>
      <label for="debut">Heure de début : </label>
      <input id="debut" type="time" name="heure_deb"><br>
      <label for="duree">Durée : </label>
      <input id="duree" type="number" name="duree"><br>
      <label for="jour">Jour de la semaine :</label>
        <select id="jour" name="jour_sem">
        <?php foreach ($this->jours as $jours) { ?>
          <option value="<?= $jours->getJour() ?>"><?= $jours->getJour() ?></option>
        <?php }; ?>
        </select>
      <input type="submit" name="valider" value="OK">
    </form>
  </body>
</html>
