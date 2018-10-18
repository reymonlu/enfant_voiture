<?php

  require_once('../model/coursDAO.class.php');
  require_once('../model/jourDAO.class.php');
  require_once('../model/vue.class.php');
  require_once("../model/jour.class.php");
  $coursDAO = new CoursDAO();
  $joursDAO = new JourDAO();
  $view = new View();
  $view->jours = $joursDAO->getAllJours();


  # On test que tous les paramètres soient passés
  if( !isset($_GET['libelle']) || !isset($_GET['heure_deb']) || !isset($_GET['duree']) || !isset($_GET['jour_sem'])){
    $view->error_libelle = isset($_GET['libelle']) ? null : "Veuillez saisir le libelle";
    $view->error_heure_deb = isset($_GET['heure_deb']) ? null : "Veuillez l'heure du début";
    $view->error_duree = isset($_GET['duree']) ? null : "Veuillez la durée";
    $view->error_jour = isset($_GET['jour_sem']) ? null : "Veuillez saisir un jour correct";
    $view->show("../vue/ajout_cours.view.php");
    var_dump(preg_match(,"16:15"));
    }


  # On teste à présent la bonne intégrité des données
  elseif ($_GET['libelle'] == null || preg_match("/^[0-9]{2}:[0-9]{2}$/",$_GET['heure_deb']) ) {

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


?>
