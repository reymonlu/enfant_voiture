<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inscription Tuteur</title>
  </head>
  <body>
    <h2>Rajouter un Tuteur</h2>
    <form action="../controller/controle_tuteur.ctrl.php" method="get">
      Prénom du tuteur : <input type="text" name="prenom" /><br>
      Nom du tuteur : <input type="text" name="nom"><br>
      Pourcentage de disponibilité : <input type="number" name="ptage_dispo" value=""><br>
      Jours de disponibilité :<br>
      <input type="checkbox" name="jour_dispo[]" value="lundi"> Lundi<br>
      <input type="checkbox" name="jour_dispo[]" value="mardi"> Mardi<br>
      <input type="checkbox" name="jour_dispo[]" value="mercredi"> Mercredi<br>
      <input type="checkbox" name="jour_dispo[]" value="jeudi"> Jeudi<br>
      <input type="checkbox" name="jour_dispo[]" value="vendredi"> Vendredi<br>
      <input type="checkbox" name="jour_dispo[]" value="samedi"> Samedi<br>
      <input type="checkbox" name="jour_dispo[]" value="dimanche"> Dimanche<br>
      <input type="submit" name="valider" value="OK">
    </form>
  </body>
</html>
