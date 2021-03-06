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
  require_once('../model/tuteurDAO.class.php');
  require_once("../model/vue.class.php");
  require_once('../model/enfantDAO.class.php');
  require_once('../model/erreur.class.php');
  require_once("../model/vue.class.php");
  $id_visiteur = $_SESSION['id_visiteur'];
  $v = new View();
  $enfantDAO = new enfantDAO();

  $verif_erreur = new Erreur();
if (!(isset($id_visiteur)) || !($verif_erreur->verif_id($id_visiteur))){
  $v = new View();
  $v->show("../vue/erreur_id.view.php");
  }
  else {
  # Vérification que l'URL est complète
  if( !isset($_GET['prenom']) || !isset($_GET['nom'])){
    $v->error_prenom = isset($_GET['prenom']) ? null : "Veuillez saisir le prénom";
    $v->error_nom = isset($_GET['nom']) ? null : "Veuillez saisir le nom";
    $v->show("../vue/ajout_enfant.view.php");
  }
  # Vérification que les données soient saisie
  elseif ($_GET['prenom'] == null || $_GET['prenom'] == null) {

  }


  $_GET['prenom'] = htmlentities($_GET['prenom']);
  $_GET['nom'] = htmlentities($_GET['nom']);
  $prenom = $_GET['prenom'];
  $nom = $_GET['nom'];
  $enfantDAO->insertEnfantDBA($nom, $prenom);
  header("Location: ../index.php");
}
?>
