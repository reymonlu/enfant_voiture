<?php

require_once('cours.class.php');

class coursDAO{
  private $db;
  private $database ="../model/data/database.db";

  function __construct($database="../model/data/database.db"){
    $this->database = $database;
    try{
      $this->db = new PDO("sqlite:$this->database",'','');
    }
    catch(PDOException $e){
      die("Erreur de connexion:".$e->getMessage());
    }
}

function insertCoursDBA($libelle, $heure_debut, $duree, $jour){
    global $db;
    $libelle = $this->db->quote($libelle);
    $duree = $this->db->quote($duree);
    $jour = $this->db->quote($jour);
    $req = "INSERT INTO cours(libelle,heure_debut,duree,jour) VALUES($libelle,$heure_debut, $duree, $jour)";
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

  // Fonction qui retourne une liste de tous les cours
  function selectAllCours(){
    $requete = "SELECT * FROM Cours";

    # Execution de la requete
    $res = $this->db->query($requete);
    $cours = $res.fetchAll(PDO::FETCH_CLASS, 'Cours');
    return (empty($cours)) ? null : $cours[0];
  }
}

?>
