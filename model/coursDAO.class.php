<?php

class coursDAO {
function __construct(){
    $database = 'sqlite:/var/www/html/php/projet1/web_php/model/data/database.db';
    try{
        $this->db = new PDO($database);
    }
    catch(PDOException $e){
        die("Erreur de connexion:".$e->getMessage());
    }
}

function insertCoursDBA($libelle, $heure_debut, $duree, $jour){
    global $db;
    $libelle = $this->db->quote($libelle);
    $duree = $this->db->quote($duree);
    $jour = $this->db->quote($jour);
    $req = "INSERT INTO cours(libelle,heure_debut,duree,jour) VALUES($libelle,'$heure_debut', $duree, $jour)";
    echo($req);
    $sth = $this->db->exec($req);
    if(!$sth){
        echo "\nPDO::errorInfo():\n";
        print_r($this->db->errorInfo());
    }
    if($sth == 1){
        echo '<p><strong>Le cours '.$libelle.' a bien été ajouté ! </strong></p><br/>';
    }
    else{
        echo '<p><strong>Le cours '.$libelle.' n\'a pas pu être enregistré veuillez recommencer! </strong></p><br/>';
    }
}
}

?>
