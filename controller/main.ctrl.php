<?php


session_start();
$r = rand(1,204433) * 42;
$_SESSION['id_visiteur'] = $r;

require_once("../model/vue.class.php");
require_once("../model/coursDAO.class.php");

# Instanciation des DAO
$coursDAO = new coursDAO();
# Récupération des données





# Instanciation de la vue
$view = new View();

$view->show("../vue/index.view.php");















 ?>
