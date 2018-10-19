<?php


  session_start();
  $id_visiteur = $_SESSION['id_visiteur'];

  require_once('../model/tuteurDAO.class.php');
  require_once('../model/disponibleDAO.class.php');
  require_once('../model/erreur.class.php');

  $verif_erreur = new Erreur();
  if (!($verif_erreur->verif_id($id_visiteur))){
  $v = new View();
  $v->show("../vue/erreur_id.view.php");
  }
  else {

  $_GET['prenom'] = htmlentities($_GET['prenom']);
  $_GET['nom'] = htmlentities($_GET['nom']);
  $_GET['ptage_dispo'] = htmlentities($_GET['ptage_dispo']);
  $prenom = $_GET['prenom'];
  $nom = $_GET['nom'];
  $pourcentage_disponibilite = $_GET['ptage_dispo'];
  foreach ($_GET['jour_dispo'] as $value) {
    $jour_dispo[] = htmlentities($value);
  }

  $database = new tuteurDAO();
  $disponible = new disponibleDAO();
  $database->insertTuteurDBA($nom, $prenom, $pourcentage_disponibilite);

  $tuteur_id = $database->selectTuteurID($nom, $prenom);
  foreach ($jour_dispo as $value) {
    $disponible->addDisponibilite((int) $tuteur_id[0], (int) $value);
  }
}
?>
