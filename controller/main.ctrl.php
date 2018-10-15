<?php

require_once("../model/vue.class.php");
require_once("../model/coursDAO.class.php");

# Instanciation des DAO
$coursDAO = new coursDAO();
# Récupération des données





# Instanciation de la vue
$view = new View();

$view->show("../vue/index.view.php");















 ?>
