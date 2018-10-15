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
    $requete = "SELECT * FROM Jour";
    # Execution de la requete
    $reponse = $this->db->query($requete);
    if(!$reponse){
      echo "\nPDO::errorInfo():\n";
      print_r($this->db->errorInfo());
    }
    # récupération des données de la réponse sous la forme d'objet Jour
    $jours = $reponse->fetchAll(PDO::FETCH_CLASS, 'Jour');
    # On retourne le résultat
    return (empty($jours)) ? null : $jours;
  }

  # Fonction qui retourne l'ID d'un jour en fonction du nom
  function getIdJour($jour){


    $requete = "SELECT id_jour FROM jour where jour = '$jour' ";
    # Execution de la requete
    $reponse = $this->db->query($requete);
    $id_jour = $reponse->fetch()[0];
    return $id_jour;
  }
}









 ?>
