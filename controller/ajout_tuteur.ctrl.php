<?php

session_start();
$id_visiteur = $_SESSION['id_visiteur'];

require_once("../model/vue.class.php");
require_once("../model/jour.class.php");
require_once("../model/jourDAO.class.php");
require_once('../model/erreur.class.php');

$verif_erreur = new Erreur();
if (!($verif_erreur->verif_id($id_visiteur))){
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
