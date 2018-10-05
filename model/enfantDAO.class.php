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
    $req = "INSERT INTO enfant(nom,prenom) VALUES($nom,$prenom)";
    $sth = $this->db->exec($req);
    if(!$sth){
        echo "\nPDO::errorInfo():\n";
        print_r($this->db->errorInfo());
    }
  }

  // Fonction qui retourne une liste de tous les cours
  function selectAllEnfants(){
    $requete = "SELECT * FROM Enfant";

    # Execution de la requete
    $res = $this->db->query($requete);
    $enfant = $res->fetchAll(PDO::FETCH_CLASS, 'Enfant');
    return (empty($enfant)) ? null : $enfant;
  }

}

 ?>
