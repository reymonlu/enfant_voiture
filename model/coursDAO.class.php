<?php

require_once('cours.class.php');

class coursDAO {
function __construct(){
    $database = 'sqlite:/var/www/html/php/projet1/web_php/model/data/database.db';
    try{
        $this->db = new PDO($database);
    }
    catch(PDOException $e){
        die("Erreur de connexion:".$e->getMessage());
    }
}

function newID_cours(){
      global $db;
      $cache = new Cours();
      $req = "SELECT max(id_cours) FROM cours";
      $sth = $this->db->query($req);
      $cache = $sth->fetch();
      $cache = (int)$cache[0] + 1;
      return $cache;
  }

function insertCoursDBA($id_cours, $libelle, $heure_debut, $duree, $jour){
    global $db;
    $id_cours = $this->db->quote($id_cours);
    $libelle = $this->db->quote($libelle);
    $heure_debut = $this->db->quote($heure_debut);
    $duree = $this->db->quote($duree);
    $jour = $this->db->quote($jour);
    $req = "INSERT INTO cours(id_cours,libelle,heure_debut,duree,jour) VALUES($id_cours,$libelle,$heure_debut, $duree, $jour)";
    $sth = $this->db->exec($req);
    if(!$sth){
        echo "\nPDO::errorInfo():\n";
        print_r($this->db->errorInfo());
    }
    if($sth == 1){
        echo '<p><strong>Le cours '.$libelle.' a bien été ajouté ! </strong></p><br/>';
    }
    else{
        echo '<p><strong>Le cours '.$libelle.' n\'a pas pu être enregistré veuillez recommencer! </strong></p><br/>';
    }
}
}

?>
