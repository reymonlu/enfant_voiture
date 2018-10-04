<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ajout Cours</title>
  </head>
  <body>
    <h2>Rajouter un cours</h2>
    <form action="controller/ajout_cours.ctrl.php" method="get">
      Libellé : <input type="text" name="libelle" /><br>
      Heure de début : <input type="time" name="heure_deb"><br>
      Durée : <input type="number" name="duree"><br>
      Jour de la semaine :
        <select name="jour_sem">
          <option value="lundi">Lundi</option>
          <option value="mardi">Mardi</option>
          <option value="mercredi">Mercredi</option>
          <option value="jeudi">Jeudi</option>
          <option value="vendredi">Vendredi</option>
          <option value="samedi">Samedi</option>
          <option value="dimanche">Dimanche</option>

        </select>
      <input type="submit" name="valider" value="OK">
    </form>
  </body>
</html>
