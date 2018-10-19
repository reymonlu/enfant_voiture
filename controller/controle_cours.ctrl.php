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
  require_once('../model/coursDAO.class.php');
  require_once('../model/jourDAO.class.php');
  require_once('../model/vue.class.php');
  require_once("../model/jour.class.php");
  require_once('../model/erreur.class.php');

  $verif_erreur = new Erreur();
if (!(isset($id_visiteur)) || !($verif_erreur->verif_id($id_visiteur))){
  $v = new View();
  $v->show("../vue/erreur_id.view.php");
  }
  else {
  $coursDAO = new CoursDAO();
  $joursDAO = new JourDAO();
  $view = new View();
  $view->jours = $joursDAO->getAllJours();
  $jours = array(); # Variable qui contient tous les jours de la base de données
  foreach ($view->jours as $key) {
    $jours[] = $key->getJour();
  }


  # On test que tous les paramètres soient passés
  if( !isset($_GET['libelle']) || !isset($_GET['heure_deb']) || !isset($_GET['duree']) || !isset($_GET['jour_sem'])){
    $view->error_libelle = isset($_GET['libelle']) ? null : "Veuillez saisir le libelle";
    $view->error_heure_deb = isset($_GET['heure_deb']) ? null : "Veuillez saisir l'heure du début";
    $view->error_duree = isset($_GET['duree']) ? null : "Veuillez saisir la durée";
    $view->error_jour = isset($_GET['jour_sem']) ? null : "Veuillez saisir un jour correct";
    $view->show("../vue/ajout_cours.view.php");
    }

  # On teste à présent la bonne intégrité des données
  elseif ($_GET['libelle'] == null || !preg_match("/^[0-9]{2}:[0-9]{2}$/",$_GET['heure_deb']) || !preg_match("/^[0-9]{2}:[0-9]{2}$/",$_GET['duree']) || !in_array($_GET['jour_sem'], $jours)) {
    $view->error_libelle = $_GET['libelle'] != null ? null : "Veuillez saisir le libelle";
    $view->error_heure_deb = $_GET['heure_deb'] != null ? null : "Veuillez l'heure du début";
    $view->error_duree = $_GET['duree'] != null ? null : "Veuillez la durée";
    $view->error_jour = in_array($_GET['jour_sem'], $jours) ? null : "Veuillez saisir un jour correct";
    $view->show("../vue/ajout_cours.view.php");
  }
  # Insertion dans la base de données
  else{
    $libelle = htmlentities($_GET['libelle']);
    $heure_deb = htmlentities($_GET['heure_deb']);
    $duree = htmlentities($_GET['duree']);
    $jour_sem = htmlentities($_GET['jour_sem']);
    # On regarde qu'elle est l'id du jour demandé
    $id_jour = $joursDAO->getIdJour($jour_sem);
    $coursDAO->insertCoursDBA($libelle, $heure_deb, $duree, $id_jour);
    # Et on retourne la page
    header("Location: main.ctrl.php");
  }
}

?>
