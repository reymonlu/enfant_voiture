<?php


session_start();
$id_visiteur = $_SESSION['id_visiteur'];


require_once("../model/vue.class.php");
require_once("../model/tuteur.class.php");
require_once("../model/tuteurDAO.class.php");
require_once('../model/erreur.class.php');

$verif_erreur = new Erreur();
if (!($verif_erreur->verif_id($id_visiteur))){
  $v = new View();
  $v->show("../vue/erreur_id.view.php");
}
else {
  # Instanciation du DAO pour les tuteurs
  $tuteurDAO = new TuteurDAO();

  # Instanciation de la vue
  $view = new View();
  $view->tuteurs = $tuteurDAO->selectAllTuteurs();

  $view->show("../vue/ajout_enfant.view.php");
}














 ?>
