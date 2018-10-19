<?php
class CookieDAO{
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


function insert_cookie($id){
    global $db;
    $req = $this->db->prepare("INSERT INTO cookie VALUES($id)");
    $req->execute();
  }

function select_cookie($id){
  global $db;
  $req = $this->db->prepare("SELECT id FROM cookie WHERE id=$id");
  $req->execute();
  return $req->fetch()[0];
}

}

 ?>
