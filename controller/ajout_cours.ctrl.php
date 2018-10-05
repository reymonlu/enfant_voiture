<?php

  require_once("../model/vue.class.php");
  require_once("../model/jour.class.php");
  require_once("../model/jourDAO.class.php");

  # Récupération de tous les jours dans la base de données
  $joursDAO = new JourDAO();
  $jourDeLaSemaine = $joursDAO->getAllJours();

  # Instanciation de la vue
  $view = new View();
  # On donne les jours à la vue
  $view->jours = $jourDeLaSemaine;
  $view->show("../vue/ajout_cours.view.php");
?>
