<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Le covoiturage facile</title>
  </head>
  <body>
    <h1>Que voulez-vous faire?</h1>
    <h2>Rajouter un enfant</h2>
      <form action="model/enfant.dao.php" method="get">
        Prénom de l'enfant : <input type="text" name="prenom" /><br>
        Nom de l'enfant : <input type="text" name="nom" value=""><br>
        <input type="submit" name="valider" value="OK">
      </form>
    <h2>Rajouter un cours</h2>
    <form action="model/cours.dao.php" method="get">
      Libellé : <input type="text" name="libelle" /><br>
      Heure de début : <input type="text" name="heure_deb"><br>
      Heure de fin : <input type="text" name="heure_fin"><br>
      Jour de la semaine : <input type="text" name="jour_sem"><br>
      <input type="submit" name="valider" value="OK">
    </form>
    <h2>Rajouter un Tuteur</h2>
    <form action="model/tuteur.dao.php" method="get">
      Prénom du tuteur : <input type="text" name="prenom" /><br>
      Nom du tuteur : <input type="text" name="nom"><br>
      Pourcentage de disponibilité : <input type="number" name="ptage_dispo" value="">
      Jours de disponibilité :<br>
      <input type="checkbox" name="jour_dispo" value="1"> Lundi<br>
      <input type="checkbox" name="jour_dispo" value="2"> Mardi<br>
      <input type="checkbox" name="jour_dispo" value="3"> Mercredi<br>
      <input type="checkbox" name="jour_dispo" value="4"> Jeudi<br>
      <input type="checkbox" name="jour_dispo" value="5"> Vendredi<br>
      <input type="checkbox" name="jour_dispo" value="6"> Samedi<br>
      <input type="checkbox" name="jour_dispo" value="7"> Dimanche<br>
      <input type="submit" name="valider" value="OK">
    </form>

  </body>
</html>
