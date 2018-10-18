<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <title>Ajout d'un tuteur</title>
  </head>
  <body>
    <h1>Visualiser les réservations</h1>

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
  foreach($this->message as $insert){
    ?>
    <tr>
      <td><?= $insert[0] ?></td>
      <td><?= $insert[1] ?></td>
      <td><?= $insert[2] ?></td>
      <td><?= $insert[3] ?></td>
      <td><?= $insert[4] ?></td>
    </tr>
  <?php }; ?>
  </table>

  </body>
</html>
