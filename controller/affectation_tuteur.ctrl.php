<?php
require_once('../model/cours.class.php');
require_once('../model/coursDAO.class.php');
require_once('../model/enfant.class.php');
require_once('../model/enfantDAO.class.php');
require_once('../model/tuteurDAO.class.php');
require_once('../model/tuteur.class.php');
require_once('../model/inscriptionDAO.class.php');
require_once('../model/inscription.class.php');
require_once('../model/trajet.class.php');

$dbcours = new coursDAO();
$dbenfant = new enfantDAO();
$dbtuteur = new tuteurDAO();
$dbinscription = new inscriptionDAO();

$list_cours = $dbcours->selectAllCours();
$list_enfants = $dbenfant->selectAllEnfants();
$list_tuteur = $dbtuteur->selectAllTuteurs();
$list_inscription = $dbinscription->selectAllInscriptions();
echo "liste cours";
echo "<br><br>";
var_dump($list_cours);
echo "<br><br>";
echo "liste enfants";
echo "<br><br>";
var_dump($list_enfants);
echo "<br><br>";
echo "liste tuteurs";
echo "<br><br>";
var_dump($list_tuteur);
echo "<br><br>";
echo "liste inscriptions";
echo "<br><br>";
var_dump($list_inscription);

$list_trajet = array();
foreach ($list_cours as $cours) {
  echo "a";
  foreach ($list_tuteur as $tuteur) {
    if ($tuteur->get_ptage_dispo() != 0){
      if ($tuteur->get_jour_dispo() == $cours->get_jour_semaine()){
        $tcache = new Trajet($cours,$tuteur);
        $list_trajet[] = $tcache;
        $tuteur->set_ptage_dispo(0);
        break;
      }
    }
  }
}

echo "<br><br>";
echo "liste trajets";
echo "<br><br>";
var_dump($list_trajet);

 ?>
