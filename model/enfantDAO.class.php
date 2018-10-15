<?php
class EnfantDAO{
  private $db;
  private $database = "../model/data/database.db"; //Chemin vers la base de donnée
  function __construct(){
    try{
      $this->db = new PDO("sqlite:$this->database",'','');
    }
    catch(Exception $e){
      die('Erreur : '. $e->getMessage());
    }
}


function insertEnfantDBA($nom, $prenom){
    global $db;
    $nom = $this->db->quote($nom);
    $prenom = $this->db->quote($prenom);
    $req = $this->db->prepare("INSERT INTO enfant(nom,prenom) VALUES($nom,$prenom)");
    $req->execute();
  }

  // Fonction qui retourne une liste de tous les cours
  function selectAllEnfants(){
    $requete = $this->db->prepare("SELECT * FROM Enfant");

    # Execution de la requete
    $requete->execute();
    $enfant = $requete->fetchAll(PDO::FETCH_CLASS, 'Enfant');
    return (empty($enfant)) ? null : $enfant;
  }

}

 ?>
