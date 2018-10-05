<?php

  require_once('../model/tuteurDAO.class.php');

  $_GET['prenom'] = htmlentities($_GET['prenom']);
  $_GET['nom'] = htmlentities($_GET['nom']);
  $_GET['ptage_dispo'] = htmlentities($_GET['ptage_dispo']);
  $prenom = $_GET['prenom'];
  $nom = $_GET['nom'];
  $pourcentage_disponibilite = $_GET['ptage_dispo'];

  foreach ($_GET['jour_dispo'] as $value) {
    $jour_dispo[] = $value;
  }

  $database = new tuteurDAO();
  $database->insertTuteurDBA($nom, $prenom, $pourcentage_disponibilite);


?>
