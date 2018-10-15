<?php
class DisponibleDAO{
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
  function selectAllDisponible(){
    $requete = $this->db->prepare("SELECT * FROM Disponible");

    # Execution de la requete
    $requete->execute();
    $disponible = $requete->fetchAll(PDO::FETCH_CLASS, 'Disponible');
    return (empty($disponible)) ? null : $disponible;
  }
}









 ?>
