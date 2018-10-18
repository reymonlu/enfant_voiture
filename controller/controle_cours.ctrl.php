<?php

  require_once('../model/coursDAO.class.php');
  require_once('../model/jourDAO.class.php');
  require_once('../model/vue.class.php');
  require_once("../model/jour.class.php");
  $coursDAO = new CoursDAO();
  $joursDAO = new JourDAO();
  $view = new View();
  $view->jours = $joursDAO->getAllJours();


  # S'il manque un élément, on retourne la page avec les problemes
  if(!isset($libelle) || !isset($heure_deb) || !isset($duree) || !isset($jour_sem)){
    $view->error_libelle = isset($libelle) ? null : "Veuillez saisir le libelle";






    $view->show("../vue/ajout_cours.view.php");
  }
  # Insertion dans la base de données
  else{
    $libelle = htmlentities($_GET['libelle']);
    var_dump($libelle);
    $heure_deb = htmlentities($_GET['heure_deb']);
    $duree = htmlentities($_GET['duree']);
    $jour_sem = htmlentities($_GET['jour_sem']);
    # On regarde qu'elle est l'id du jour demandé
    $id_jour = $joursDAO->getIdJour($jour_sem);

    $coursDAO->insertCoursDBA($libelle, $heure_deb, $duree, $id_jour);
    # Et on retourne la page
    header("Location: main.ctrl.php");
  }


?>
