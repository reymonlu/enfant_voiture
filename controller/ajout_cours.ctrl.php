<?php
<<<<<<< HEAD

  require_once('../model/coursDAO.class.php');

  $_GET['libelle'] = htmlentities($_GET['libelle']);
  $_GET['heure_deb'] = htmlentities($_GET['heure_deb']);
  $_GET['duree'] = htmlentities($_GET['duree']);
  $_GET['jour_sem'] = htmlentities($_GET['jour_sem']);

  $libelle = $_GET['libelle'];
  $heure_deb= $_GET['heure_deb'];
  $duree = $_GET['duree'];
  $jour_sem = $_GET['jour_sem'];

  $database = new CoursDAO();
  $id_cours = $database->newID_cours();
  var_dump($id_cours);
  $database->insertCoursDBA($id_cours, $libelle, $heure_deb, $duree, $jour_sem);
  var_dump($database);

  var_dump($libelle);
  var_dump($heure_deb);
  var_dump($duree);
  var_dump($jour_sem);
?>
=======
require_once("../model/vue.class.php");




# Instanciation de la vue
$view = new View();

$view->show("../vue/ajout_cours.view.php");





















 ?>
>>>>>>> d2b252d3bd21ae02a09de037b8337908512b3b10
