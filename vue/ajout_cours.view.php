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
      <input id="libelle" type="text" name="libelle"/>
      <?php if(isset($this->error_libelle)): ?>
        <strong><?= $this->error_libelle ?></strong>
      <?php endif; ?>
      <br>
      <label for="debut">Heure de début : </label>
      <input id="debut" type="time" name="heure_deb">
      <?php if(isset($this->error_heure_deb)): ?>
        <strong><?= $this->error_heure_deb ?></strong>
      <?php endif; ?>

      <br>
      <label for="duree">Durée : </label>
      <input id="duree" type="number" name="duree">
      <?php if(isset($this->error_duree)): ?>
        <strong><?= $this->error_duree ?></strong>
      <?php endif; ?>
      <br>
      <label for="jour">Jour de la semaine :</label>
        <select id="jour" name="jour_sem">
        <?php foreach ($this->jours as $jours) { ?>
          <option value="<?= $jours->getJour() ?>"><?= $jours->getJour() ?></option>
        <?php }; ?>
      </select>
      <?php if(isset($this->error_jour)): ?>
        <strong><?= $this->error_jour ?></strong>
      <?php endif; ?>


      <br>
      <input type="submit" name="valider" value="OK">
    </form>
  </body>
</html>
