<?php
  $_GET['libelle'] = htmlentities($_GET['libelle']);
  $_GET['heure_deb'] = htmlentities($_GET['heure_deb']);
  $_GET['duree'] = htmlentities($_GET['duree']);
  $_GET['jour_sem'] = htmlentities($_GET['jour_sem']);

  $libelle = $_GET['libelle'];
  $heure_deb= $_GET['heure_deb'];
  $duree = $_GET['duree'];
  $jour_sem = $_GET['jour_sem'];

  var_dump($libelle);
  var_dump($heure_deb);
  var_dump($duree);
  var_dump($jour_sem);
?>