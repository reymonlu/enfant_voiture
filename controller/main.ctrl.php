<?php


session_start();
$r = rand(1,204433) * 42;
$_SESSION['id_visiteur'] = $r;
setcookie("enfant_projet",$r,time()+3600);

require_once("../model/vue.class.php");
require_once("../model/coursDAO.class.php");
require_once("../model/cookie.class.php");
require_once("../model/cookieDAO.class.php");

# Instanciation des DAO
$coursDAO = new coursDAO();
$cookieDAO = new CookieDAO();
$cookieDAO->insert_cookie($r);
# Récupération des données





# Instanciation de la vue
$view = new View();

$view->show("../vue/index.view.php");















 ?>
