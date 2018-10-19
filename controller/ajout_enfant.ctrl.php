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
require_once("../model/tuteur.class.php");
require_once("../model/tuteurDAO.class.php");
require_once('../model/erreur.class.php');

$verif_erreur = new Erreur();
if (!(isset($id_visiteur)) || !($verif_erreur->verif_id($id_visiteur))){
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
