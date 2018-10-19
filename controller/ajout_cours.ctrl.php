<?php


  session_start();
  $id_visiteur = $_SESSION['id_visiteur'];

  require_once("../model/vue.class.php");
  require_once("../model/jour.class.php");
  require_once("../model/jourDAO.class.php");
  require_once('../model/erreur.class.php');

  $verif_erreur = new Erreur();
  if (!($verif_erreur->verif_id($id_visiteur))){
  $v = new View();
  $v->show("../vue/erreur_id.view.php");
  }
  else {
  # Récupération de tous les jours dans la base de données
  $joursDAO = new JourDAO();
  $jourDeLaSemaine = $joursDAO->getAllJours();

  # Instanciation de la vue
  $view = new View();
  # On donne les jours à la vue
  $view->jours = $jourDeLaSemaine;
  $view->show("../vue/ajout_cours.view.php");
}
?>
