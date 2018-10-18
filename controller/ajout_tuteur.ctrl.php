<?php
require_once("../model/vue.class.php");
require_once("../model/jour.class.php");
require_once("../model/jourDAO.class.php");

# Instanciation Du DAO
$joursDAO = new JourDAO();
# Instanciation de la vue
$view = new View();
$view->jours = $joursDAO->getAllJours();
$view->show("../vue/ajout_tuteur.view.php");

 ?>
