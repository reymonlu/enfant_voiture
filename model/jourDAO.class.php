<?php
class JourDAO{
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
  # Fonction qui retourne toute la table Jours
  function getAllJours(){
    $requete = $this->db->prepare("SELECT * FROM Jour");
    $requete->execute();
    # Execution de la requete
    #$reponse = $this->db->query($requete);
    # récupération des données de la réponse sous la forme d'objet Jour
    $jours = $requete->fetchAll(PDO::FETCH_CLASS, 'Jour');
    # On retourne le résultat
    return (empty($jours)) ? null : $jours;
  }
}









 ?>
