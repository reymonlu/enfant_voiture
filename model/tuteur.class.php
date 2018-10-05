<?php
class Tuteur
{
  private $id_tuteur;
  private $prenom;
  private $nom;
  private $pourcentage_disponibilite;

#  public function __construct($prenom, $nom, $jour_dispo, $ptage_dispo){
#    $this->set_prenom($prenom);
#    $this->set_nom($nom);
#    $this->set_jour_dispo($jour_dispo);
#    $this->set_ptage_dispo($ptage_dispo);
#  }
  public function get_id(){
    return $this->id_tuteur;
  }
  public function set_prenom($prenom){
    $this->prenom = $prenom;
  }

  public function set_nom($nom){
    $this->nom = $nom;
  }


  public function set_ptage_dispo($ptage_dispo){
    $this->pourcentage_disponibilite = $ptage_dispo;
  }

  public function get_prenom(){
    return $this->prenom;
  }

  public function get_nom(){
    return $this->nom;
  }

  public function get_jour_dispo(){
    return $this->jour_dispo;
  }

  public function get_ptage_dispo(){
    return $this->ptage_dispo;
  }

  public function print(){
    echo "je suis le tuteur ".$this->get_prenom()." ".$this->get_nom()
      ." ".$this->get_jour_dispo()." ".$this->get_ptage_dispo();
  }
}

?>
