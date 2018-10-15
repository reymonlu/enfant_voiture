<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ajout d'un tuteur</title>
  </head>
  <body>

  <table>
  <caption>Tableau des trajets</caption>
  <tr>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Cours</th>
    <th>Heure</th>
    <th>Jour</th>
  <tr>
  <?php
  foreach ($this->list_trajet as $trajet) {
    foreach ($this->list_tuteur as $tuteur) {
      if ($tuteur->get_id() == $trajet->get_tuteur()){
          $nom = $tuteur->get_nom();
          $prenom = $tuteur->get_prenom();
      }
    }
    foreach ($this->list_cours as $cours) {
      if($cours->get_id_cours() == $trajet->get_cours()){
        $libelle = $cours->get_libelle();
        $heure = $cours->get_heure_debut();
        $jour = $cours->get_jour();
      }
    }
    foreach ($this->list_jours as $j) {
      if($j->get_id() == $jour){
        $jour = $j->getJour();
        break;
      }
    }
    echo "<tr>";
    echo "<td>".$nom."</td>";
    echo "<td>".$prenom."</td>";
    echo "<td>".$libelle."</td>";
    echo "<td>".$heure."</td>";
    echo "<td>".$jour."</td>";
    echo "</tr>";
  }
  ?>
  </table>

  </body>
</html>
