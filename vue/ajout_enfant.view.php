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
        <?php if(isset($this->error_prenom)): ?>
          <strong><?= $this->error_prenom ?></strong>
        <?php endif; ?>
        <br>
        <label for="nom">Nom de l'enfant : </label>
        <input id="nom" type="text" name="nom" value=""><br>
        <?php if(isset($this->error_nom)): ?>
          <strong><?= $this->error_nom ?></strong>
        <?php endif; ?>
        <br>
        <input type="submit" name="valider" value="OK">
      </form>
  </body>
</html>
