<?php
  $_GET['prenom'] = htmlentities($_GET['prenom']);
  $_GET['nom'] = htmlentities($_GET['nom']);
  $_GET['ptage_dispo'] = htmlentities($_GET['ptage_dispo']);
  $_GET['jour_dispo'] = htmlentities($_GET['jour_dispo']);
  $prenom = $_GET['prenom'];
  $nom = $_GET['nom'];
  $ptage_dispo = $_GET['ptage_dispo'];
  var_dump($_GET['jour_dispo']);
  foreach ($_GET['jour_dispo'] as $value) {
    $jour_dispo[] = $value;
  }
  var_dump($prenom);
  var_dump($nom);
  var_dump($ptage_dispo);
  var_dump($jour_dispo);
?>
