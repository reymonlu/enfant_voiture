<?php

require_once('../model/cookieDAO.class.php');

session_start();
if (isset($_SESSION['id_visiteur'])){
  $id_visiteur = $_SESSION['id_visiteur'];
}
if (isset($_COOKIE["enfant_projet"])){
  $cache = $_COOKIE["enfant_projet"];
  $cookieDAO = new CookieDAO();
  $cache_cookie = $cookieDAO->select_cookie($cache);
  if(isset($cache_cookie)){
    $id_visiteur = (int) $cache_cookie;
  }
}
  require_once("../model/vue.class.php");
  require_once("../model/jour.class.php");
  require_once("../model/jourDAO.class.php");
  require_once('../model/erreur.class.php');

  $verif_erreur = new Erreur();
if (!(isset($id_visiteur)) || !($verif_erreur->verif_id($id_visiteur))){
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
