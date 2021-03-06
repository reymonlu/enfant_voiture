<?php
class InscriptionDAO{
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



  // Fonction qui retourne une liste de tous les cours
  function selectAllInscriptions(){
    $requete = $this->db->prepare("SELECT * FROM Inscription");

    # Execution de la requete
    $requete->execute();
    $inscription = $requete->fetchAll(PDO::FETCH_CLASS, 'Inscription');
    return (empty($inscription)) ? null : $inscription;
  }

}
 ?>
