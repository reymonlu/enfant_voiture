<?php


  session_start();
  $id_visiteur = $_SESSION['id_visiteur'];

  require_once('../model/enfantDAO.class.php');
  require_once('../model/erreur.class.php');

  $verif_erreur = new Erreur();
  if (!($verif_erreur->verif_id($id_visiteur))){
  $v = new View();
  $v->show("../vue/erreur_id.view.php");
  }
  else {

  $_GET['prenom'] = htmlentities($_GET['prenom']);
  $_GET['nom'] = htmlentities($_GET['nom']);
  $prenom = $_GET['prenom'];
  $nom = $_GET['nom'];

  $database = new enfantDAO();
  $database->insertEnfantDBA($nom, $prenom);
}
?>
