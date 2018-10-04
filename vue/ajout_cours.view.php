<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ajout Cours</title>
  </head>
  <body>
    <h2>Rajouter un cours</h2>
    <form action="../controller/controle_cours.ctrl.php" method="get">
      Libellé : <input type="text" name="libelle" /><br>
      Heure de début : <input type="time" name="heure_deb"><br>
      Durée : <input type="number" name="duree"><br>
      Jour de la semaine :
        <select name="jour_sem">
          <option value="Lundi">Lundi</option>
          <option value="Mardi">Mardi</option>
          <option value="Mercredi">Mercredi</option>
          <option value="Jeudi">Jeudi</option>
          <option value="Vendredi">Vendredi</option>
          <option value="Samedi">Samedi</option>
          <option value="Dimanche">Dimanche</option>

        </select>
      <input type="submit" name="valider" value="OK">
    </form>
  </body>
</html>
