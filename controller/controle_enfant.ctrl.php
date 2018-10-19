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
  require_once('../model/enfantDAO.class.php');
  require_once('../model/erreur.class.php');

  $verif_erreur = new Erreur();
if (!(isset($id_visiteur)) || !($verif_erreur->verif_id($id_visiteur))){
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
