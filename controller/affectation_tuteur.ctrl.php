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

require_once('../model/erreur.class.php');
require_once('../model/jour.class.php');
require_once('../model/jourDAO.class.php');
require_once('../model/vue.class.php');
require_once('../model/cours.class.php');
require_once('../model/coursDAO.class.php');
require_once('../model/enfant.class.php');
require_once('../model/enfantDAO.class.php');
require_once('../model/tuteurDAO.class.php');
require_once('../model/tuteur.class.php');
require_once('../model/inscriptionDAO.class.php');
require_once('../model/inscription.class.php');
require_once('../model/trajet.class.php');
require_once('../model/disponible.class.php');
require_once('../model/disponibleDAO.class.php');
require_once('../model/erreur.class.php');

$verif_erreur = new Erreur();
$cookie = $_COOKIE["enfant_projet"];

if (!(isset($id_visiteur)) || !($verif_erreur->verif_id($id_visiteur))){
  $v = new View();
  $v->show("../vue/erreur_id.view.php");
}
else {
$dbcours = new CoursDAO();
$dbenfant = new EnfantDAO();
$dbtuteur = new TuteurDAO();
$dbinscription = new InscriptionDAO();
$dbdispo = new DisponibleDAO();
$dbjour = new JourDAO();

$list_cours = $dbcours->selectAllCours();
$list_enfants = $dbenfant->selectAllEnfants();
$list_tuteur = $dbtuteur->selectAllTuteurs();
$list_inscription = $dbinscription->selectAllInscriptions();
$list_dispo = $dbdispo->selectAllDisponible();
$list_jours = $dbjour->getAllJours();


#Variable de retour, la seule importante
$list_trajet = array();

foreach ($list_cours as $cours) {
  foreach ($list_dispo as $dispo) {
    $tuteur_ok = true;
    foreach ($list_tuteur as $tuteur) {
      if($tuteur->get_ptage_dispo() == 0 && $tuteur->get_id() == $dispo->get_tuteur()){
        $tuteur_ok = false;
      }
    }
    if($cours->get_jour() == $dispo->get_jour() && $tuteur_ok == true){
      $c = $cours->get_id_cours();
      $t = $dispo->get_tuteur();
      $tcache = new Trajet($c,$t);
      $list_trajet[] = $tcache;
      foreach ($list_tuteur as $tuteur) {
        if ($dispo->get_tuteur() == $tuteur->get_id()){
            $ptage = ($tuteur->get_ptage_dispo() / 2);
            if($ptage < 20){
              $ptage = 0;
            }
            $tuteur->set_ptage_dispo($ptage);
        }
      }
      break;
    }
  }
}

  $message = array();
  foreach ($list_trajet as $trajet) {
    foreach ($list_tuteur as $tuteur) {
      if ($tuteur->get_id() == $trajet->get_tuteur()){
          $nom = $tuteur->get_nom();
          $prenom = $tuteur->get_prenom();
      }
    }
    foreach ($list_cours as $cours) {
      if($cours->get_id_cours() == $trajet->get_cours()){
        $libelle = $cours->get_libelle();
        $heure = $cours->get_heure_debut();
        $jour = $cours->get_jour();
      }
    }
    foreach ($list_jours as $j) {
      if($j->get_id() == $jour){
        $jour = $j->getJour();
        break;
      }
    }
    $cache = array();
    $cache[] = $nom;
    $cache[] = $prenom;
    $cache[] = $libelle;
    $cache[] = $heure;
    $cache[] = $jour;
    $message[] = $cache;
  }

$view = new View();
$view->message = $message;
$view->show("../vue/affectation_tuteur.view.php");

} ?>
