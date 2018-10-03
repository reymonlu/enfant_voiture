<?php
  $_GET['libelle'] = htmlentities($_GET['libelle']);
  $_GET['heure_debut'] = htmlentities($_GET['heure_debut']);
  $_GET['duree'] = htmlentities($_GET['duree']);
  $_GET['jour_sem'] = htmlentities($_GET['jour_sem']);
  $libelle = $_GET['libelle'];
  $heure_debut = $_GET['heure_debut'];
  $heure_fin = $_GET['heure_fin'];
  $jour_sem = $_GET['jour_sem'];
?>
