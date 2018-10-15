<?php

require_once('cours.class.php');

Class CoursDAO{
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
    $heure_debut = $this->db->quote($heure_debut);
    $duree = $this->db->quote($duree);
    $jour = $this->db->quote($jour);
    $req = $db->prepare("INSERT INTO cours(libelle,heure_debut,duree,jour) VALUES($libelle,$heure_debut, $duree, $jour)");
    $req->execute();
  }

  // Fonction qui retourne une liste de tous les cours
  function selectAllCours(){
    $requete = $this->db->prepare("SELECT * FROM Cours");
    $requete->execute();

    # Execution de la requete
    $cours = $requete->fetchAll(PDO::FETCH_CLASS, 'Cours');
    return (empty($cours)) ? null : $cours;
  }

}

?>
