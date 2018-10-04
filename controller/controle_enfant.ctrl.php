<?php
  $_GET['prenom'] = htmlentities($_GET['prenom']);
  $_GET['nom'] = htmlentities($_GET['nom']);
  $prenom = $_GET['prenom'];
  $nom = $_GET['nom'];
  var_dump($prenom);
  var_dump($nom);
?>
