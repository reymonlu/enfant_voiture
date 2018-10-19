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

# Instanciation Du DAO
$joursDAO = new JourDAO();
# Instanciation de la vue
$view = new View();
$view->jours = $joursDAO->getAllJours();
$view->show("../vue/ajout_tuteur.view.php");
}
 ?>
