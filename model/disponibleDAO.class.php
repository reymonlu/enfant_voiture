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
    $requete = "SELECT * FROM Disponible";

    # Execution de la requete
    $res = $this->db->query($requete);
    $disponible = $res->fetchAll(PDO::FETCH_CLASS, 'Disponible');
    return (empty($disponible)) ? null : $disponible;
  }
}









 ?>
