<?php

require_once("../model/vue.class.php");
require_once("../model/tuteur.class.php");
require_once("../model/tuteurDAO.class.php");


# Instanciation du DAO pour les tuteurs
$tuteurDAO = new TuteurDAO();

# Instanciation de la vue
$view = new View();
$view->tuteurs = $tuteurDAO->selectAllTuteurs();

$view->show("../vue/ajout_enfant.view.php");















 ?>
