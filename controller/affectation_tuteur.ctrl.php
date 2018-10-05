<?php
require_once('../model/cours.class.php');
require_once('../model/coursDAO.class.php');
require_once('../model/enfant.class.php');
require_once('../model/enfantDAO.class.php');
require_once('../model/tuteurDAO.class.php');
require_once('../model/tuteur.class.php');

$dbcours = new coursDAO();
$dbenfant = new enfantDAO();
$dbtuteur = new tuteurDAO();

$list_cours = $dbcours->selectAllCours();
$list_enfants = $dbenfant->selectAllEnfants();
$list_tuteur = $dbtuteur->selectAllTuteurs();
var_dump($list_cours);
var_dump($list_enfants);
var_dump($list_tuteur);


 ?>
