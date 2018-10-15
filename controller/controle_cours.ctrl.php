<?php

  require_once('../model/coursDAO.class.php');
  require_once('../model/jourDAO.class.php');
  $coursDAO = new CoursDAO();
  $joursDAO = new JourDAO();


  $libelle = htmlentities($_GET['libelle']);
  $heure_deb = htmlentities($_GET['heure_deb']);
  $duree = htmlentities($_GET['duree']);
  $jour_sem = htmlentities($_GET['jour_sem']);

  # On regarde qu'elle est l'id du jour demandé
  $id_jour = $joursDAO->getIdJour($jour_sem);
  # Insertion dans la base de données
  $coursDAO->insertCoursDBA($libelle, $heure_deb, $duree, $id_jour);
?>
