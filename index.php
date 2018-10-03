<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Le covoiturage facile</title>
  </head>
  <body>
    <h1>Que voulez-vous faire?</h1>
    <h2>Rajouter un enfant</h2>
      <form action="controller/ajout_enfant.ctrl.php" method="get">
        Prénom de l'enfant : <input type="text" name="prenom" /><br>
        Nom de l'enfant : <input type="text" name="nom" value=""><br>
        <input type="submit" name="valider" value="OK">
      </form>
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
    <h2>Rajouter un Tuteur</h2>
    <form action="controller/ajout_tuteur.ctrl.php" method="get">
      Prénom du tuteur : <input type="text" name="prenom" /><br>
      Nom du tuteur : <input type="text" name="nom"><br>
      Pourcentage de disponibilité : <input type="number" name="ptage_dispo" value="">
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
