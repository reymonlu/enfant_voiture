<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <title>Ajout Enfant</title>
  </head>
  <body>
    <h1>Rajouter un enfant</h1>
      <form action="../controller/controle_enfant.ctrl.php" method="get">
        <label for="prenom">Prénom de l'enfant : </label>
        <input id="prenom" type="text" name="prenom" /><br>
        <label for="nom">Nom de l'enfant : </label>
        <input id="nom" type="text" name="nom" value=""><br>
        <input type="submit" name="valider" value="OK">
        <select id="tuteur" name="tuteur">
        <?php foreach ($this->tuteurs as $tuteur) { ?>
          <option value="<?= $tuteur->get_id() ?>"><?php echo $tuteur->get_nom(); echo " ".$tuteur->get_prenom(); ?></option>
        <?php }; ?>
        </select>
      </form>
  </body>
</html>
