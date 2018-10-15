<?php
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
            $tuteur->set_ptage_dispo(0);
        }
      }
      break;
    }
  }
}
$view = new View();
$view->list_trajet = $list_trajet;
$view->list_tuteur = $list_tuteur;
$view->list_cours = $list_cours;
$view->list_jours = $list_jours;
$view->show("../vue/affectation_tuteur.view.php");

 ?>
