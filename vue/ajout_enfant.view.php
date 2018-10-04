<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ajout Enfant</title>
  </head>
  <body>
    <h2>Rajouter un enfant</h2>
      <form action="../controller/controle_enfant.ctrl.php" method="get">
        Prénom de l'enfant : <input type="text" name="prenom" /><br>
        Nom de l'enfant : <input type="text" name="nom" value=""><br>
        <input type="submit" name="valider" value="OK">
      </form>
  </body>
</html>
