<?php
class tuteurDAO{
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


function insertTuteurDBA($nom, $prenom,$pourcentage_disponibilite){
    global $db;
    $nom = $this->db->quote($nom);
    $prenom = $this->db->quote($prenom);
    $pourcentage_disponibilite = $this->db->quote($pourcentage_disponibilite);
    $req = "INSERT INTO tuteur(nom,prenom,pourcentage_disponibilite) VALUES($nom,$prenom,$pourcentage_disponibilite)";
    echo($req);
    $sth = $this->db->exec($req);
    if(!$sth){
        echo "\nPDO::errorInfo():\n";
        print_r($this->db->errorInfo());
    }
}

  function selectAllTuteurs(){
    $requete = "SELECT * FROM Tuteur";

    # Execution de la requete
    $res = $this->db->query($requete);
    $tuteur = $res->fetchAll(PDO::FETCH_CLASS, 'Tuteur');
    return (empty($tuteur)) ? null : $tuteur;
  }

}

 ?>
