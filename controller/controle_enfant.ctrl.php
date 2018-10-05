<?php
  require_once('../model/enfantDAO.class.php');

  $_GET['prenom'] = htmlentities($_GET['prenom']);
  $_GET['nom'] = htmlentities($_GET['nom']);
  $prenom = $_GET['prenom'];
  $nom = $_GET['nom'];

  $database = new enfantDAO();
  $database->insertEnfantDBA($nom, $prenom);
?>
