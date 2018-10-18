<?php
Class TuteurDAO{
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
    $req = $this->db->prepare("INSERT INTO tuteur(nom,prenom,pourcentage_disponibilite) VALUES($nom,$prenom,$pourcentage_disponibilite)");
    $req->execute();
}

  function setPourcentageDisponibilite($val,$id){
    global $db;
    $req = $this->db->prepare("UPDATE tuteur SET pourcentage_disponibilite = $val WHERE id_tuteur = $id");
    $req->execute();
  }

  function selectAllTuteurs(){
    global $db;
    $requete = $this->db->prepare("SELECT * FROM Tuteur");
    $requete->execute();

    # Execution de la requete
    $tuteur = $requete->fetchAll(PDO::FETCH_CLASS, 'Tuteur');
    return (empty($tuteur)) ? null : $tuteur;
  }

  function selectTuteurID($nom, $prenom){
    global $db;
    $nom = $this->db->quote($nom);
    $prenom = $this->db->quote($prenom);
    $requete = $this->db->prepare("SELECT id_tuteur FROM Tuteur WHERE nom = $nom AND prenom = $prenom");
    $requete->execute();
    $id = $requete->fetch();
    return $id;
  }

  function selectTuteur($tuteur){
    $requete = $this->db->prepare("SELECT * FROM Tuteur WHERE id_tuteur = $tuteur");
    $requete->execute();
    $tuteur = $requete->fetchAll(PDO::FETCH_CLASS, 'Tuteur');
    return (empty($tuteur)) ? null : $tuteur;
  }
}

 ?>
